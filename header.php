<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package algard_design
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>
     
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'algarddesign' ); ?></a>
        

                
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle"  aria-controls="primary-menu" aria-expanded="false"><?php echo algarddesign_get_svg( array( 'icon' => 'bars' ) ); echo algarddesign_get_svg( array( 'icon' => 'close' ) );  ?></button>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
        
                <?php if ( get_header_image() && is_front_page() ) : ?>
       
               <figure class="header-image">
                            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </figure> <!--- .header-image -->
                <div class="buttons-1" style="background-image: url('<?php header_image(); ?>');">
                    <div class="banner-button">
                        <a class="button button-primary" href="#2portfolio">
                          See Our Projects
                        </a>
                    </div>
                 <div class="banner-button">
                     <a class="button button-primary" href="http://algarddesign.com/contact-2/">
                       Get in touch
                     </a>
                 </div>
               </div>
        <?php endif; ?>

	<div id="content" class="site-content">
