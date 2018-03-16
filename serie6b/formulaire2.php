<?php 
	$titre = "Exercices serie 5";
    require "header.php";
    
    $nom = isset($_POST['NOM']) ? $_POST['NOM'] : '';
    $email = isset($_POST['EMAIL']) ? $_POST['EMAIL'] : '';

    $valid = true;
?>
<h1><?= $titre ?></h1>
<div class="container">
	<h2>Nous contacter</h2>
    <h3>Formulaire</h3>

    <form action="?" method="post">
        <label for="NOM">Nom :</label><br/>
        <input type="text" id="NOM" name="NOM" required placeholder="Nom, Prénom" value="<?= $nom ?>" /><br/>
        <?php 
            if(isset($_POST['NOM']) && stristr($_POST['NOM'], ',') === FALSE) {
                $valid = false;
        ?>
                <div class="alert alert-danger">ERREUR sur le format du nom complet !!</div>
        <?php
            }
        ?>
        <label for="EMAIL">Email :</label><br/>
        <input type="email" id="EMAIL" name="EMAIL" required placeholder="Email@monfournisseur.com" value="<?= $email ?>" /><br/>
        <?php 
            if(isset($_POST['EMAIL']) && !preg_match ( "/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/" , $_POST['EMAIL'] )) {
                $valid = false;
        ?>
                <div class="alert alert-danger">ERREUR sur le format de l'email !!</div>
        <?php
            }
        ?>
        <label for="MESSAGE">Votre message :</label><br/>
        <textarea name="MESSAGE" id="MESSAGE" cols="30" rows="10"><?= isset($_POST['MESSAGE']) ? $_POST['MESSAGE'] : '' ?></textarea><br/>
        <label for="JESUIS">Je suis :</label><br/>
        <select name="JESUIS" id="JESUIS">
            <option value="PART" 
                <?= isset($_POST['JESUIS']) && $_POST['JESUIS'] == 'PART' ? 'selected' : '' ?>>Particulier</option>
            <option value="PROF"
                <?= isset($_POST['JESUIS']) && $_POST['JESUIS'] == 'PROF' ? 'selected' : '' ?>>Professionel</option>
        </select><br/>
        <input type="checkbox" id="NEWSLETTER" name="NEWSLETTER" value="1"
            <?= isset($_POST['NEWSLETTER']) && $_POST['NEWSLETTER'] == '1' ? 'checked' : '' ?>> Je veux recevoir la newsletter<br/>
        <input type="submit" name="formulaire" id="formulaire" value="Envoyer"/>
    </form>

<?php
    if($valid && isset($_POST['formulaire'])){
        $_SESSION['UTILISATEUR_NOM'] = $_POST['NOM'];
        $_SESSION['UTILISATEUR_OK'] = 1;
    }
?>

</div>
<?php require "footer.php"; ?>
