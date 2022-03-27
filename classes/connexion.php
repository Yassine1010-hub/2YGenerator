<?php
class Connexion
{
    public static $bdd;

    public static function initConnexion(){
         self::$bdd = new PDO('mysql:host=localhost;dbname=Cv;charset=utf8', 'root', '');
        
    }
}

?>
