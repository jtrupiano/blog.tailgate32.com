<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package Tailgate32
 */

$authorid = get_query_var('author');
$authordata = get_userdata($authorid);

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">
        <div class="headline">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left.png" />
          <h1><?php echo $authordata->display_name; ?>'s Blog Posts</h1>
        </div>

			<?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h2 class="entry-title"><?php _e( "No Posts By $authordata->display_name", 'twentyeleven' ); ?></h2>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar("author"); ?>
<br class="clear" />
<?php get_footer(); ?>
