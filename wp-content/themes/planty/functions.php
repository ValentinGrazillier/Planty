<?php
    // Inclusion du style du thème parent
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        // Chargement du CSS du thème parent
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }
?>