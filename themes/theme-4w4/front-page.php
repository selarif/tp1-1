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

<section class="carroussel-2">
	<div>1</div>
	<div>2</div>
	<div>3</div>
</section>
<button id="un">1</button>
<button id="deux">2</button>
<button id="trois">3</button>
<!-- ///////////////////////////////////////////////////////////// FRONT-PAGE.PHP -->
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
			

			<!-- ** Début du carrousel 
			<section class="carrousel-2">
					<article class="slide_conteneur">
						<div class="slide">
							<img src="" alt="">
							<div class="slide__info">
								<p>582-1W1 - 75h - Web</p>
								<a href="http://localhost/4w4/2020/10/07/582-1w1-mise-en-page-web-75h/">Mise en page Web</a>
								<p>Session : 4</p>
							</div>	
						</div>
					</article>
					<article></article>
					<article></article>
			</section>
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
		 ** Fin du carrousel -->	
	
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
					convertir_tableau($tPropriété);
					// ---à chaque fois que le précédent est différent du cours présent, créer une nouvelle section
					if($precedent != $tPropriété['typeCours']): ?>
					 	<?php if ($precedent != "XXXXXXX"): // ---Quand $precedent n'est pas comme en premier (XXXXXX), alors restart la boucle pour les autres blocs (specifique, web,jeu, etc)?>
			</section>
					
						<?php endif; ?>
						<h2><?php echo $tPropriété['typeCours'] ?></h2>
						<section <?php echo ($tPropriété['typeCours'] == 'Web' ? 'class="carrousel-2"' : 'class="bloc"'); ?>>
							<?php if($precedent != "Web"): ?>
								<section class="ctrl-carrousel">
									<?php echo $ctrl_radio; ?>
								</section>
							<?php endif;?>
							<?php 
							if ($tPropriété['typeCours'] == "Web"):
								get_template_part ('template-parts/content', 'carrousel');
								$ctrl_radio .= '<input type="radio" name="rad-carrousel">';
							else:
								get_template_part ('template-parts/content', 'bloc');
							endif;
							$precedent =  $tPropriété['typeCours'];

				//endwhile;?>
						</section>
		<?php endif;  //fin have_posts?>


	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();


function convertir_tableau(&$tPropriété){
	$titre_grand = get_the_title();

	$tPropriété['session'];	// Tableau associatif
	$tPropriété['nbHeure'] = $session = substr($titre_grand, 4,1); // ---4 : position du numéro. 1 : nombre de caractères
	$tPropriété['nbHeure'] = substr($titre_grand, -4, 3 ); // ---on cherche le nombre d'heures
	$tPropriété['titre'] = substr($titre_grand, 8, -6); // ---on cherche le nom du cours et seulement ça, sans le sigle et nb d'heures
	$tPropriété['sigle'] = substr($titre_grand, 0, 7);
	$tPropriété['typeCours'] = get_field('type_de_cours'); 
}