<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <script type="text/javascript">
    var MTUserId='2d43a6ac-ff38-467d-bf1f-ba3608b44824';
    var MTFontIds = new Array();
      MTFontIds.push("721263"); // Avenir® Next W01 Regular 
      MTFontIds.push("721269"); // Avenir® Next W01 Demi 
      (function() {
        var mtTracking = document.createElement('script');
        mtTracking.type='text/javascript';
        mtTracking.async='true';
        mtTracking.src='mtiFontTrackingCode.js';
        (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(mtTracking);
      })();
    </script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/gmlaunch/imgs/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/gmlaunch/imgs/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/gmlaunch/imgs/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/gmlaunch/imgs/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/gmlaunch/imgs/favicons/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/gmlaunch/imgs/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/wp-content/themes/gmlaunch/imgs/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <header>
    <nav class="header-nav">
      <div class="header-logo-menu-wrapper">
        <div id="logo">
          <a href="/">
            <?php get_template_part('imgs/rabbet-logo.svg');?>
          </a>
        </div> <!-- logo -->
        <?php wp_nav_menu( array( 'menu' => 'Header Menu Desktop' ) ); ?>
        <button class="dots"><span></span></button>
      </div> <!-- header-logo-menu-wrapper -->
      <div class="header-sub-menu-wrapper">
        <?php wp_nav_menu( array( 'menu' => 'Header Sub Menu' ) ); ?>
      </div>
    </nav>
  </header>
  <body <?php body_class(); ?>>
    <div class="section-fullpage-wrapper">