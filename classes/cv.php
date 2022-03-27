<?php

@require_once('classes/connexion.php');

class CV extends Connexion{
    
     public $nomCv
     public $dateCrea;
     public $URI;
     

     public function __construct(){
    }

    public function addCV(){
 

      $sql= parent::$bdd->prepare("INSERT into Formation(nomCv,dateCrea,URI)  VALUES (?,?,?)");


      $sql->execute(array($this->nomCv, $this->dateCrea,$this->URI));

     
    }

}

?>