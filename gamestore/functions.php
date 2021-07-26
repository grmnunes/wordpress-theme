<?php

    require(get_template_directory().'/inc/nav-bootstrap-walker.php');

    add_action('after_setup_theme', 'loadSetup');

    function loadSetup() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');

        register_nav_menus(
            array('dafault-menu' => 'Primary')
        );
    }

    add_action('wp_enqueue_scripts', 'loadScripts');
    function loadScripts() {

        wp_enqueue_style(
            'bootstrap-css', 
            get_template_directory_uri().'/assets/css/bootstrap.min.css', 
        );

        wp_enqueue_script(
            'popper', 
            'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js',
            array('jquery'), 
            true 
        );

        wp_enqueue_script(
            'bootstrap-js', 
            get_template_directory_uri().'/assets/js/bootstrap.min.js',
            array('popper'), 
            true 
        );
    }


