<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>the good day TOKYO w/ wakasu BBQ 2019 | 芝生の広場にハンモックが100個！「最高の休日」を提供する屋外イベントです。</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="webs8">
    <meta name="keywords" content=" ">
    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="stylesheet" id="google-fonts-Poppins-css" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C300&amp;ver=1.0.0" type="text/css" media="screen">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- muuri -->
    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="menu-trigger">
            <div class="menu_text">
                <p class="menu_text_open">MENU</p>
                <p class="menu_text_close">CLOSE</p>
            </div>
            <div class="menu-trigger_span">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
        <nav id="NavMenu" class="NavMenu">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'global',
                    'menu_class' => 'menu_ul',
                    )); ?>
            </ul>
        </nav>