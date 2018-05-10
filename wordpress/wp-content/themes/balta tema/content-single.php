<div class="blog-post">
<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<nav>
    <ul class="pager">
        <li><?php next_post_link( '%link', 'Naujesnis' ); ?></li>
        <li><?php previous_post_link('%link', 'Senesnis'); ?></li>
    </ul>
</nav>
</div><!-- /.blog-post —>