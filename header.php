<!doctype html>
<html  <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>


    <!--[if gte IE 9]
    <style type="text/css">
    .gradient {
    filter: none;
    }
    </style>
    <![endif]-->


    <link href="http://epistol.info/img/logo.png" rel="shortcut icon">
    <link href="http://epistol.info/img/logo.png" rel="apple-touch-icon-precomposed">



    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Epistol" />
    <script src="/wp-content/themes/html5blank-stable/js/html5shiv.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/wp-content/themes/html5blank-stable/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/html5blank-stable/menu_sideslide.css" />

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <meta name="google-site-verification" content="NmI4o5j9JTvBU25SHiVhpMRIWF4knjHbHxXYjifDsMg" />

    <meta name="theme-color" content="#ff7254">
    <meta name="verification" content="73faa84b1920eddb7afe5ea59b1a9c87" />


    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <link rel="dns-prefetch" href="//epistol.info">

    <?php

    if (is_single()) {
        echo '
    <style>
    .nav > ul > li > a{
            color: #fff!important;
    }
.nav > ul > li.current-post-ancestor {
    border-bottom: 3px solid whitesmoke;
}
    </style>
    ';
    }


    ?>



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

    <script src="/wp-content/themes/html5blank-stable/js/html5shiv.min.js"></script>

    <!--[if lt IE 9]><script src="https://code.jquery.com/jquery-1.12.4.min.js"></script><![endif]-->




    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

    <?php wp_enqueue_script('jquery'); ?>

    <?php wp_head(); ?>



    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
      "@type": "Organization",
      "url": "http://blog.epistol.info/",
      "logo": "http://epistol.info/img/logo.png",
"name":"Epistol Info",
        "sameAs" : [
        "https://www.facebook.com/epistolinfo",
        "https://twitter.com/_Epistol_",
        "https://plus.google.com/u/0/b/100767385113184267882/+EpistolInfos"
    ]
}

    </script>



    <script type="text/javascript" src="/wp-content/themes/html5blank-stable/tarteaucitron/tarteaucitron.js"></script>

    <script type="text/javascript">
        tarteaucitron.init({
            "hashtag": "#tarteaucitron", /* Ouverture automatique du panel avec le hashtag */
            "highPrivacy": false, /* désactiver le consentement implicite (en naviguant) ? */
            "orientation": "bottom", /* le bandeau doit être en haut (top) ou en bas (bottom) ? */
            "adblocker": false, /* Afficher un message si un adblocker est détecté */
            "showAlertSmall": false, /* afficher le petit bandeau en bas à droite ? */
            "cookieslist": true, /* Afficher la liste des cookies installés ? */
            "removeCredit": false /* supprimer le lien vers la source ? */
        });
    </script>

</head>




<body <?php body_class(); ?>>

<div class="container">



    <div class="menu-wrap">
        <nav class="menu">
            <div class="icon-list">
                <a href="#"><i class="fa fa-fw fa-ellipsis-h "></i><span>Epistol.info</span></a>
                <?php
                html5blank_nav();
                ?>


            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>



    <!-- wrapper -->

    <div class="top_nav">

        <div class="contenant_nav">
            <!-- logo -->
            <div class="logo transition">

                    <button class="menu-button" id="open-button">
                        <img src="/wp-content/themes/html5blank-stable/img/epistologo.svg" alt="Logo" class="logo-img">
                    </button>

            </div>




            <!-- /logo -->
            <!-- nav -->

            <nav class="nav transition" role="navigation">

                <?php
                html5blank_nav();
                ?>


            </nav>
            <!-- /nav -->

            <div class="search1">

                <?php get_template_part( 'searchform'); ?>
            </div>

        </div>
    </div>

    <!-- /header -->



    <div class="content-wrap">
        <div class="content">

