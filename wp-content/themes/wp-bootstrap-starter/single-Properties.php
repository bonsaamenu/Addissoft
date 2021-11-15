<?php
/**
 * emplate Name: Properties
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<div id="main" class="site-main" role="main">

        
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'Properties' );

			the_post_navigation();
	
		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
