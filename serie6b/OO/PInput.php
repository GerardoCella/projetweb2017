<?php
class PInput
{
    public $type;
    public $label;
    public $name;
    public $value;
    public $placeholder;
    public $id;
    public $required;
    
    public function __construct($type, $label=null, $name=null, $value=null, $placeholder=null, $id=null, $required=false){
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->id = $id;
        $this->required = $required;
    }

    public function SetInfo($params)
    {
        if($params == null || !is_array($params))
        {
            trigger_error('Les parametres doivent être sous forme d\'un tableaux.', E_USER_WARNING);
            return;
        }

        foreach ($params as $key => $value) {
            switch ($key) {
                case 'required' :
                    if(!is_bool($value))
                    {
                        trigger_error("Le parametre 'required' doit etre un booléen.", E_USER_WARNING);
                        return;
                    }
                case 'label': 
                case 'name' : 
                case 'value' : 
                case 'placeholder' : 
                case 'id' : 
                    $this->$key = $value; break;                
                default:
                    trigger_error("Le parametres '$key' n'est pas reconnu.", E_USER_WARNING);
                    return;
            }
        }

    }

    public function GetInfo()
    {
        return json_encode($this);
    }
    
}