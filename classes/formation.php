<?php

@require_once('classes/connexion.php');

class Formation extends Connexion{
    
     public $date;
     public $nomEtablissement;
     public $nomFormation;
     

     public function __construct(){
    }

    public function addCV(){
 

      $sql= parent::$bdd->prepare("INSERT into Formation(date, nomEtablissement,nomFormation)  VALUES (?,?,?)");


      $sql->execute(array($this->date, $this->nomEtablissement,$this->nomFormation));

     
    }

}

?>