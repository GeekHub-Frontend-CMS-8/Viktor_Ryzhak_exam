<?php
/**
 * exam Theme Customizer
 *
 * @package exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'exam_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'exam_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'exam_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function exam_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function exam_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function exam_customize_preview_js() {
	wp_enqueue_script( 'exam-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'exam_customize_preview_js' );




// *** Add my customizer ***
//*******************************************

function zef_register_theme_customizer( $wp_customize ) {


//*   add customizer-section     "Hero content"

$wp_customize->add_section(
    'zef_content_hero',
    array(
        'title'     => 'Hero',
        'priority'  => 201
    )
);



//**   add customizer-section   label   "General title"

$wp_customize->add_setting(
    'zef_content_hero__general-title',
    array(
        'default'    =>  '',
        'transport'  =>  'postMessage'
    )
);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'zef_content_hero__general-title',
            array(
                'label'      => __( 'General title', 'zef' ),
                'settings'   => 'zef_content_hero__general-title',
                'section'    => 'zef_content_hero',
                'type'       => 'textarea'
            )
        )
    );


    //**   add customizer-section   label   "General text"

    $wp_customize->add_setting(
        'zef_content_hero__general-text',
        array(
            'default'    =>  '',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'zef_content_hero__general-text',
            array(
                'label'      => __( 'General text', 'zef' ),
                'settings'   => 'zef_content_hero__general-text',
                'section'    => 'zef_content_hero',
                'type'       => 'textarea'
            )
        )
    );


    //**   add customizer-section   label   "Up title"

    $wp_customize->add_setting(
        'zef_content_hero__general-go-to',
        array(
            'default'    =>  '',
            'transport'  =>  'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'zef_content_hero__general-go-to',
            array(
                'label'      => __( 'Go to', 'zef' ),
                'settings'   => 'zef_content_hero__general-go-to',
                'section'    => 'zef_content_hero'
            )
        )
    );

}
add_action( 'customize_register', 'zef_register_theme_customizer' );