<?php
/**
 *  Ecommerce Hub : Block Patterns
 *
 * @package  Ecommerce Hub 
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'ecommerce-hub',
		array( 'label' => __( ' Ecommerce Hub ', 'ecommerce-hub' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'ecommerce-hub/banner-section',
		array(
			'title'      => __( 'Banner Section', 'ecommerce-hub' ),
			'categories' => array( 'ecommerce-hub' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/banner.png\",\"id\":986,\"dimRatio\":0,\"isDark\":false,\"align\":\"full\",\"className\":\"main-banner-section\"} -->\n<div class=\"wp-block-cover alignfull is-light main-banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-986\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"style\":{\"typography\":{\"textTransform\":\"uppercase\"}}} -->\n<h1 class=\"has-text-align-center\" style=\"text-transform:uppercase\">Lorem Ipsum</h1>\n<!-- /wp:heading -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"align\":\"center\",\"style\":{\"border\":{\"radius\":\"0px\"}}} -->\n<div class=\"wp-block-button aligncenter\"><a class=\"wp-block-button__link\" style=\"border-radius:0px\">SHOP NOW</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);
	register_block_pattern(
		'ecommerce-hub/featured-product-section',
		array(
			'title'      => __( 'Featured Product Section', 'ecommerce-hub' ),
			'categories' => array( 'ecommerce-hub' ),
			'content'    => "<!-- wp:group {\"align\":\"full\",\"style\":{\"color\":{\"background\":\"#eeeeee\"}},\"className\":\"main-product-section pb-5 pb-md-5\"} -->\n<div class=\"wp-block-group alignfull main-product-section pb-5 pb-md-5 has-background\" style=\"background-color:#eeeeee\"><!-- wp:heading {\"textAlign\":\"left\",\"align\":\"wide\",\"style\":{\"typography\":{\"textTransform\":\"uppercase\",\"fontSize\":\"25px\"},\"color\":{\"text\":\"#2c2c2c\"}}} -->\n<h2 class=\"alignwide has-text-align-left has-text-color\" style=\"color:#2c2c2c;font-size:25px;text-transform:uppercase\">feature product</h2>\n<!-- /wp:heading -->\n\n<!-- wp:woocommerce/product-category {\"columns\":4,\"rows\":1,\"categories\":[21],\"stockStatus\":[\"\",\"instock\",\"outofstock\",\"onbackorder\"],\"className\":\"mx-md-5 mx-2\"} /--></div>\n<!-- /wp:group -->",
		)
	);
}