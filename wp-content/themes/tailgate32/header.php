<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Tailgate32
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="The Official Tailgate32 Blog.  Two guys in an RV documenting the American traditions of roadtrips, tailgating, and pro football. 17 weeks. 32 games. 25,000 miles." />
<meta name="keywords" content="Tailgate32, Tailgate, 32, blog, tailgating, Tailgate 32, roadtrips, road trips, pro football, 17 weeks, 32 gmaes, 25000 miles, documentary, experience, journey, RV, cross country" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|PT+Sans|PT+Serif' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" media="all" href="http://assets.tailgate32.com/css/tailgate32.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="http://assets.tailgate32.com/js/fancybox/source/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<style type="text/css">
  /* Undo WP's in-line margin */
  html { 
    margin: 0 !important;
  }
  * html body { 
    margin: 0 !important;
  }
</style>
</head>

<body <?php body_class(); ?>>
  <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script type="text/javascript">(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=139581442806599";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  <!-- End Facebook SDK -->
  <div id="navigation">
    <div id="social-media-header">
      <a href="https://twitter.com/#!/tailgate_32" target="_blank" title="Follow @tailgate_32 on Twitter"><img src="http://assets.tailgate32.com/images/icon_twitter.png" alt="See @tailgate_32 on Twitter" /></a>
      <a href="https://www.facebook.com/tailgate32" target="_blank" title="Like Tailgate32 on Facebook"><img src="http://assets.tailgate32.com/images/icon_facebook.png" alt="Find Tailgate32 on Facebook" /></a>
      <a href="http://www.youtube.com/user/tailgate32" target="_blank" title="The Official Tailgate32 YouTube Channel"><img src="http://assets.tailgate32.com/images/icon_youtube.png" alt="Subscribe to the Tailgate32 YouTube channel" /></a>
    </div>
    <div id="menu">
      <a href="http://tailgate32.com/about.html"><img src="http://assets.tailgate32.com/images/nav-about.png" width="102" height="35" /></a>
      <a href="http://tailgate32.com/play"><img src="http://assets.tailgate32.com/images/nav-episodes.png" alt="Tailgate32 Episodes" width="102" height="35" /></a>
      <a target="_blank" href="http://bit.ly/tailgate32-b-sides"><img src="http://assets.tailgate32.com/images/nav-b-sides.png" alt="B-Sides" width="102" height="35" /></a>
      <a href="http://blog.tailgate32.com/"><img src="http://assets.tailgate32.com/images/nav-blog.png" alt="Tailgate32 Blog" width="102" height="35" /></a>
      <a href="http://tailgate32.com/press.html"><img src="http://assets.tailgate32.com/images/nav-press.png" alt="Press" width="102" height="35" /></a>
      <a id="contact-us-nav" class="contact-us-link" href="#"><img src="http://assets.tailgate32.com/images/nav-contact-us.png" alt="Contact Tailgate32" width="102" height="35" /></a>
      <a href="http://store.tailgate32.com/"><img src="http://assets.tailgate32.com/images/nav-store.png" alt="Tailgate32 Store" width="102" height="35" /></a>
    </div>
    <br class="break" />
  </div>
  <div id="masthead">
    <div class="divider"></div>
    <div id="logo_container">
      <a href="http://tailgate32.com"><img src="http://assets.tailgate32.com/images/T32Header.png" alt="Tailgate32: The Ultimate Football Fan Roadtrip" /></a>
    </div>
    <div class="divider"></div>
  </div>
  <div id="main" class="row">
