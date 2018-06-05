<?php /*
Template Name: Apie mus
Description: A Page Template for custom page.
*/
get_header(); ?>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="main-content" class="visual-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<div class="rte">
                        <?php the_content(); ?>
					</div>
					<a href="#manoid">linkas zemyn</a>

					<div class="about-us-team">
						<div class="row">
							<div class="col-md-4">
								<div class="vartotojo-vidinis-textas">
									<?php echo types_render_field( "musu-tikslas", array( "size" => "iraso-image-apie" ) )  ?>
								</div>
							</div>
							<div class="col-md-8">
								<div class="rte">
									<?php echo(types_render_field( 'musu-tikslai-aprasymas', array( 'arg1' => 'val1', 'arg2' => 'val2' ) ));  ?>
								</div>
							</div>
						</div>
					</div>



					<div class="about-us-team" id="">
						<div class="row">
							<div class="col-md-12">
								<div class="owl-carousel owl-theme">
									<div class="item">
									<img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title="">
									</div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
								</div>	
							</div>
						</div>
					</div>







					<div class="logos-carusel-home">
					<div class="row">
					<div class="col-md-12">
						<div class="logos-home-carusel-wrapper">
							<div class="logos-home-carusel owl-carousel owl-theme">
								<?php
								$args = array( 'post_type' => 'logo-carousel', 'posts_per_page' => 999 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<div class="item"><img width="800" height="600" src="http://localhost/00-wp-workshop/wordpressworkshop/wp-content/uploads/2018/05/Fashion-Fling-HD-Wallpaper-800x600.jpg" class="attachment-iraso-image-apie" alt="" style="" title=""></div>
								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
					</div>
					</div>
			


					<div class="about-us-team" id="">
						<div class="row">
							<div class="col-md-4">
								<div class="vartotojo-vidinis-textas">
									<?php echo types_render_field( "musu-tikslas", array( "size" => "iraso-image-apie" ) )  ?>
								</div>
							</div>
							<div class="col-md-8">
								<div class="rte">
									<?php echo(types_render_field( 'musu-tikslai-aprasymas', array( 'arg1' => 'val1', 'arg2' => 'val2' ) ));  ?>
								</div>
							</div>
						</div>
					</div>

				 
					<div class="about-us-team">
						<div class="row">
							<?php
							$i = 0;
							$args = array( 'post_type' => 'komanda', 'posts_per_page' => 999 );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<a href="<?php the_permalink(); ?>">
									<div class="col-md-4">
										<div class="vartotojo-vidinis-textas">
											<h2><?php the_title(); ?></h2>
											<div class="image-wrapper"><?php the_post_thumbnail('iraso-image'); ?></div>
											<p><?php the_permalink(); ?></p>
											<p><?php echo(types_render_field( 'pareigos', array( 'arg1' => 'val1', 'arg2' => 'val2' ) ));  ?></p>
										</div>
									</div>
								</a>
							<?php $i++; endwhile; wp_reset_postdata(); ?>
						</div>
					</div>
				

					<div class="about-us-team" id="manoid">
						<div class="row">
							<div class="col-md-4">
								<div class="vartotojo-vidinis-textas">
									<?php echo types_render_field( "musu-tikslas", array( "size" => "iraso-image-apie" ) )  ?>
								</div>
							</div>
							<div class="col-md-8">
								<div class="rte">
									<?php echo(types_render_field( 'musu-tikslai-aprasymas', array( 'arg1' => 'val1', 'arg2' => 'val2' ) ));  ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
				
			<?php endwhile; endif; ?>

<?php get_footer(); ?>