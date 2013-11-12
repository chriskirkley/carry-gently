<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Carry Gently
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div id="site-logo">
				<span class="carry">carry</span><span class="gently"> gently</span>
			</div>
			<div id="strap-line">
			<p><span class="gently">gently</span> <span class="carry">does it</span><br />
			Carrying your technology safely and securely around the globe</p>
			</div>
			<div id="header-image">
				<img id="croc" src="<?php bloginfo('template_directory'); ?>/images/croc.png" />
			</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'carry_gently' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'carry_gently' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' , 'exclude' => '5' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
