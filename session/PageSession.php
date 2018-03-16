<?php 
    session_start();
	$titre = "Exercices session";
	require "header.php"; 
?>
	<h1><?= $titre ?></h1>
	<div class="container">

<?php   
    if(!isset($_POST["formulaire"])) {
?>
        <form action="?" method="post">
            <label for="NOM">Nom :</label>
            <input type="text" id="NOM" name="NOM" required placeholder="Entrez votre nom"/><br/>
            <label for="PRENOM">Prénom :</label>
            <input type="text" id="PRENOM" name="PRENOM" required placeholder="Entrez votre prénom"/><br/>
            <label for="EMAIL">Email :</label>
            <input type="email" id="EMAIL" name="EMAIL" required placeholder="nom.prenom@gmail.com"/><br/>
            <label for="SEXEH">Sexe :</label>
            Masculin <input type="radio" id="SEXEH" name="SEXE" value="H" checked>
            Féminin <input type="radio" id="SEXEF" name="SEXE" value="F"><br/>
            <input type="submit" name="formulaire" value="Envoyer"/>
        </form>
<?php   
    } else {
        $_SESSION['nomComplet'] = $_POST['PRENOM'] . ' ' . $_POST['NOM'];
        $_SESSION['email'] = $_POST['EMAIL'];
        $_SESSION['sexe'] = $_POST['SEXE'];
        $html = "<p>Merci {$_SESSION['nomComplet']}.";
        echo $html;
    }
?>

	</div>
<?php require "footer.php"; ?>
