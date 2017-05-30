<?php
/*
Template Name: Page fablab
*/

get_header(); ?>

<div class="page--fablab" role="main">

		<!-- Fablab header -->
		<section class="fablab--header">
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/croquis-ateliers.jpg" alt="">
				<figcaption>
					<h1>FabLab et ateliers d’artistes</h1>
				</figcaption>
			</figure>
		</section>



		<!-- Fablab le fablab -->
		<section class="fablab--le-fablab">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/imprimantes-3d.jpg" alt="">
					<figcaption class="text-center legend" >Des imprimantes 3D</figcaption>
				</figure>
				<article class="article" >
					<h2>
						Le FabLab
					</h2>
					<p>
						Le  FabLab  s’inscrit  dans  une  dynamique  de  création  collaborative,  aux  outils  et  aux  compétences  mutualisées, ceci permettant notamment de créer des objets uniques : objets décoratifs, prothèses, orthèses, outils… Pour être appelé « FabLab », le makerspace doit respecter la charte mise en place par le Massachusetts Institute of Technology (MIT). 
					</p>
				</article>
			</div>
		</section>



		<!-- Fablab ateliers d'artistes' -->
		<section class="fablab--ateliers-artistes">
			<div class="row ">
				<figure class="image-deco">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ateliers-artistes.jpg" alt="">
					<figcaption class="text-center legend" >Un atelier à rénover</figcaption>
				</figure>
				<article class="article" >
					<h2>
						Les ateliers d’artistes
					</h2>
					<p>
						L'atelier d'artiste, est le lieu de travail et, accessoirement, le logement d'un artiste. <br>
						La ville de Strasbourg met un parc de 5 ateliers à disposition des artistes plasticiens professionnels actifs dans l'Eurométropole mesurant de 28m² à 70m².
					</p>
				</article>
			</div>
		</section>


		
</div>

<?php get_footer();