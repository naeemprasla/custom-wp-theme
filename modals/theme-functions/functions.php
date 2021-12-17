<?php

function custom_theme_scripts()
{


    $enable_slick = get_theme_mod('enable_slick');
    $enable_aos = get_theme_mod('enable_aos');
    $enable_fontawesome = get_theme_mod('enable_fontawesome');



    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    if ($enable_slick == 1) {
        wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
    }
    if ($enable_aos == 1) {
        wp_enqueue_style('aos-animate-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    }
    if ($enable_fontawesome == 1) {
        wp_enqueue_style('faicons-v5-css',  'https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css');
        //wp_enqueue_style('faicons-v6-css',  'https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css'); 
    }


    wp_enqueue_style('theme-fonts-css', get_template_directory_uri() . '/assets/css/fonts/fonts.css'); // Fonts
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/assets/css/main.css'); // Main CSS
    wp_enqueue_style('theme-woo-css', get_template_directory_uri() . '/assets/css/woo.css'); // Woo CSS
    wp_enqueue_style('theme-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css'); // Responsive 




    wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', true); // Jquery

    if ($enable_slick == 1) {
        wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true);
    }

    if ($enable_aos == 1) {
        wp_enqueue_script('aos-animation-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    }
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), '1.16.0', true); // Popper


    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), '4.5.2', true); // Bootstrap

    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/app.js', array(), '1.1.2', true); // Main JS
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');




// Widgets
include 'theme-widgets.php';

//Customizer
include 'customizer.php';

//Woo
include 'woo-functions.php';

//SHORTCODES
include 'shortcodes/social-contacts.php';

// Custom Posts
include 'custom-posts/cp-templates.php';
include 'custom-posts/cp-testimonials.php';
include 'custom-posts/cp-logos.php';

//WPB Widgets
include 'vc_widgets/wpb-counterbox.php';


//WPB Sidebars
include 'sidebars/contact-info.php';
include 'sidebars/social-media.php';


//WPB Custom Fields
include 'custom-fields.php';
