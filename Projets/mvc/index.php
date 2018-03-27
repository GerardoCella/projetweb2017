<?php
 
 require 'mvc/core/db.php';
 require 'mvc/core/request.php';

 // pour recuperer la connection à la base de données
 Db::getConnection();

 $sql = "Select * from users";

$req = new Request()
