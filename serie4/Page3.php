<?php 
	$titre = "Exercices serie3";
	require "header.php"; 
?>
	<h1><?= $titre ?></h1>
	<div class="container">		
<?php

    for($i=1; $i<=10; $i++){
        echo "Ceci est la ligne n°{$i}.<br/>";
    }

?>
<hr/>
<ul>
<?php
    for($i=1; $i<=10; $i++){
        echo "<li>Ceci est la ligne n°{$i}.</li>";
    }
?>
</ul>

<hr/>

<table class="afficheBord">
    <tr>
        <th>#</th>
        <th>Libellé</th>
    </tr>
    <?php for($i=1; $i<=10; $i++){ ?>
    <tr>
        <td><?= $i ?></td>
        <td>Ceci est la ligne n°<?= $i ?>.</td>
    </tr>
    <?php } ?>
</table>

<hr/>

<table class="afficheBord">
    <tr>
        <th>#</th>
        <th>Libellé</th>
    </tr>
    <?php for($i=1; $i<=10; $i++){ ?>
    <tr class="<?= ($i%2 == 0)? "red" : "blue" ?>">
        <td><?= $i ?></td>
        <td>Ceci est la ligne n°<?= $i ?>.</td>
    </tr>
    <?php } ?>
</table>

	</div>
<?php require "footer.php"; ?>
