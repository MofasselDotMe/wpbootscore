<?php

function wpbootscore_slide_metaboxes() {
    $prefix = 'wpbs_';

    /**
     * Metaboxes for slide post type
     */
    $cmb_slide = new_cmb2_box( array(
        'id'           => $prefix . 'slide_metabox',
        'title'        => __( 'Additional informations', 'wpbootscore' ),
        'object_types' => array( 'slide', ), // Post type
    ) );

    $cmb_slide->add_field( array(
        'name' => __( 'Slide URL', 'wpbootscore' ),
        'desc' => __( 'Enter slide url here', 'wpbootscore' ),
        'id'   => $prefix . 'slide_url',
        'type' => 'text_url',
    ) );

}

add_action( 'cmb2_admin_init', 'wpbootscore_slide_metaboxes' );