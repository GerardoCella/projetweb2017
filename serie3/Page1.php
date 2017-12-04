<?php 
	$titre = "Les actus de votre région";
	require "header.php"; 
?>
	<h1><?= $titre ?></h1>
	<div class="container">		
		<div class="row">
			<section class="col-md-10">
				<div class="row">
					<article class="col-md-8">
						<img class="img-responsive" src="images/1.jpg" />
						<p>Charles Michel avec les étudiants en Erasmus</p>
					</article>
					<article class="col-md-4">
						<img class="img-responsive" src="images/2.jpg" />
						<p>COP23:"La Belgique partage le sentiment d'urgence et agit</p>
					</article>
					<article class="col-md-4">
						<img class="img-responsive" src="images/3.jpg" />
						<p>Le journaliste Hugo Clément quitte «Quoditien»</p>
					</article>
					<article class="col-md-4">
						<img class="img-responsive" src="images/4.jpg" />
						<p>Un sanglier coincé dans une piscine à Erpent</p>
					</article>
					<article class="col-md-8">
						<img class="img-responsive" src="images/5.jpg" />
						<p>Rassemblement devant l’Albertine</p>
					</article>
				</div>
			</section>
			<aside class="col-md-2">
				<h2>Fil d'actualité</h2>
				<ul>
					<li>Aujourd'hui à 21:07 VIDÉO | Des feux d’artifice «silencieux» au nouvel an pour respecter les animaux?</li>
					<li>Aujourd'hui à 21:04 Liban: le Premier ministre démissionnaire à Paris.</li>
					<li>Aujourd'hui à 21:02 Charles Michel avec des étudiants Erasmus en Suède.</li>
					<li>Aujourd'hui à 20:47 Accident avec un taxi: on recherche le témoin.</li>
					<li>Aujourd'hui à 20:26 Drame à Huccorgne: une maman et une fillette décédées.</li>
				</ul>
			</aside>
		</div>
	</div>
<?php require "footer.php"; ?>
