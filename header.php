<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pl"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pl"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pl"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pl"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
        <meta name="description" content="<?php bloginfo('description') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:300,400" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css"> -->

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <nav class="navbar navbar-default navbar-fixed-top" style="margin-top: 30px;">
        <div class="wrapper">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Włącz nawigację</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_home_url() ?>"><h1 class="logo-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-text.png" alt="School of Talents"></h1></a>
          </div>
            <?php
             wp_nav_menu( array(
                 'menu'              => 'top-menu',
                 'theme_location'    => 'top-menu',
                 'depth'             => 2,
                 'container'         => 'div',
                 'container_class'   => 'collapse navbar-collapse',
         'container_id'      => 'navbar',
                 'menu_class'        => 'nav navbar-nav navbar-right',
                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                 'walker'            => new wp_bootstrap_navwalker())
             );
         ?>
          <!-- </div> /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <section class="welcome-section">
        <img src="<?php if(get_theme_mod('s1-graphic-1', '')=='') echo get_template_directory_uri(). '/img/logo.png'; else echo get_theme_mod('s1-graphic-1', ''); ?>" alt=" " class="page-logo img-responsive">
        <h2 class="welcome-text">
          <?php
          if(is_front_page()){
            echo get_theme_mod('s1-title-1', 'Postaw na rozwój naturalnych zdolności dziecka!');
          }elseif (is_page()) { echo the_title(); } else { echo "Blog"; } ?>
        </h2>
      </section>
