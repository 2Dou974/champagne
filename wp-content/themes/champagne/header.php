<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head();?>
</head>

<body>
    <div class="header">
        <nav id="site-navigation" class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                    <img src="<?php bloginfo('template_directory');?>/img/logo.png" title="<?php bloginfo('name');?>" /></a>
                </div>
            <!--<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', '_s');?></a>-->
           <div class="collapse navbar-collapse" id="main-navbar-collapse">
           <?php wp_nav_menu(array(
    //'theme_location' => 'primary',
    'container' => 'ul',
    'container_class' => '',
    'menu_class' => 'nav navbar-nav',
    'menu_id' => '',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0,
    'walker' => '',
));?>
</div>
            </div>
        </nav><!-- #site-navigation -->
        </div>
    </div>
    <div class="container ">