<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>実里・ほほえみ</title>
    <link rel="icon" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="manifest" href="/manifest.webmanifest" crossorigin="use-credentials">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>

        <?php
        if (is_front_page()) {
            get_template_part('templates/header', 'top');
        } else {
            get_template_part('templates/header', 'sub');
        }
        ?>
    </header>