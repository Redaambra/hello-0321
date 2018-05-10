<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
        <div class="container">
            <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class' => 'blog-nav',
            'menu_id' => 'primary-menu' ) ); ?>
        </div>
    </div>

    <div class="container">

    <div class="blog-header">
    <h1 class="blog-title">
<a href="<?php echo get_bloginfo( 'wpurl' );?>">
<?php echo get_bloginfo( 'name' ); ?>
</a>
</h1>
<p class="lead blog-description">
<?php echo get_bloginfo( 'description' ); ?></p>
</div>
