<?php
    // Inclusion du style du thème parent
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        // Chargement du CSS du thème parent
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
          // Chargement du CSS du thème enfant
          wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }
?>

<?php
    function hook_admin() {
        // Condition de connexion
        if ( ! is_user_logged_in() ) {
?>
            <style>
                #menu-item-374 {
                    display: none !important;
                }
            </style>
<?php
        }
    }
    add_action( 'wp_head', 'hook_admin' );
?>