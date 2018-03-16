<?php 
	$titre = "Bdd access";
    require "../vue/header.php";
	require "core.php";
	$Tabletest=Model::load("tabletest");
	require '../vue/index.php';
	
    require "../vue/footer.php";
?>
