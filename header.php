<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('harset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/dist/main.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-8 col-lg-3 logo">
                    <a href="<?php bloginfo('url') ?>">
                     <img src="<?php bloginfo('template_url') ?>/dist/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-xl-8 d-none d-lg-block menuTop">
                    <?php wp_nav_menu(array( 'menu' => 'top-menu')); ?>
                </div>
                <div class="col-4 col-lg-1 d-grid  align-content-center">
                    <button class="hamburger">
                        <span class="hamburgerBox">
                            <span class="hamburgerLine"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mobileNav">
        <div class="container d-flex">
            <div class="col-12  col-lg-8 menu">
                <?php wp_nav_menu(array('theme_location' => 'burger-menu')) ?>
            </div> 
            <div class="col-12 col-lg-4  contactMenu">
                <div class="menuAdress">
                    <div class="adres">
                        <ul>
                            <li>Ageno</li>
                            <li>Sobieskiego 105</li>
                            <li>Bielsko Biała 43-300</li>
                        </ul>
                    </div>
                    <div class="pt-1"></div>
                    <div class="contact">
                        <ul>
                            <li><span>+48 502 02 22 02</span></li>
                            <li><span>info@ageno.pl</span></li>
                        </ul>
                    </div>
                    <div class="icons">
                        <ul>
                            <li><img src="<?php bloginfo('template_url')?>/dist/img/f.png" alt=""></li>
                             <li><img src="<?php bloginfo('template_url')?>/dist/img/y.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_url')?>/dist/img/l.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_url')?>/dist/img/p.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_url')?>/dist/img/pi.png" alt=""></li>
                            <li><img src="<?php bloginfo('template_url')?>/dist/img/n.png" alt=""></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
</div>
