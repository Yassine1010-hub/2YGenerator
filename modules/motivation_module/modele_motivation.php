<?php

@require_once('classes/connexion.php');
@require_once('classes/infoCV.php');
@require_once('classes/formation.php');
@require_once('classes/competences.php');
@require_once('classes/centreInteret.php');
@require_once('classes/experience.php');
class ModeleCV extends Connexion{

     public function __construct(){
    }

    public function addInfo(){

        $info= new InfoCV();
        $info->firstName=$_POST["surname"];
        $info->name=$_POST["name"];
        $info->mail=$_POST["mail"];
        $info->adress=$_POST["adress"];
        $info->phone=$_POST["phone"];
        $info->dateBirth=$_POST["dateBirth"];
        $info->objectif=$_POST["target"];
       
       $info->addCV();

         $formation= new Formation();
       $formation->nomFormation=$_POST["title-form-1"];
     
       $formation->nomEtablissement=$_POST["text-form-1"];
       $formation->addCV();

       $formation2= new Formation();
       $formation2->nomFormation=$_POST["title-form-2"];
     
       $formation2->nomEtablissement=$_POST["text-form-2"];

       
       $formation2->addCV();



       $experience= new Experience();
       $experience->nomExperience=$_POST["title-xp-1"];
     
       $experience->description=$_POST["text-xp-1"];
       $experience->addCV();
       
       $experience2= new Experience();
       $experience2->nomExperience=$_POST["title-xp-2"];
       $experience2->description=$_POST["text-xp-2"];
       
     
       $experience2->addCV();

      



       $centreInteret= new centreInteret();
       $centreInteret->nomCentre=$_POST["interest"];
       $centreInteret->description=$_POST["descriptionInteret"];
     
       $centreInteret->addCV();



       $competences= new Competences();
       $competences->nomCompetences=$_POST["nomCompetence"];
       $competences->description=$_POST["description"];


     
       $competences->addCV();


    



    }
}



?>
            
    
                