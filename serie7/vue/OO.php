<?php 
	$titre = "Exercices 6 - Creation de la class Personnage.";
    require "header.php"; 
?>
<h1><?= $titre ?></h1>
<div class="container">		
<h2>Que le combat commence !</h2>
<?php
    require 'OO/Personnage.php';
    
    $perso1 = new Personnage(50,5);
    $perso2 = new Personnage(100,23);
    $perso1->frapper($perso2);
    $perso1->gagnerExperience();
    $perso2->frapper($perso2);
    $perso2->gagnerExperience();
    

    echo 'Le personnage 1 a ', $perso1->getforce(), 
         ' de force, contrairement au personnage 2 qui a',
         $perso2->getforce(), ' de force.<br />';
    
    echo 'Le personnage 1 a ', $perso1->getexperience(), 
         ' d\'expérience, contrairement au personnage 2 qui a ', 
         $perso2->getexperience(), ' d\'expérience.<br />';
    
    echo 'Le personnage 1 a ', $perso1->getdegats(), 
         ' de dégâts, contrairement au personnage 2 qui a ', 
         $perso2->getdegats(), ' de dégâts.<br />';
?>
</div>
<?php require "footer.php"; ?>
