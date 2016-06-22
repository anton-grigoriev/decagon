<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="ЛабДепо">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    
    <title><?php bloginfo('name') ?> / <?php wp_title('/', true, 'right'); ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6 header">
                    <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/decagon-logo.png" alt="Decagon Devices Inc."></a>
                </div>
                <div class="col-md-6">
                    <div class="contact-div"><a class="contact-href shadow" href="/contact/"><span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span> Контакты</a></div>
                </div>
            </div>
            <div class="row">
        	  <nav>
        	  <?php wp_nav_menu( array(
        	    'container' => false, 
        	    'menu_class' => 'nav nav-justified',
        	    'items_wrap' => '<ul class="nav nav-justified">%3$s</ul>'
        	    )
        	  ); ?>
        	  </nav>
            </div>
        </div><!-- container -->
    </header>