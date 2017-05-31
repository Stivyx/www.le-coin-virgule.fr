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
					<h1><?php the_field("header_h1"); ?></h1>
				</figcaption>
			</figure>
		</section>



		<!-- Projet le projet -->
		<section class="projet--le-projet">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/la-menuiserie.jpg" alt="">
					<figcaption class="text-center legend" ><?php the_field("le_projet_texte_image"); ?></figcaption>
				</figure>
				<article class="article" >
					<h2>
						<?php the_field("le_projet_h2"); ?>
					</h2>
					<p>
						<?php the_field("le_projet_labeur"); ?>
					</p>
				</article>
			</div>
		</section>



		<!-- Projet emplacement -->
		<section class="projet--emplacement">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/emplacement-la-menuiserie.jpg" alt="">
					<figcaption class="text-center legend" ><?php the_field("emplacement_texte_image"); ?></figcaption>
				</figure>
				<article class="article" >
					<h2>
						<?php the_field("emplacement_h2"); ?>
					</h2>
					<p>
						<?php the_field("emplacement_labeur"); ?>
					</p>
				</article>
			</div>
		</section>



		<!-- Projet le batiment -->
		<section class="projet--le-batiment">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-de-la-menuiserie.jpg" alt="">
					<figcaption class="text-center legend" ><?php the_field("batiment_texte_image"); ?></figcaption>
				</figure>
				<article class="article" >
					<h2>
						<?php the_field("batiment_h2"); ?>
					</h2>
					<p>
						<?php the_field("batiment_labeur"); ?>
					</p>
				</article>
			</div>
		</section>


	
		
</div>

<?php get_footer();