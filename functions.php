<?php

/**
 * Baseline Sample Child.
 *
 * This file adds functions to the Baseline Sample Child Theme.
 *
 * @package Baseline Child
 * @author  Last Run Media
 * @link    https://lastrunmedia.com/
 */


// Starts the engine.
add_action( 'wp_enqueue_scripts', 'baseline_enqueue_styles' );
function baseline_enqueue_styles() {
 
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}



/* # Gutenberg Support
--------------------------------------------------------------------- */  

  // -- Disable custom font sizes
  add_theme_support( 'disable-custom-font-sizes' );

  // -- Editor Font Styles
  add_theme_support( 'editor-font-sizes', array(
    array(
      'name'      => __( 'small', 'baseline-child' ),
      'shortName' => __( 'S', 'baseline-child' ),
      'size'      => 12,
      'slug'      => 'small'
    ),
    array(
      'name'      => __( 'regular', 'baseline-child' ),
      'shortName' => __( 'M', 'baseline-child' ),
      'size'      => 16,
      'slug'      => 'regular'
    ),
    array(
      'name'      => __( 'large', 'baseline-child' ),
      'shortName' => __( 'L', 'baseline-child' ),
      'size'      => 20,
      'slug'      => 'large'
    ),
  ) );

  // -- Disable Custom Colors
  add_theme_support( 'disable-custom-colors' );

  // -- Editor Color Palette
  add_theme_support( 'editor-color-palette', array(
    array(
      'name'  => __( 'Blue', 'baseline-child' ),
      'slug'  => 'blue',
      'color' => '#59BACC',
    ),
    array(
      'name'  => __( 'Green', 'baseline-child' ),
      'slug'  => 'green',
      'color' => '#58AD69',
    ),
    array(
      'name'  => __( 'Orange', 'baseline-child' ),
      'slug'  => 'orange',
      'color' => '#FFBC49',
    ),
    array(
      'name'  => __( 'Red', 'baseline-child' ),
      'slug'  => 'red',
      'color' => '#E2574C',
    ),
  ) );

