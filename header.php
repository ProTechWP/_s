<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */

?><!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php tha_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php tha_head_bottom(); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<?php tha_header_before(); ?>
	<header id="masthead" class="site-header" role="banner">
		<?php tha_header_top(); ?>
		<div class="wrap">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->
			<?php if ( is_active_sidebar( 'header-right') ) {
			echo '<div class="header-right">';
			dynamic_sidebar( 'header-right' ); 
			echo '</div>';
			}
			?>
		</.div><!-- .wrap -->

		<?php tha_header_bottom(); ?>
	</header><!-- #masthead -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="wrap">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div><!-- .wrap -->
		</nav><!-- #site-navigation -->
	<?php tha_header_after(); ?>

	<?php tha_content_before(); ?>
	<div id="content" class="site-content">
	<div class="wrap">
