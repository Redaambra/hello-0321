<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1><?php the_title(); ?></h1>
					<div class="rte">
                        <?php the_content(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<?php get_sidebar('nice-bar'); ?>


					<?php echo do_shortcode( '[contact-form-7 id="33" title="Contact form 1"]' ); ?>

			
				</div>
			</div>
		</div>
	</div>


<?php endwhile; endif; ?>


<?php get_footer(); ?>