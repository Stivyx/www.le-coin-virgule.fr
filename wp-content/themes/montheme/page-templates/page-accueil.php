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
					<h1><?php the_field("header_h1"); ?></h1>
					<p class="sous-titre-entete" ><?php the_field("header_sous_titre"); ?></p>
					<p><?php the_field("header_labeur"); ?></p>
				</figcaption>
			</figure>
		</section> 



		<!-- Accueil citation -->
		<section class="accueil--citation row">
			<cite>
				<?php the_field("citation_labeur"); ?>  <span class="nom"><?php the_field("citation_nom"); ?></span> 
			</cite>
		</section>



		<!-- Accueil esprit coop -->
		<section class="accueil--esprit-coop">
			<div class="row">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/esprit-coop.jpg" alt="">
				<article>
					<h2>
						<?php the_field("esprit_coop_h2"); ?>
					</h2>
					<p class="sous-titre-article">
						<?php the_field("esprit_coop_sous_titre"); ?>
					</p>
					<p>
						 <?php the_field("esprit_coop_labeur"); ?>
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
						<?php the_field("le_projet_h2"); ?>
					</h2>
					<p class="sous-titre-article">
						<?php the_field("le_projet_sous_titre"); ?>
					</p>
					<p class="description" >
						 <?php the_field("le_projet_labeur"); ?>
					</p>
					<a class="bouton-rouge" href="<?php echo esc_url( home_url( '/' ) ); ?>le-projet/"><?php the_field("le_projet_bouton"); ?></a>
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
						<?php the_field("fablab_titre"); ?>
					</h2>
					<p class="description text-left" >
						<?php the_field("fablab_labeur"); ?>
					</p>
					<a class="bouton-rouge" href="<?php echo esc_url( home_url( '/' ) ); ?>le-fablab/"><?php the_field("le_projet_bouton"); ?></a>
				</article>

				<img class="image-centrale" src="<?php echo get_template_directory_uri(); ?>/assets/images/imprimante-3d.jpg" alt="">

				<article class="article-ateliers" >
					<h2>
						<?php the_field("artiste_titre"); ?>
					</h2>
					<p class="description text-left" >
						<?php the_field("artiste_labeur"); ?>
					</p>
					<a class="bouton-rouge" href="<?php echo esc_url( home_url( '/' ) ); ?>le-fablab/"><?php the_field("le_projet_bouton"); ?></a>
				</article>
			</div>
		</section>




</div>

<?php get_footer();