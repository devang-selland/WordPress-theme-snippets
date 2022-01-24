<?php
/**
 * Template Name: Page Flex Template
 * Template Type: ACF Flexible Content Layout
 *
 * @package SouthOc
 * @subpackage southoc
 * @since southoc 1.0
 */

get_header();
?>

<main id="primary" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', 'global-flex' );
		}
	}

	?>

</main><!-- #site-content -->
<?php get_footer(); ?>