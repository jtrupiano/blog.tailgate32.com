<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package Tailgate32
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ) ?>
      <?php other_sidebar_links(); ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>
