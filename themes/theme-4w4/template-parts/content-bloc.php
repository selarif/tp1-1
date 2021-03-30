<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

 global $tPropriété;
?>

<article>
		<p><?php echo $sigle . " - " . $nbHeure . " - " . $typeCours; ?></p>
		<a href="<?php echo get_permalink();?>"><?php echo $titre; ?></a>
		<p> <h4> Session : </h4> <?php echo $session; ?> </p>
</article>