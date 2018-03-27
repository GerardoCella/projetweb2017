<?php
	session_start();
	
	function chargerClasse($classe)
	{
		require 'OO/' . $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
	}
	
	spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Examen - <?= $titre ?></title>
	<link rel="stylesheet" href="../vue/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../vue/css/style.css"/>
</head>
<body>
	<nav class="navbar navbar-inverse" id="navbar">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="Page1.php">Le site d'actualité</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="../control/Page1.php">Régions</a></li>
	      <li><a href="../control/Page2.php">Foot</a></li>
	      <li><a href="../control/Page3.php">bdd</a></li>
				<li><a href="../vue/Page5.php">tabletest</a></li>

	    </ul>
			<?php if(isset($_SESSION['UTILISATEUR_OK']) && $_SESSION['UTILISATEUR_OK'] == 1) { ?>
					<div class="navbar-brand">Bienvenue <?= $_SESSION['UTILISATEUR_NOM'] ?></div>
					<form action="disconect.php" method="post">
            <input type="submit" name="formulaire" value="Deconnecter"/>
        	</form>
			<?php } ?>

	  </div>
	</nav>