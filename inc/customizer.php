<?php

function wpdevs_customizer($wp_customize){
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'wpdevs'),
            'description' => __('Change your copyright text', 'wpdevs'),
            

        )
        );

        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type' => 'theme_mod',
                'default' => 'Copyright 2024 | All Rights Reserved | WPDevs',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control(
            'set_copyright',
            array(
                'label' => __('Copyright Text', 'wpdevs'),
                'section' => 'sec_copyright',
                'priority' => 1
                'type' => 'text'
            )
        );

}

add_action('customize_register', 'wpdevs_customizer');
?>