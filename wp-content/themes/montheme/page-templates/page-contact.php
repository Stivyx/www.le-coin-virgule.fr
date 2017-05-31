<?php
/*
Template Name: Page contact
*/

get_header(); ?>

<div class="page--contact" role="main">

		<!-- contact header -->
		<section class="contact--header">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/carte-coop.jpg" alt="">
				<figcaption>
					<h1>Contactez nous !</h1>
				</figcaption>
			</figure>
		</section>



		<section class="row formulaire">
			<div class="large-8 large-push-2 medium-12 column">
				<p>
					Les champs marqués d’un <span class="obligatoire">*</span> sont obligatoires.
				</p>
				
				<div class="row formulaire-container">
					<?php echo ( do_shortcode( '[contact-form-7 id="24" title="Formulaire de contact"]' ) ); ?>
				</div>
				
				
			</div>
		</section>



			
</div>

<?php get_footer();