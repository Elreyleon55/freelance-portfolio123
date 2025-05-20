<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freelance-portfolio123
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="site-header">
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'freelance-portfolio123'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php get_template_part('./media/Logo-studios-1') ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php get_template_part('./media/custom-hamburger') ?></button>
				<section id="primary-menu" class="mobile-navigation" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/media/backdrop-mobile-menu.svg');
				background-size: 100%;
    		background-repeat: no-repeat;
				">
					<div class="mobile-menu-general">
						<h2>General</h2>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'general-mobile-menu',
							)
						);
						?>
					</div>
					<div class="mobile-menu-services">
						<h2>Services</h2>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'services-mobile-menu',
							)
						);
						?>
					</div>
					<div class="mobile-menu-contact">
						<h2>Contact Us</h2>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'contact-mobile-menu',
							)
						);
						?>
					</div>
				</section>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->