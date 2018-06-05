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
 
                 
                    <div class="about-us-team">
                        <div class="row">
                            <?php
                            $i = 0;
                            $args = array( 'post_type' => 'komanda', 'posts_per_page' => 999 );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
 
                                <div class="col-md-4">
                                    <div class="vartotojo-vidinis-textas">
                                        <h2><?php the_title(); ?></h2>
                                        <div class="image-wrapper"><?php the_post_thumbnail('iraso-image'); ?></div>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
 
           
       
 
                            <?php $i++; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
               
            <?php endwhile; endif; ?>
 
<?php get_footer(); ?>