<?php

// Function to check if the 'ultimate-blocks' plugin is installed (active or inactive)
function groundwp_is_ultimate_blocks_installed() {

    $plugin_path = 'ultimate-blocks/ultimate-blocks.php';

    // Check if the plugin is active
    if ( function_exists( 'is_plugin_active' ) && is_plugin_active( $plugin_path ) ) {
        return true;
    }

    // Check if the plugin is installed but inactive
    if ( function_exists( 'get_plugins' ) ) {
        $all_plugins = get_plugins();
        return array_key_exists( $plugin_path, $all_plugins );
    }

    return false;

}

// Function to enqueue admin scripts and styles
function groundwp_enqueue_admin_scripts() {

    wp_enqueue_style( 'groundwp-admin-style', get_template_directory_uri() . '/assets/css/admin.css' );
    wp_enqueue_script( 'groundwp-admin-script', get_template_directory_uri() . '/assets/js/admin.js', array(), '', true );

    wp_localize_script( 'groundwp-admin-script', 'groundwp_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'groundwp_dismiss_notice' ),
    ));

}
add_action( 'admin_enqueue_scripts', 'groundwp_enqueue_admin_scripts' );

// Function to display the admin notice
function groundwp_admin_notice() {

    if ( !groundwp_is_ultimate_blocks_installed() && !get_option( 'groundwp_notice_dismissed' ) ) {

        echo '<div class="notice notice-success is-dismissible groundwp-admin-notice">';
        echo '    <div class="groundwp-admin-notice-wrapper">';
        echo '        <h2>Hi, thank you for installing GroundWP!</h2>';
        echo '        <p>We highly recommend installing plugin: <strong>Ultimate Blocks</strong></p>';
        echo '        <p><strong>Ultimate Blocks</strong> is a free plugin that provides multiple advanced custom blocks for your site, which can improve your content building and site design.</p>';
        echo '        <a href="' . esc_url( admin_url( 'update.php?action=install-plugin&plugin=ultimate-blocks&_wpnonce=' . wp_create_nonce( 'install-plugin_ultimate-blocks' ) ) ) . '" class="button-primary" style="margin-top: 10px;margin-bottom: 20px">Install Now</a>';
        echo '        <a target="_blank" href="https://ultimateblocks.com/?utm_source=groundwp&utm_medium=notice" class="button-secondary" style="margin-top: 10px;margin-bottom: 20px">Learn More</a>';
        echo '    </div>';
        echo '<button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';

    }

}
add_action( 'admin_notices', 'groundwp_admin_notice' );


// Function to handle notice dismissal via AJAX
function groundwp_dismiss_admin_notice() {

    check_ajax_referer( 'groundwp_dismiss_notice', 'security' );

    update_option( 'groundwp_notice_dismissed', 1 );
    wp_send_json_success();

}
add_action( 'wp_ajax_groundwp_dismiss_notice', 'groundwp_dismiss_admin_notice' );