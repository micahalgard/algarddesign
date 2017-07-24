<!--internal page-->

<?php
/**
* Template Name: internal page
 */

get_header(); ?>


<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="internal-header" style="background-image: url('<?php echo $thumb['0'];?>'); background-repeat: no-repeat;background-size: cover;"> 
    <h1><?php echo get_the_title();?></h1> 
</div>
     
 

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
