<?php

@require_once('classes/connexion.php');

class Experience extends Connexion{
    
     public $date;
     public $nomExperience;
     public $description;
     

     public function __construct(){
    }

    public function addCV(){
 

      $sql= parent::$bdd->prepare("INSERT into experience(date, nomExperience,description)  VALUES (?,?,?)");


      $sql->execute(array($this->date, $this->nomExperience,$this->description));

     
    }

}

?>