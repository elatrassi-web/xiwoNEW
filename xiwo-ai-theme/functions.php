<?php
/**
 * XIWO AI 2030 functions and definitions
 */

// Basic setup
function xiwo_ai_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Menu Principal', 'xiwo-ai' ),
        'footer'  => esc_html__( 'Menu Pied de Page', 'xiwo-ai' ),
    ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}
add_action( 'after_setup_theme', 'xiwo_ai_setup' );

// Enqueue scripts and styles.
function xiwo_ai_scripts() {
    // Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Syncopate:wght@400;700&display=swap', array(), null );

    // Theme Styles
    wp_enqueue_style( 'xiwo-ai-style', get_stylesheet_uri(), array(), '1.0.0' );

    // SwiperJS
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0.0' );
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.0.0', true );

    // GSAP for animations
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), '3.12.2', true );

    // Theme Scripts
    wp_enqueue_script( 'xiwo-ai-main-js', get_template_directory_uri() . '/assets/js/main.js', array('swiper-js', 'gsap', 'gsap-scrolltrigger'), '1.0.0', true );

    // Pass dynamic offer data to JS
    $regions = get_terms( array(
        'taxonomy'   => 'region',
        'hide_empty' => false,
    ) );

    $offer_data = array();
    foreach ( $regions as $region ) {
        // Find the most recent offer in this region
        $args = array(
            'post_type'      => 'offre',
            'posts_per_page' => 1,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'region',
                    'field'    => 'slug',
                    'terms'    => $region->slug,
                ),
            ),
        );
        $offers = new WP_Query( $args );
        if ( $offers->have_posts() ) {
            $offers->the_post();
            // Using standard meta keys based on project specifications. Provide fallbacks.
            $price = get_post_meta( get_the_ID(), 'prix_mensuel', true ) ?: '39,99';
            $brand = get_post_meta( get_the_ID(), 'brand', true ) ?: 'GOXIWO VIVA';

            $offer_data[$region->slug] = array(
                'price' => $price,
                'brand' => $brand,
                'title' => get_the_title(),
            );
        }
        wp_reset_postdata();
    }

    // Default fallback if no posts found
    if(empty($offer_data)) {
        $offer_data['default'] = array('price' => '39,99', 'brand' => 'GOXIWO VIVA', 'title' => 'Internet illimité<br>Sans engagement');
    }

    wp_localize_script( 'xiwo-ai-main-js', 'xiwoOfferData', $offer_data );
}
add_action( 'wp_enqueue_scripts', 'xiwo_ai_scripts' );

// Register Custom Post Type for Offers and Taxonomy for Regions
function xiwo_ai_register_post_types() {
    // Region Taxonomy
    $labels_tax = array(
        'name'              => _x( 'Régions', 'taxonomy general name', 'xiwo-ai' ),
        'singular_name'     => _x( 'Région', 'taxonomy singular name', 'xiwo-ai' ),
        'search_items'      => __( 'Rechercher des Régions', 'xiwo-ai' ),
        'all_items'         => __( 'Toutes les Régions', 'xiwo-ai' ),
        'parent_item'       => __( 'Région Parente', 'xiwo-ai' ),
        'parent_item_colon' => __( 'Région Parente:', 'xiwo-ai' ),
        'edit_item'         => __( 'Modifier la Région', 'xiwo-ai' ),
        'update_item'       => __( 'Mettre à jour la Région', 'xiwo-ai' ),
        'add_new_item'      => __( 'Ajouter une nouvelle Région', 'xiwo-ai' ),
        'new_item_name'     => __( 'Nom de la nouvelle Région', 'xiwo-ai' ),
        'menu_name'         => __( 'Régions', 'xiwo-ai' ),
    );

    $args_tax = array(
        'hierarchical'      => true,
        'labels'            => $labels_tax,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'region' ),
    );

    register_taxonomy( 'region', array( 'offre' ), $args_tax );

    // Offres CPT
    $labels_cpt = array(
        'name'                  => _x( 'Offres', 'Post type general name', 'xiwo-ai' ),
        'singular_name'         => _x( 'Offre', 'Post type singular name', 'xiwo-ai' ),
        'menu_name'             => _x( 'Offres', 'Admin Menu text', 'xiwo-ai' ),
        'name_admin_bar'        => _x( 'Offre', 'Add New on Toolbar', 'xiwo-ai' ),
        'add_new'               => __( 'Ajouter', 'xiwo-ai' ),
        'add_new_item'          => __( 'Ajouter une nouvelle offre', 'xiwo-ai' ),
        'new_item'              => __( 'Nouvelle offre', 'xiwo-ai' ),
        'edit_item'             => __( 'Modifier l\'offre', 'xiwo-ai' ),
        'view_item'             => __( 'Voir l\'offre', 'xiwo-ai' ),
        'all_items'             => __( 'Toutes les offres', 'xiwo-ai' ),
        'search_items'          => __( 'Rechercher des offres', 'xiwo-ai' ),
        'not_found'             => __( 'Aucune offre trouvée.', 'xiwo-ai' ),
        'not_found_in_trash'    => __( 'Aucune offre trouvée dans la corbeille.', 'xiwo-ai' ),
    );

    $args_cpt = array(
        'labels'             => $labels_cpt,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'offres' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-networking',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'offre', $args_cpt );
}
add_action( 'init', 'xiwo_ai_register_post_types' );
