<?php
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ecommerce_hub_logo_customize_register( $wp_customize ) {
	// Logo Resizer additions
	$wp_customize->add_setting( 'logo_width', array(
		'default'              => 25,
		'type'                 => 'theme_mod',
		'theme_supports'       => 'custom-logo',
		'transport'            => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );

	$wp_customize->add_control( 'logo_width', array(
		'label'       => esc_html__( 'Logo Resizer','ecommerce-hub' ),
		'description'       => esc_html__( 'Forces the logo to have a specified width(max value is 100).','ecommerce-hub' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'text',
		'settings'    => 'logo_width',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 25,
			'aria-orientation' => 'horizontal',
		),
	) );

	$wp_customize->add_setting( 'ecommerce_hub_logo_spacing', array(
		'default'              => '',
       'sanitize_callback'	=> 'ecommerce_hub_sanitize_float'
	) );
	$wp_customize->add_control( 'ecommerce_hub_logo_spacing', array(
		'label'       => esc_html__( 'Logo Padding','ecommerce-hub' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'number',
		'settings'    => 'ecommerce_hub_logo_spacing',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'ecommerce_hub_logo_margin', array(
		'default'              => '',
       'sanitize_callback'	=> 'ecommerce_hub_sanitize_float'
	) );
	$wp_customize->add_control( 'ecommerce_hub_logo_margin', array(
		'label'       => esc_html__( 'Logo Margin','ecommerce-hub' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'number',
		'settings'    => 'ecommerce_hub_logo_margin',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('ecommerce_hub_show_site_title',array(
       'default' => true,
       'sanitize_callback' => 'ecommerce_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('ecommerce_hub_show_site_title',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Title','ecommerce-hub'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('ecommerce_hub_show_tagline',array(
       'default' => false,
       'sanitize_callback' => 'ecommerce_hub_sanitize_checkbox'
    ));
    $wp_customize->add_control('ecommerce_hub_show_tagline',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Site Tagline','ecommerce-hub'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting('ecommerce_hub_site_title_font_size',array(
		'default'=> '25',
		'sanitize_callback'	=> 'ecommerce_hub_sanitize_float'
	));
	$wp_customize->add_control('ecommerce_hub_site_title_font_size',array(
		'label'	=> __('Site Title Font Size','ecommerce-hub'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
      ),
		'section'=> 'title_tagline',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ecommerce_hub_site_tagline_font_size',array(
		'default'=> '14',
		'sanitize_callback'	=> 'ecommerce_hub_sanitize_float'
	));
	$wp_customize->add_control('ecommerce_hub_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size','ecommerce-hub'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
      ),
		'section'=> 'title_tagline',
		'type'=> 'number'
	));

	// site title color
   $wp_customize->add_setting('ecommerce_hub_site_title_text_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ecommerce_hub_site_title_text_color', array(
		'label'    => __('Change Site Title Text Color', 'ecommerce-hub'),
		'section'  => 'title_tagline',
		'settings' => 'ecommerce_hub_site_title_text_color',
	)));

	// site tagline font color
	$wp_customize->add_setting('ecommerce_hub_site_tagline_text_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ecommerce_hub_site_tagline_text_color', array(
		'label'    => __('Change Site Tagline Text Color', 'ecommerce-hub'),
		'section'  => 'title_tagline',
		'settings' => 'ecommerce_hub_site_tagline_text_color',
	)));
}
add_action( 'customize_register', 'ecommerce_hub_logo_customize_register' );

/**
 * Add support for logo resizing by filtering `get_custom_logo`
 */
function ecommerce_hub_customize_logo_resize( $html ) {
	$size = get_theme_mod( 'logo_width', '25' );
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	// set the short side minimum
	$min = 25;

	// don't use empty() because we can still use a 0
	if ( is_numeric( $size ) && is_numeric( $custom_logo_id ) ) {

		// we're looking for $img['width'] and $img['height'] of original image
		$logo = wp_get_attachment_metadata( $custom_logo_id );
		if ( ! $logo ) return $html;

		// get the logo support size
		$sizes = get_theme_support( 'custom-logo' );

		// Check for max height and width, default to image sizes if none set in theme
		$max['height'] = isset( $sizes[0]['height'] ) ? $sizes[0]['height'] : $logo['height'];
		$max['width'] = isset( $sizes[0]['width'] ) ? $sizes[0]['width'] : $logo['width'];

		// landscape or square
		if ( $logo['width'] >= $logo['height'] ) {
			$output = ecommerce_hub_min_max( $logo['height'], $logo['width'], $max['height'], $max['width'], $size, $min );
			$img = array(
				'height'	=> $output['short'],
				'width'		=> $output['long']
			);
		// portrait
		} else if ( $logo['width'] < $logo['height'] ) {
			$output = ecommerce_hub_min_max( $logo['width'], $logo['height'], $max['width'], $max['height'], $size, $min );
			$img = array(
				'height'	=> $output['long'],
				'width'		=> $output['short']
			);
		}

		// add the CSS
		$css = '
<style>
.custom-logo {
	height: ' . $img['height'] . 'px;
	max-height: ' . $max['height'] . 'px;
	max-width: ' . $max['width'] . 'px;
	width: ' . $img['width'] . 'px;
}
</style>';

		$html = $css . $html;
	}

	return $html;
}
add_filter( 'get_custom_logo', 'ecommerce_hub_customize_logo_resize' );

/* Helper function to determine the max size of the logo */
function ecommerce_hub_min_max( $short, $long, $short_max, $long_max, $percent, $min ){
	$ratio = ( $long / $short );
	$max['long'] = ( $long_max >= $long ) ? $long : $long_max;
	$max['short'] = ( $short_max >= ( $max['long'] / $ratio ) ) ? floor( $max['long'] / $ratio ) : $short_max;

	$ppp = ( $max['short'] - $min ) / 100;

	$size['short'] = round( $min + ( $percent * $ppp ) );
	$size['long'] = round( $size['short'] / ( $short / $long ) );

	return $size;
}

/**
 * JS handlers for Customizer Controls
*/
function ecommerce_hub_customize_controls_js() {
	wp_enqueue_script( 'ecommerce-hub-customizer-controls', esc_url(get_template_directory_uri()) . '/inc/logo/js/customize-controls.js', array( 'jquery', 'customize-preview' ), '201709071000', true );
}
add_action( 'customize_controls_enqueue_scripts', 'ecommerce_hub_customize_controls_js' );

/**
 * Adds CSS to the Customizer controls.
 */
function ecommerce_hub_customize_css() {
	wp_add_inline_style( 'customize-controls', '#customize-control-logo_size input[type=range] { width: 100%; }' );
}
add_action( 'customize_controls_enqueue_scripts', 'ecommerce_hub_customize_css' );

/**
 * Testing function to remove logo_width theme mod
 */
function ecommerce_hub_remove_theme_mod() {
	if ( isset( $_GET['remove_logo_size'] ) && 'true' == $_GET['remove_logo_size'] ){
		set_theme_mod( 'logo_width', '' );
	}
}
add_action( 'wp_loaded', 'ecommerce_hub_remove_theme_mod' );