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
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
            $precedent = 0;
			while ( have_posts() ) :
				the_post();
                $titre = get_the_title();
                $session = substr($titre, 4,1);
                if ($precedent != $session){
                    // ---sert a montrer tout les titres
                    echo '<p> <h3>Session : ' . $session . '</h3> </p>' ;
                }

                // ---sert a montrer tout les titres
                echo '<p>' . $session . ' ' . $titre . '</p>' ;
                // ---precedent est toujours en retard d'une boucle 
                $precedent = $session;
			endwhile;
		endif;  
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
