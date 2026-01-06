<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <header class="header">
        <div class="container">
            <div role="bar" class="header-bar">
                <div class="logo">
                    <a href="/" title="JESM Home">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo-desktop.svg" alt="JESM Logo">
                    </a>
                </div>
                <div class="menu">
<!--                    <button class="nav-toggle" aria-controls="primary-menu" aria-expanded="false">-->
<!--                        <span class="burger-icon" aria-hidden="true">-->
<!--                            <svg width="28" height="20" viewBox="0 0 28 20" xmlns="http://www.w3.org/2000/svg" role="img" focusable="false">-->
<!--                                <rect x="0" y="1"  width="28" height="2" rx="1" fill="currentColor"/>-->
<!--                                <rect x="0" y="9"  width="28" height="2" rx="1" fill="currentColor"/>-->
<!--                                <rect x="0" y="17" width="28" height="2" rx="1" fill="currentColor"/>-->
<!--                            </svg>-->
<!--                        </span>-->
<!--                        МЕНЮ-->
<!--                    </button>-->
                </div>
            </div>
    </header>
    <main>
