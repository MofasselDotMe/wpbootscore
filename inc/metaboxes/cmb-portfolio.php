<?php

function wpbootscore_portfolio_metaboxes() {
    $prefix = 'wpbs_';
    /**
     * Metaboxes for portfolio post type
     */
    $cmb_portfolio = new_cmb2_box( array(
        'id'           => $prefix . 'portfolio_metabox',
        'title'        => __( 'Additional informations', 'wpbootscore' ),
        'object_types' => array( 'portfolio', ), // Post type
    ) );

    $cmb_portfolio->add_field( array(
        'name' => __( 'Portfolio Custom URL', 'wpbootscore' ),
        'desc' => __( 'Write your custom destination url here', 'wpbootscore' ),
        'id'   => $prefix . 'portfolio_url',
        'type' => 'text_url',
    ) );

}

add_action( 'cmb2_admin_init', 'wpbootscore_portfolio_metaboxes' );