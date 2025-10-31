<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <?php wp_nav_menu(array('theme_location' => 'header','menu_class'     => 'nav-list',));?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <nav class="navbar">
    <ul class="nav-list">
        <li><a href="#Accueil">Accueil</a></li>
        <li><a href="#histoire">Histoire</a></li>
        <li><a href="#astarion">Personnages</a></li>
    </ul>
    </nav>
</header>
