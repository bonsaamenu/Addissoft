<?php
/**
 * Template part for displaying propeties posts
 *
 */
$image= get_field('header');
$pic= $image['sizes']['large'];
$alt = $image['alt'];
$title = $image['title'];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->
	<section class="bg-light text-dark ">
        <div class="container">
            <div class="d-flex ">
				<?php if($image):?>
				<img class="img-fluid w-50" src="<?php echo $pic;?>" alt="<?php echo $alt?>" title="<?php echo $title?>"> 
				<?php endif;?>
				<section >
					<div class="container">
						<div class="col">
							<?php the_field('facts');?>
						</div>	
						<div class="row">
							<div class="col">
								<div class="card bg-secondary text-light">
									<div class="card-body">
										<p class="card-text"><?php the_field('price');?></p>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card bg-info text-dark"  style="width: 15rem;">
									<div class="card-body">
										<p class="card-text"><?php the_field('payment_plan');?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</section>
			</div>
		</div>
	</section>
	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
