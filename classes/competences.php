<?php

@require_once('classes/connexion.php');

class Competences extends Connexion{
    
     public $nomCompetences;
     public $description;
 

     public function __construct(){
    }

    public function addCV(){
 

      $sql= parent::$bdd->prepare("INSERT into Competences(description, nomCompetences)  VALUES (?,?)");


      $sql->execute(array($this->description, $this->nomCompetences));

     
    }

}

?>