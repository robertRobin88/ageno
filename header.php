<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/dist/main.css">
    <!-- <?php wp_head(); ?> -->
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col logo">
                    <a href="<?php bloginfo('url') ?>">
                     <img src="<?php bloginfo('template_url') ?>/dist/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col menuTop">
                    <div class="d-none d-lg-block">
                        <?php wp_nav_menu(array( 'menu' => 'top-menu')); ?>
                    </div>
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
        <div class="container">
            <div class="row">
                <div class="row navBox d-flex">
                    <div class="col-12 col-lg-8 menu">
                         <?php wp_nav_menu(array('theme_location' => 'burger-menu')) ?>
                    </div> 
                     <div class="col-12 col-lg-4  contactMenu">
                        <div class="menuAdress">
                            <div class="adres">
                                <ul>
                                    <ol>Ageno</ol>
                                    <ol>Sobieskiego 105</ol>
                                    <ol>Bielsko Biała 43-300</ol>
                                </ul>
                            </div>
                            <div class="pt-4"></div>
                            <div class="contact">
                                <ul>
                                    <ol><span>+48 502 02 22 02</span></ol>
                                    <ol><span>info@ageno.pl</span></ol>
                                </ul>
                            </div>
                            <div class="pt-3"></div>
                            <div class="socialMedia">
                                <ul>
                                    <li><img src="<?php bloginfo('template_url')?>/dist/img/f.svg" alt=""></li>
                                    <li><img src="<?php bloginfo('template_url')?>/dist/img/y.svg" alt=""></li>
                                    <li><img src="<?php bloginfo('template_url')?>/dist/img/l.svg" alt=""></li>
                                    <li><img src="<?php bloginfo('template_url')?>/dist/img/p.svg" alt=""></li>
                                    <li><img src="<?php bloginfo('template_url')?>/dist/img/b.svg" alt=""></li>
                                    <li><img src="<?php bloginfo('template_url')?>/dist/img/pi.svg" alt=""></li>
                                    <li><img src="<?php bloginfo('template_url')?>/dist/img/n.svg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
</div>
