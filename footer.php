<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package algard_design
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
       
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://algarddesign.com', 'algarddesign' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Theme Created By %1$s', 'algarddesign' ), 'Algard Design' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '&copy; Copyright 2017 Algard Design. All rights reserved.', 'algarddesign' ), 'algarddesign', '<a href="http://algarddesign.com/">micah algard</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
