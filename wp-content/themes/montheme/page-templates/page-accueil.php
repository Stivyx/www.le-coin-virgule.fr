<?php
/*
Template Name: Page d'accueil
*/

get_header(); ?>

<div class="page--accueil" role="main">

		<!-- Accueil header -->
		<section class="accueil--header">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/la-coop-vu-du-ciel.jpg" alt="">
				<figcaption>
					<h1>Le coin virgule</h1>
					<p class="sous-titre-entete" >Projet de Réaménagement quartier de la Coop</p>
					<p>A l'instar d'autres métropoles françaises et européennes, Strasbourg a lancé de vastes projets de réhabilitation de ses friches industrielles (Presqu'Ile Malraux, route du Rhin, ZAC des Deux Rives) en nouveaux quartiers de la ville mêlant habitations, bureaux et espaces d'innovations artistiques ou entrepreunariales.<br><br>
					Acquis en 2015 par la ville de Strasbourg, les locaux de la Coop et les parcelles avoisinantes ont donné lieu à différents appels à projets.</p>
				</figcaption>
			</figure>
		</section>



		<!-- Accueil citation -->
		<section class="accueil--citation row">
			<cite>
				La Coop doit être un pôle de vie culturelle, économique et citoyenne. Le cahier des charges prévoit un lieu ouvert 24 heures sur 24 et 7 jours sur 7, pour se divertir ou travailler.       <span class="nom">Alain Fontanel</span> 
			</cite>
		</section>



		<!-- Accueil esprit coop -->
		<section class="accueil--esprit-coop">
			<div class="row">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/esprit-coop.jpg" alt="">
				<article>
					<h2>
						Le site et l’esprit COOP
					</h2>
					<p class="sous-titre-article">
						Anciens bâtiments de la Coop Alsace au Port du Rhin à Strasbourg
					</p>
					<p>
						La COOP est un lieu singulier du fait de son histoire et de sa forte dimension symbolique pour les Strasbourgeois. Dessinant une demi-­‐lune au cœur du port, à proximité du Rhin et de l’Allemagne, il a accueilli  jusqu’en  2015  le  siège  et  les  entrepôts  de  l’Union  des  Coopérateurs  d’Alsace,  entreprise  coopérative  de  distribution  fondée  en  1902  à  Strasbourg.  Cette  zone  concentre  de  nombreuses ambitions pour la nouvelle « nouvelle ville » du projet des Deux-­‐Rives. 
					</p>
				</article>
			</div>
		</section>



		<!-- Accueil le projet -->
		<section class="accueil--le-projet">
			<div class="row">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/le-coin-virgule.jpg" alt="">
				<article>
					<h2>
						Projet : Le Coin Virgule
					</h2>
					<p class="sous-titre-article">
						Réaménagement de l’ancienne menuiserie
					</p>
					<p class="description" >
						La  « Menuiserie »,  du  fait  de  sa  typologie,  est  un  espace  particulièrement  propice  à  l’accueil  d’un  programme type FabLab, avec une ouverture au public (grand public et/ou professionnel). Le fablab constituera un moteur de la synergie entre les différents opérateurs, artistes et usagers de la COOP.
						Le  site  de  la  COOP  est  actuellement  voisine  d’une  partie  des  activités  du  port  autonome  de  Strasbourg qui continueront de cohabiter avec les activités que pourra accueillir la COOP à l’avenir.  
					</p>
					<a class="bouton-rouge" href="#">En savoir plus</a>
				</article>
			</div>
		</section>



		<!-- Separateur page d'accueil -->
		<div class="row">
			<hr class="accueil--separateur" >
		</div>



		<!-- Accueil le FABLAB et Ateliers d'artistes -->
		<section class="accueil--le-fablab text-center">
			<div class="row">
				<article class="article-fablab" >
					<h2>
						FabLab
					</h2>
					<p class="description text-left" >
						Le  FabLab  s’inscrit  dans  une  dynamique  de  création  collaborative,  aux  outils  et  aux  compétences  mutualisées ...
					</p>
					<a class="bouton-rouge" href="#">En savoir plus</a>
				</article>

				<img class="image-centrale" src="<?php echo get_template_directory_uri(); ?>/assets/images/imprimante-3d.jpg" alt="">

				<article class="article-ateliers" >
					<h2>
						Ateliers d’artistes
					</h2>
					<p class="description text-left" >
						L'atelier d'artiste, est le lieu de travail et, accessoirement, le logement d'un artiste.
						La ville de Strasbourg met un parc de ...
					</p>
					<a class="bouton-rouge" href="#">En savoir plus</a>
				</article>
			</div>
		</section>




</div>

<?php get_footer();