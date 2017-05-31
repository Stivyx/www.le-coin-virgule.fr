<?php
/*
Template Name: Page projet
*/

get_header(); ?>

<div class="page--projet" role="main">

		<!-- Accueil header -->
		<section class="projet--header">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-la-virgule.jpg" alt="">
				<figcaption>
					<h1>Projet : Le coin virgule</h1>
				</figcaption>
			</figure>
		</section>



		<!-- Projet le projet -->
		<section class="projet--le-projet">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/la-menuiserie.jpg" alt="">
					<figcaption class="text-center legend" >La menuiserie actuellement</figcaption>
				</figure>
				<article class="article" >
					<h2>
						Le projet
					</h2>
					<p>
						La  « Menuiserie »,  du  fait  de  sa  typologie,  est  un  espace  particulièrement  propice  à  l’accueil  d’un  programme type FabLab, avec une ouverture au public (grand public et/ou professionnel). Le fablab, couplé aux atteliers d’artiste, constituera un moteur de la synergie entre les différents opérateurs, artistes et usagers de la COOP.
					</p>
				</article>
			</div>
		</section>



		<!-- Projet emplacement -->
		<section class="projet--emplacement">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/emplacement-la-menuiserie.jpg" alt="">
					<figcaption class="text-center legend" >Emplacement de la menuiserie</figcaption>
				</figure>
				<article class="article" >
					<h2>
						Emplacement
					</h2>
					<p>
						Le  site  de  la  COOP  est  actuellement  voisine  d’une  partie  des  activités  du  port  autonome  de  Strasbourg qui continueront de cohabiter avec les activités que pourra accueillir la COOP à l’avenir. <br>
						Le projet le coin virgule sera mis en oeuvre dans l’ancienne menuisrie située au sud de la virgule.
					</p>
				</article>
			</div>
		</section>



		<!-- Projet le batiment -->
		<section class="projet--le-batiment">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-de-la-menuiserie.jpg" alt="">
					<figcaption class="text-center legend" >La menuiserie actuellement</figcaption>
				</figure>
				<article class="article" >
					<h2>
						Le batiment
					</h2>
					<p>
						La  « Menuiserie » a une superficie de 1172m² est sera séparé en deux grande parties. Une zone sera dédié au FabLab et la deuxiéme permettra de mettre en place 5 atteliers d’artiste. <br><br>

						À l’image d’usages et pratiques ayant habituellement cours dans d’autres lieux collaboratifs, le fablab peut également être un outil d'aide à « l'e-insertion » et à la formation de publics en difficulté et/ou en voie de professionnalisation.
					</p>
				</article>
			</div>
		</section>


	
		
</div>

<?php get_footer();