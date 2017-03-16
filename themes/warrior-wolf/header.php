<?php
/**
* The header for our theme.
*
* @package RED_Starter_Theme
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="logo"></div></a>
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-description screen-reader-text"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->


			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="mobile-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social-menu' ) ); ?>
				</div>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
				</button>
			</nav><!-- #site-navigation -->
		</div><!-- .header-container -->
	</header><!-- #masthead -->

					<div id="contact-modal" class="modal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>One fine body&hellip;</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-contact-submit" data-dismiss="modal">Submit</button>
					</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div> <!--/.modal -->
			<div id="confirmation-modal" class="modal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Confirmed</h4>
					</div>
					<div class="modal-body">
						<p>One fine modal confirmation&hellip;</p>
					</div>
						<div class="modal-footer">
					</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

<div id="content" class="site-content">
