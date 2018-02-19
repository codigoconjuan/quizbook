<?php
if(! defined('ABSPATH')) exit;

function quizbook_post_type() {
    $labels = array(
        'name'                  => _x( 'Quiz', 'Post type general name', 'quizbook' ),
        'singular_name'         => _x( 'Quiz', 'Post type singular name', 'quizbook' ),
        'menu_name'             => _x( 'Quizes', 'Admin Menu text', 'quizbook' ),
        'name_admin_bar'        => _x( 'Quiz', 'Add New on Toolbar', 'quizbook' ),
        'add_new'               => __( 'Agregar Nuevo', 'quizbook' ),
        'add_new_item'          => __( 'Add New Quiz', 'quizbook' ),
        'new_item'              => __( 'New Quiz', 'quizbook' ),
        'edit_item'             => __( 'Editar Quiz', 'quizbook' ),
        'view_item'             => __( 'Ver Quiz', 'quizbook' ),
        'all_items'             => __( 'Todos Quizes', 'quizbook' ),
        'search_items'          => __( 'Buscar Quizes', 'quizbook' ),
        'parent_item_colon'     => __( 'Padre Quizes:', 'quizbook' ),
        'not_found'             => __( 'No encontrados.', 'quizbook' ),
        'not_found_in_trash'    => __( 'No encontrados.', 'quizbook' ),
        'featured_image'        => _x( 'Imagen Destacada', '', 'quizbook' ),
        'set_featured_image'    => _x( 'Añadir imagen destacada', '', 'quizbook' ),
        'remove_featured_image' => _x( 'Borrar imagen', '', 'quizbook' ),
        'use_featured_image'    => _x( 'Usar como imagen', '', 'quizbook' ),
        'archives'              => _x( 'Quizes Archivo', '', 'quizbook' ),
        'insert_into_item'      => _x( 'Insertar en Quiz', '', 'quizbook' ),
        'uploaded_to_this_item' => _x( 'Cargado en este Quiz', '', 'quizbook' ),
        'filter_items_list'     => _x( 'Filtrar Quizes por lista', '”. Added in 4.4', 'quizbook' ),
        'items_list_navigation' => _x( 'Navegación de Quizes', '', 'quizbook' ),
        'items_list'            => _x( 'Lista de Quizes', '', 'quizbook' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'quizes' ),
        'capability_type'    => array('quiz', 'quizes'),
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'has_archive'        => false,
        'hierarchical'       => false,
        'supports'           => array( 'title', 'editor'),
        'map_meta_cap'       => true
    );

    register_post_type( 'quizes', $args );
}

add_action( 'init', 'quizbook_post_type' );


/*
* Flush Rewrite
*/
function quizbook_rewrite_flush() {
    quizbook_post_type();
    flush_rewrite_rules();
}






