<?php
/*
Template Name: Page fablab
*/

get_header(); ?>

<div class="page--fablab" role="main">

		<!-- Fablab header -->
		<section class="fablab--header">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/table-fablab.jpg" alt="">
				<figcaption>
					<h1><?php the_field("header_h1"); ?></h1>
				</figcaption>
			</figure>
		</section>



		<!-- Fablab le fablab -->
		<section class="fablab--le-fablab">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/imprimantes-3d.jpg" alt="">
					<figcaption class="text-center legend" ><?php the_field("fablab_image"); ?></figcaption>
				</figure>
				<article class="article" >
					<h2>
						<?php the_field("fablab_h2"); ?>
					</h2>
					<p>
						 <?php the_field("fablab_labeur"); ?>
					</p>
				</article>
			</div>
		</section>



		<!-- Fablab ateliers d'artistes' -->
		<section class="fablab--ateliers-artistes">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ateliers-artistes.jpg" alt="">
					<figcaption class="text-center legend" ><?php the_field("ateliers_image"); ?></figcaption>
				</figure>
				<article class="article" >
					<h2>
						<?php the_field("ateliers_h2"); ?>
					</h2>
					<p>
						<?php the_field("ateliers_labeur"); ?>
					</p>
				</article>
			</div>
		</section>


		
</div>

<?php get_footer();