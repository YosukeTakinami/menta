<?php
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://indestructibletype-fonthosting.github.io/renner.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt=""></h1>
        <button type="button" id="navbtn">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="header-l">
            <nav><a href="#"></a>
                <ul id="navlist">
                    <li><a href="#">NEWS</a></li><li><a href="#">ABOUT US</a></li><li><a href="#">BUSSINESS</a></li><li><a href="#">COMPANY</a></li><li><a href="#">RECRUIT</a></li>
                </ul>
            </nav>
            <a href="#" class="header-l_btn">
                <div class="waku"></div>
                <dl>
                    <dt><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dl.svg" alt=""></span>DOWNLOAD</dt>
                    <dd>会社案内ダウンロード</dd>
                </dl>
            </a>
        </div>
    </header>