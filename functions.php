<?php
if (!function_exists('portfolio_theme_setup')) {
    function portfolio_theme_setup()
    {

        add_theme_support('wp-block-styles');

        add_theme_support('responsive-embeds');

        add_theme_support('editor-styles');
        add_editor_style('editor-style.css');

        add_theme_support('title-tag');

        add_theme_support('html5', array(
            'style',
            'script'
        ));

        add_theme_support('post-thumbnails');

        add_theme_support('align-wide');

        register_nav_menus(array(
            'primary' => 'ナビゲーション'
        ));
    }
}
add_action('after_setup_theme', 'portfolio_theme_setup');

function portfolio_theme_scripts()
{

    wp_enqueue_style(
        'dashicons'
    );

    wp_enqueue_script(
        'portfolio-adobe-fonts',
        get_theme_file_uri('dist/js/adobe.js'),
        array(),
        filemtime(get_theme_file_path('dist/js/adobe.js')),
    );

    wp_enqueue_style(
        'portfolio',
        get_theme_file_uri('dist/css/app.css'),
        array(),
        filemtime(get_theme_file_path('dist/css/app.css'))
    );
}
add_action('wp_enqueue_scripts',  'portfolio_theme_scripts');
