<?php
/*
Template Name: Page d'accueil
*/

get_header(); ?>

<div class="main-wrap page-accueil" role="main">

		<!-- Accueil header -->
		<section class="accueil-header">
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
		<section class="accueil-citation">
			<cite>
				La Coop doit être un pôle de vie culturelle, économique et citoyenne. Le cahier des charges prévoit un lieu ouvert 24 heures sur 24 et 7 jours sur 7, pour se divertir ou travailler.       <span class="nom">Alain Fontanel</span> 
			</cite>
		</section>



</div>

<?php get_footer();