<?php !is_page(878) ? $hreflang_tag = 'nb-no' : $hreflang_tag = 'en-no'; ?>

<!DOCTYPE html>
<html lang="no">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?= TEMPLATE_URL; ?>favicon.ico"/>
    <link rel="alternate" href="<?= SITE_URL . $_SERVER['REQUEST_URI'] ?>" hreflang="<?= $hreflang_tag; ?>"/>
    <meta name="google-site-verification" content="tzXN45afneJVP4MtpqcdbwxMEOv3VvCNig9VMz6tEig"/>
    <meta name="msvalidate.01" content="3B0683928783A812F474A160B5B2DEDF"/>

	<?php if ( is_singular() ) : ?>
        <link rel="amphtml" href="<?php the_permalink() ?>amp/"/>
	<?php endif; ?>

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-T7N2SH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T7N2SH');</script>
<!-- End Google Tag Manager -->


<div class="site--wrapper">

    <header class="site--header">

        <div id="sub-header">

            <div class="container">

                <?php

                $args = array(
                    'theme_location' => 'top_left_menu',
                    'container' => 'div',
                    'container_class' => 'pull-left',
                    'fallback_cb' => false
                );

                wp_nav_menu($args);

                ?>

                <?php

                $args = array(
                    'theme_location' => 'top_right_menu',
                    'container' => 'div',
                    'container_class' => 'pull-right',
                    'fallback_cb' => false
                );

                wp_nav_menu($args);

                ?>

            </div>

        </div>

        <div id="header">

            <div class="container">

                <a href="<?= SITE_URL; ?>" class="site-logo">
                    <img src="<?= TEMPLATE_URL; ?>img/logo.jpg" alt="Nettrafikk.no"/>
                </a>

                <?php

                $args = array(
                    'theme_location' => 'main_menu',
                    'container' => 'nav',
                    'container_class' => 'pull-right',
                    'menu_class' => 'menu main-menu',
                    'fallback_cb' => false
                );

                wp_nav_menu($args);

                ?>

                <span id="menu-toggle"><i class="fa fa-bars"></i></span>
                <span class="menu-text">MENY</span>

            </div>

        </div>

    </header>

    <main class="site--main">

        <?php if (!is_page_template('templates/page-content-build.php')) : get_template_part("parts/section", "breadcrumbs"); endif; ?>
