<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "74ae12f706cd353e65d2daf05400637906ee20a1a3"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\Addissoft/wp-content/themes/wp-bootstrap-starter/single.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\Addissoft\wp-content\plugins\wpide/backups/themes/wp-bootstrap-starter/single_2021-11-13-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<div id="main" class="site-main" role="main">

        <?php the_field('facts');?>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();
			    
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
