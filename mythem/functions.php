<?php

function mytheme_setup_theme() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme' );

function mytheme_enqueue_scripts() {
  wp_enqueue_style( 'mytheme-style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'mytheme-google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap' );

  wp_enqueue_script( 'mytheme-scripts', get_template_directory_uri() . '/assets/css/style.js', array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );
