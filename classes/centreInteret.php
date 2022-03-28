<?php

@require_once('classes/connexion.php');

class centreInteret extends Connexion{
    
     
     public $nomCentre;
     public $description;
     

     public function __construct(){
    }

    public function addCV(){
 

      $sql= parent::$bdd->prepare("INSERT into CentreDinteret(nomCentre,description)  VALUES (?,?)");


      $sql->execute(array($this->nomCentre,$this->description));

     
    }

}

?>