<?php

@require_once('classes/connexion.php');

class InfoCV extends Connexion{
     public $firstName;
     public $name;
     public $mail;
     public $adress;
     public $phone;
     public $dateBirth;
     public $objectif;
     public $nomCompetences;
     public $experience;
     public $formation;
     public $centreInterets;
     public $competences;


     public function __construct(){
    }

    public function addCV(){
 

      $sql= parent::$bdd->prepare("INSERT into information(firstName,name,mail,adress,numberPhone,dateBirth,objectif)  VALUES (?,?,?,?,?,?,?)");


      $sql->execute(array($this->firstName, $this->name,$this->mail,$this->adress, $this->phone,$this->dateBirth, $this->objectif));

     
    }

}

?>