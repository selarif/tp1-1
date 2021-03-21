<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>
///////////////////////////////////////////////////////////// FRONT-PAGE.PHP
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

		 <!-- ** Début du carrousel -->
				<section class="carrousel">
					<!--	<div>1</div>
							<div>2</div> 
							<div>3</div>	
					-->
					<div>
						<!-- <img src="https://s2.svgbox.net/hero-solid.svg?ic=arrow-circle-right&color=fff" width="32" height="32"> -->
						<img src="../../../../4w4/wp-content/uploads/impressionisme2.jpg" alt="Une peinture de Monet" id="image1">
					</div>
					<div>
						<!-- <img src="https://s2.svgbox.net/hero-solid.svg?ic=arrow-circle-right&color=fff" width="32" height="32"> -->
						<img src="../../../../4w4/wp-content/uploads/Impressionnisme1.jpg" alt="Une autre peinture de Monet" id="image2">
					</div>
					<div>
						<!-- <img src="https://s2.svgbox.net/hero-solid.svg?ic=location-marker&color=fff" width="32" height="32"> -->
						<img src="../../../../4w4/wp-content/uploads/impressionnisme4.jpg" alt="Encore une autre peinture de Monet" id="image3">
					</div>
				</section>
		 <!-- ** Fin du carrousel -->		
		<!--
				<div class="bouttons">
					<button id="un">1</button>
					<button id="deux">2</button>
					<button id="trois">3</button>
				</div>
		-->

				<label class="LesBouttons">
					<div id="un">
						<input type="radio" checked="checked" name="radio">
						<span class="checkmark"></span>
					</div>
					<div id="deux">
						<input type="radio" name="radio">
						<span class="checkmark"></span>
					</div>
					<div id="trois">
						<input type="radio" name="radio">
						<span class="checkmark"></span>
					</div>
					
				</label>
			
	
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			
			</header><!-- .page-header -->
			<section class="list-cours">
				<?php
				/* Start the Loop */
				$precedent = "XXXXXXX";
				while ( have_posts() ) :
					the_post(); // ---contient l'enregistrement qui a été extrait.
					$titre_grand = get_the_title();
					$session = substr($titre_grand, 4,1); // ---4 : position du numéro. 1 : nombre de caractères
					$nbHeure = substr($titre_grand, -4, 3 ); // ---on cherche le nombre d'heures
					$titre = substr($titre_grand, 8, -6); // ---on cherche le nom du cours et seulement ça, sans le sigle et nb d'heures
					$sigle = substr($titre_grand, 0, 7);
					$typeCours = get_field('type_de_cours'); 
					// ---à chaque fois que le précédent est différent du cours présent, créer une nouvelle section
					if($precedent != $typeCours): ?>
					 <?php if ($precedent != "XXXXXXX"): // ---Quand $precedent n'est pas comme en premier (XXXXXX), alors restart la boucle pour les autres blocs (specifique, web,jeu, etc)?>
			</section>
					 <?php endif ?>
						<section>
					<?php endif ?>
						<article>
							<p><?php echo $sigle . " - " . $nbHeure . " - " . $typeCours; ?></p>
							<a href="<?php echo get_permalink();?>"><?php echo $titre; ?></a>
							<p> <h4> Session : </h4> <?php echo $session; ?></p>
						</article>
				<?php 
				$precedent = $typeCours;
				endwhile; ?>
			</section>
		<?php endif;  //fin have_posts?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
