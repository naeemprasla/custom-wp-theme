<?php
/* Post Type: Templates. */
function cp_theme_templates()
{

    $labels = array(
        'name'                => _x('Theme Templates', 'Post Type General Name', 'wp-bootstrap-starter'),
        'singular_name'       => _x('Theme Templates', 'Post Type Singular Name', 'wp-bootstrap-starter'),

    );
    $args = array(
        'label'               => __('themetemp', 'wp-bootstrap-starter'),
        'description'         => __('Custom Post Description', 'wp-bootstrap-starter'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'custom-fields'),
        'taxonomies'          => array(),
        'public'      => true,
        'has_archive' => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-media-document',
    );
    register_post_type('themetemp', $args);
}
add_action('init', 'cp_theme_templates');


$labels = array(
    'name'                => _x('Temp Categories', 'Post Type General Name', 'wp-bootstrap-starter'),
    'singular_name'       => _x('Temp Category', 'Post Type Singular Name', 'wp-bootstrap-starter'),

);
register_taxonomy(
    'templates_cat', // Taxonomy name
    array('themetemp'), //On Which Post You Want Custom Taxonomy
    array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'templates_cat' // Taxonomy Slug
        )
    )
);
