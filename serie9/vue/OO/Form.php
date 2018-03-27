<?php
class Form
{
    private $_name;
    private $_id;
    private $_method;
    private $_action;
    private $_titre;
    private $_list;
    private $_class;

    public function __construct($name, $id, $method, $action, $titre=null)
    {
        $this->_name = $name;
        $this->_id = $id;
        $this->_method = $method;
        $this->_action = $action;
        $this->_titre = $titre;
        $this->_class = null;
    }
//////////////////////////////////////////////////////////////////////// Version perso \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    public function SetInputBootstrap($params){
        if(!is_a($params, 'PInput'))
        {
            trigger_error("Le parametre doit etre une instance de 'PInput'.", E_USER_WARNING);
            return;
        }

        $html = '<div class="form-group">';
        $info = json_decode($params->GetInfo(), true);
        if($info['label'] != null)
        {
            $html .= '<label for="' . $info['id'] . '">' . $info['label'] . '</label>';
        }
        
        $html .= '<input';
        foreach ($info as $key => $value) {
            if(((is_bool($value) && $value) || $value != null) && $key != 'label')
                $html .= ' ' . $key . '="' . $value . '"';
        }
        $html .= ' class="form-control"/></div>';
        $this->_list[] = $html;
    }

    public function GetFormBootstrap()
    {
        if($this->_titre == null)
        {
            trigger_error("Le parametre 'titre' doit être défini.", E_USER_WARNING);
            return;
        }
        $html = '<form action="' . $this->_action . '" method="' . $this->_method . '" class="' . $this->_class . '">';
        $html .= '<fieldset><legend>' . $this->_titre . '</legend>';
        
        foreach ($this->_list as $value) {
            $html .= $value;
        }
        $html .= '</fieldset></form>';

        return $html;
    }

    public function SetClass($class)
    {
        $this->_class = $class;
    }
//////////////////////////////////////////////////////////////////////// Version ecole \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function SetText($label, $name, $id, $placeholder='', $value='', $required=false)
    {
        $this->pSetInput('text', $label, $name, $id, $placeholder, $value, $required);
    }

    public function SetEmail($label, $name, $id, $placeholder='', $value='', $required=false)
    {
        $this->pSetInput('email', $label, $name, $id, $placeholder, $value, $required);
    }

    private function pSetInput($type, $label, $name, $id, $placeholder, $value, $required){
        $html = '<label for="'. $id . '">'. $label . '</label>';
        $html .= '<br/>';
        $html .= '<input type="' . $type . '" id="' . $id . '" name="' . $name . '" placeholder="' . $placeholder .'" value="' . $value . '" ';
        $html .= $required ? 'required ' : '';
        $html .= '/>';
        $html .= '<br/>';
        
        $this->_list[] = $html;
    }

//////////////////////////////////////////////////////////////////////// Version commune \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    
    public function SetSubmit($value, $name='', $id=''){
        $html = '<input type="submit" name="' . $name . '" id="' . $id . '" value="' . $value . '"/>';
        
        $this->_list[] = $html;
    }

    public function GetForm()
    {
        $html = '<form action="' . $this->_action . '" method="' . $this->_method . '">';
        foreach ($this->_list as $value) {
            $html .= $value;
        }
        $html .= '</form>';

        return $html;
    }

}
