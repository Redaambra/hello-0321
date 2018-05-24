<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>

				<div class="col-md-12">
					<h1>Mano title</h1>
					<p>Mano tekstas</p>
				</div>

				<div class="col-md-12">
					<h1>Mano title</h1>
					<p>Mano tekstas</p>
				</div>
			</div>
		</div>
	</div>
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>


