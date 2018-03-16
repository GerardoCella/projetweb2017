<?php
class Personnage
{
  private $_force;
  private $_experience;
  private $_degats;
  private $_pv;

  public function __construct($force, $degats) // Constructeur demandant 2 paramètres
  {
    $this->setForce($force); // Initialisation de la force.
    $this->setDegats($degats); // Initialisation des dégâts.
    $this->_experience = 1; // Initialisation de l'expérience à 1.
    $this->_pv = 100;
  }

  // Mutateur chargé de modifier l'attribut $_force.
  public function setForce($force)
  {
    if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }

    if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
    {
      trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
      return;
    }

    $this->_force = $force;
  }

  // Mutateur chargé de modifier l'attribut $_degats.
  public function setDegats($degats)
  {
    if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
      return;
    }

    $this->_degats = $degats;
  }

  public function frapper($cible){
    if (!is_a($cible,'Personnage')) // S'il ne s'agit pas une instance de Personnage.
    {
      trigger_error('La cible doit etre un Personnage', E_USER_WARNING);
      return;
    }
    $cible->RecoitDegats($this->_force);
  }

  public function RecoitDegats($degats){
    if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.
    {
      trigger_error('Le niveau de dégâts doit être un nombre entier', E_USER_WARNING);
      return;
    }
    $this->_pv -= $degats;
  }

  public function gagnerExperience(){
    $this->_experience += 1;
  }

  public function getforce(){
    return $this->_force;
  }
  
  public function getexperience(){
    return $this->_experience;
  }
  
  public function getdegats(){
    return $this->_degats;
  }
}

?>