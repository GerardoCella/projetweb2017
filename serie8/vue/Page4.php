<?php 
	$titre = "Exercices serie4";
	require "header.php"; 
?>
<h1><?= $titre ?></h1>
<div class="container">		
	<h2>Exercice 1</h2>
	<?php
		$jourSemaine = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
	?>
	<table class="table table-hover">
		<tr class="row">
			<th scope="col">Jour</th>
		</tr>
		<?php foreach($jourSemaine as $value) { ?>
		<tr class="row">
			<td><?= $value ?></td>
		</tr>
		<?php } ?>
	</table>

	<h2>Exercice 2</h2>
	<?php
		$jourSemaine = array(
			'Lundi' => 'Ecole', 
			'Mardi' => 'Ecole', 
			'Mercredi' => 'Ecole', 
			'Jeudi' => 'Ecole', 
			'Vendredi' => 'Ecole', 
			'Samedi' => 'Maison', 
			'Dimanche' => 'Maison'
		);
	?>
	<table class="table table-hover">
		<tr class="row">
			<th scope="col">Jour</th>
		</tr>
		<?php foreach($jourSemaine as $key => $value) { ?>
		<tr class="row">
			<td><?= $key ?></td>
			<td><?= $value ?></td>
		</tr>
		<?php } ?>
	</table>

	<h2>Exercice 3</h2>
	<?php
		$jourSemaine = array(
			'Lundi' => 'Ecole', 
			'Mardi' => 'Ecole', 
			'Mercredi' => 'Ecole', 
			'Jeudi' => 'Ecole', 
			'Vendredi' => 'Ecole', 
			'Samedi' => 'Maison', 
			'Dimanche' => 'Maison'
		);
	?>
	<table class="table">
		<tr class="row">
			<th scope="col">Jour</th>
		</tr>
		<?php 
			for($i = 1; $i <= 52; $i++) {
				$nouvelleLigne = true;
				foreach($jourSemaine as $key => $value) { 
		?>
		<tr class="row">
			<?php 
				if ($nouvelleLigne) { 
					$nouvelleLigne = false; 
			?>
					<td rowspan = "7" ><?= $i ?></td>
			<?php 
				} 
			?>
			<td><?= $key ?></td>
			<td><?= $value ?></td>
		</tr>
		<?php 
				}
			} 
		?>
	</table>

</div>
<?php require "footer.php"; ?>
