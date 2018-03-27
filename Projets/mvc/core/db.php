<?php

class Db{
	private static $_connection;

	static function getConnection(){
		if(!isset(Db::$_connection)){
			try {
				
				$dns = 'mysql:host=127.0.0.1;dbname=projet';
				$utilisateur = "root";
				$motDePasse = '';
	
				// Options de connection
				$options = array(
					PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8"
				);
	
				// Initialisation de la connection
				Db::$_connection = new PDO( $dns, $utilisateur, $motDePasse, $options );
			} catch ( Exception $e ) {
				echo "Connection à MySQL impossible : ", $e->getMessage();
				die();
			}
		}			
		
		return Db::$_connection;
	}
}



?>

