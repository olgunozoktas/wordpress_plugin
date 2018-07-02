<?php
    // Add Scripts
    function mature_add_scripts(){
        //Add Main CSS
        wp_enqueue_style('mature-main-style', plugins_url().'/mature/css/style.css'); //part of wordpress api
        //Add Main JS
        wp_enqueue_script('mature-main-script', plugins_url().'/mature/js/main.js');

        // Add Google Script
        wp_register_script('google', 'https://apis.google.com/js/platform.js');
        wp_enqueue_script('google');
    }

    add_action('wp_enqueue_scripts', 'mature_add_scripts');