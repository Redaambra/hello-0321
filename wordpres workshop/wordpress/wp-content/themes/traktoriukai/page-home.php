<?php /*
Template Name: Homepage
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="apvadas">
					<div class="col-md-4">
						<h1>Title mano</h1>
						<p>Tekastas mano</p>
					</div>
					<div class="col-md-4">
						<h1>Title mano</h1>
						<p>Tekastas mano</p>
					</div>
					<div class="col-md-4">
						<h1>Title mano</h1>
						<p>Tekastas mano</p>
					</div>
				</div>
			</div>
		</div>
	</div> 
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>