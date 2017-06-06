<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="page--404" role="main">

		<!-- contact header -->
		<section class="page404--header">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/objets-fablab.jpg" alt="">
				<figcaption>
					<h1>La page que vous recherchez a disparu !?</h1>
				</figcaption>
			</figure>
		</section>

		<article class="page404--content">
			<p class="le404">404</p>
			<p class="not-found" >Page not found</p>
			<p class="description" >La page que vous recherchez a disparu ou est temporairement indisponible.<br> Rassurez-vous, nous avons envoyé nos meilleurs agents à sa recherche.</p>
			<p class="retour-accueil">Retour à la <a href="<?php echo esc_url( home_url( '/' ) ); ?>">page d'accueil</a></p>
		</article>


	
			
</div>

<?php get_footer();
