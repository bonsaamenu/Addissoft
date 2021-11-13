<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
$image= get_field('header');
$pic= $image['sizes']['large'];
$alt = $image['alt'];
$title = $image['title'];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<section class="bg-light text-dark ">
        <div class="container">
            <div class="d-flex ">
					<?php if($image):?>
					<img class="img-fluid w-50" src="<?php echo $pic;?>" alt="<?php echo $alt?>" title="<?php echo $title?>"> 
					<?php endif;?>
				<div class="container px-4">
					<div class="facts">
						<?php the_field('facts');?>
					</div>
					<div class="row ">
						<div class="bg-secondary col text-light">
							<?php the_field('price');?>
						</div>
						<div class="bg-info col ">
							<?php the_field('payment_plan');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
