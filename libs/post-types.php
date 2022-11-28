<?php

    add_action('init','theme_init_posttypes');
    
    function theme_init_posttypes() {
        
        $car_args = array( 'labels' => array(
            'name' => 'Oferty aut',
            'singular_name' => 'oferta',
            'all_items' => 'Wszystkie oferty',
            'add_new' => 'Dodaj nowe auto',
            'add_new_item' => 'Dodaj nowe auto',
            'edit_item' => 'Edytuj auto',
            'new_item' => 'Nowe auto',
            'view_item' => 'Zobacz auto',
            'search_items' => 'Szukaj aut',
            'not_found' => 'Nie znaleziono żadnych ofert', 
            'not_found_in_trash' => 'Nie znaleziono żadnych ofert w koszu', 
            'parent_item_colon' => ''
        ),
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true, 
        'capability_type' => 'post', 
        'hierarchical' => true, 
        'menu_position' => 5, 
        'supports' => array(
            'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats' ),
            'has_archive' => true );
        
        register_post_type('car_offer', $car_args);

        register_taxonomy("car_is_new", array("car_offer"), array(
            "hierarchical" => true, 
            "label" => "Nowe/uzywane", 
            "singular_label" => "Category", 
            "rewrite" => array( 
                'slug' => 'car', 
                'with_front'=> false 
            )
        ));
        /*
        register_taxonomy("marka", array("car_offer"), array(
            "hierarchical" => true, 
            "label" => "Marka", 
            "singular_label" => "marka", 
            "rewrite" => array( 
                'slug' => 'car_marka', 
                'with_front'=> false 
            )
        ));
        */
    }
?>