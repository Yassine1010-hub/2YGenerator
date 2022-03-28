<?php
class Connexion
{
    public static $bdd;

    	public static $dns="mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201663";
    	public static $user="dutinfopw201663";
    	public static $password="pevyretu";
		
		public static function initConnexion() {			
			Connexion::$bdd = new PDO(self::$dns, self::$user, self::$password);	
		}
	
}

?>
