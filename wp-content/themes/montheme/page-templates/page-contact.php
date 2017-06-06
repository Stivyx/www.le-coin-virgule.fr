<?php
/*
Template Name: Page contact
*/

get_header(); ?>

<div class="page--contact" role="main">

		<!-- contact header -->
		<section class="contact--header">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/imprimante-fablab.jpg" alt="">
				<figcaption>
					<h1><?php the_field("header_h1"); ?></h1>
				</figcaption>
			</figure>
		</section>



		<section class="row formulaire">
			<div class="large-8 large-push-2 medium-12 column">
				<p>
					<?php the_field("formulaire_infos"); ?>
				</p>
				
				<div class="row formulaire-container">
					<?php the_field("contact_form"); ?>
				</div>
				
				
			</div>
		</section>



			
</div>

<?php get_footer();