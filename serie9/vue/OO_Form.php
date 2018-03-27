<?php 
	$titre = "Exercices 6b - Creation de la class Form.";
    require "header.php"; 
?>
<h1><?= $titre ?></h1>
<div class="container">		
<?php

    $form = new Form('formulaire', 'formulaire', 'post', 'http://dero-promsocatc.alwaysdata.net/index.php', 'Mon Formulaire');

    $form->SetClass('col-sm-offset-3 col-sm-6');

    $params = new PInput('text');
    $params->SetInfo(array(
        'label' => '*Nom : ', 
        'id' => 'NOM',
        'name' => 'NOM',
        'required' => true,
        'placeholder' => 'Veuillez entrez votre nom'
    ));
    $form->SetInputBootstrap($params);

    $params = new PInput('email');
    $params->SetInfo(array(
        'label' => '*Email : ', 
        'id' => 'EMAIL',
        'name' => 'EMAIL',
        'required' => true,
        'placeholder' => 'Veuillez entrez votre adresse mail'
    ));
    $form->SetInputBootstrap($params);

    $form->SetSubmit('Envoyez');

    echo $form->GetFormBootstrap();

 /*   
    echo '<hr/>';
    $form = new Form('formulaire', 'formulaire', 'post', 'http://dero-promsocatc.alwaysdata.net/index.php');    
    $form->SetText('*Nom :', 'NOM', 'NOM', 'Veuillez entrez votre nom', '', true);
    $form->SetEmail('*Email :', 'EMAIL', 'EMAIL', 'email@fournisseur.com', '', true);
    $form->SetSubmit('Envoyez');
    echo $form->GetForm();
*/  
?>
</div>
<?php require "footer.php"; ?>
