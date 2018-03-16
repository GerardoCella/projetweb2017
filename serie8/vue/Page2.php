	<h1><?= $titre ?></h1>
	<div class="container">		
		<div class="row">
			<section class="col-md-10">
				<div class="row">
					<article class="col-md-6">
						<img class="img-responsive" src="../vue/images/italie.jpg" />
						<h2>Généralités</h2>
						<p>Confédération: UEFA</p>
						<p>Couleurs : Bleu marine et blanc</p>
						<p>Surnom : GliAzzurri</p>
						<p>Classement FIFA : 17e (14 septembre 2017)</p>
					</article>
					<article class="col-md-6">
						<img class="img-responsive" src="../vue/images/belgique.jpg" />
						<h2>Généralités</h2>
						<p>Confédération: UEFA</p>
						<p>Surnom : Les Diables Rouges</p>
						<p>Stade principal: Stade Roi Baudouin</p>
						<p>Classement FIFA : 5e (16 octobre 2017)</p>						
					</article>
					<article class="col-md-6">
						<h2>Statistiques : 2000-2017</h2>
						<table class="table">
							<tr>
								<th colspan="2"></th>
								<th>Belgique</th>
								<th>Italie</th>
							</tr>
							<tr>
								<th rowspan="3">Matchs</th>
								<th>Victoires</th>
								<td>42</td>
								<td>31</td>
							</tr>
							<tr>
								<th>Défaites</th>
								<td>10</td>
								<td>12</td>
							</tr>
							<tr>
								<th>Nuls</th>
								<td>25</td>
								<td>30</td>
							</tr>
							<tr>
								<th colspan="2">Total</th>
								<td>77</td>
								<td>73</td>
							</tr>
						</table>
					</article>
					<article class="col-md-6">
						<h2>Inscrivez-vous</h2>
						<p>Inscrivez-vous ici pour recevoir chaque semaine votre comparatif!</p>
						<form action="http://dero-promsocatc.alwaysdata.net/index.php" method="post">
							<label for="NOM">Nom :</label>
							<input type="text" id="NOM" name="NOM" required placeholder="Entrez votre nom"/><br/>
							<label for="PRENOM">Prénom :</label>
							<input type="text" id="PRENOM" name="PRENOM" required placeholder="Entrez votre prénom"/><br/>
							<label for="EMAIL">Email :</label>
							<input type="email" id="EMAIL" name="EMAIL" required placeholder="nom.prenom@gmail.com"/><br/>
							<label for="SEXEH">Sexe :</label>
							Masculin <input type="radio" id="SEXEH" name="SEXE" value="H" checked>
							Féminin <input type="radio" id="SEXEF" name="SEXE" value="F"><br/>
							<input type="submit" value="Envoyer"/>
						</form>
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
