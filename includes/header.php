<?php
require "header_titles.php";
require "config/config.php";
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title><?php echo $title; ?> | Exampilot</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/assets.css">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
    <!-- REVOLUTION SLIDER END -->

    <style>
      /* Mega Menu Styles */
      .mega-menu {
        position: absolute;
        left: 0;
        right: 0;
        top: 100%;
        display: none;
        background-color: #1c1f24;
        padding: 2rem;
        z-index: 1000;
      }

      .nav-item.dropdown.show .mega-menu {
        display: flex;
      }


      .mega-menu .col {
        min-width: 180px;
      }

      .mega-menu a {
        color: #ccc;
        text-decoration: none;
        display: block;
        margin-bottom: 0.5rem;
        font-size: 14px;
      }

      .mega-menu a:hover {
        color: #fff;
      }

      .mega-menu h6 {
        color: #fff;
        font-size: 16px;
        margin-bottom: 0.75rem;
        border-bottom: 1px solid #555;
        padding-bottom: 5px;
      }

      .app-download p {
        color: #adb5bd;
      }
    </style>
  </head>