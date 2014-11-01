<?php


// Ajouter des images à la une ("thumbnail")
add_theme_support( 'post-thumbnails' );

function mes_menus() {
  register_nav_menus (
    array(
    'secondary-nav' => 'Secondary Menu',
    'third-nav' => 'Third Menu',
    )
  );
}

require_once('wp_bootstrap_navwalker.php');

add_action( 'init', 'mes_menus' );