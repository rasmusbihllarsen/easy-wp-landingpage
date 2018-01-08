<?php
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page('Landingpage');
    }

    function my_theme_enqueue_styles() {
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            '',
            '20180108'
        );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    //Add flags to network-sites
    function flags_admin_head() {
        echo '<style>';
        echo '#wpadminbar .quicklinks li#wp-admin-bar-blog-2 .blavatar:before { content:""; background-size:cover; border-radius: 50%; background-position:center; background-image:url("/wp-content/themes/landingpage/img/dk-flag.png"); }';
        echo '#wpadminbar .quicklinks li#wp-admin-bar-blog-3 .blavatar:before { content:""; background-size:cover; border-radius: 50%; background-position:center; background-image:url("/wp-content/themes/landingpage/img/gb-flag.png"); }';
        echo '</style>';
    }
    add_action( 'admin_head', 'flags_admin_head' );

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_59d351ee84809',
		'title' => 'Indstillinger',
		'fields' => array(
			array(
				'key' => 'field_59d351f9bcaa3',
				'label' => 'Background',
				'name' => 'intro_bg',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_59d3541a95ac8',
				'label' => 'Logo',
				'name' => 'intro_logo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-landingpage',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
endif;