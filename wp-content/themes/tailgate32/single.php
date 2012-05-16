<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Tailgate32
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>


					<?php get_template_part( 'content', 'single' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar("single"); ?>

<br class="clear" />

<?php get_footer(); ?>
