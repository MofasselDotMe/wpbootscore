<?php

function wpbootscore_service_metaboxes() {
    $prefix = 'wpbs_';
    /**
     * Metaboxes for service post type
     */
    $cmb_service = new_cmb2_box( array(
        'id'           => $prefix . 'service_metabox',
        'title'        => __( 'Additional informations', 'wpbootscore' ),
        'object_types' => array( 'service', ), // Post type
    ) );

    $cmb_service->add_field( array(
        'name' => __( 'Service Icon', 'wpbootscore' ),
        'desc' => __( 'Enter fontawesome icon name only here', 'wpbootscore' ),
        'id'   => $prefix . 'service_icon',
        'type' => 'text',
    ) );

}

add_action( 'cmb2_admin_init', 'wpbootscore_service_metaboxes' );