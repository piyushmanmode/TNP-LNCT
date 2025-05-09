<?php
	
	$ecommerce_hub_first_theme_color = get_theme_mod('ecommerce_hub_first_theme_color');

	$ecommerce_hub_custom_css = '';

	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' input[type="submit"], #footer input[type="submit"], #sidebar .tagcloud a:hover,.nav-menu ul ul a, .social-icon,  h1.page-title, h1.search-title, .post-info, .blogbtn a, .inner, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .title-box,.more-btn a:hover, .tags a:hover, #comments a.comment-reply-link, .back-to-top, .navigation .nav-previous a, .navigation .nav-next a,#sidebar .wp-block-search__button,.bradcrumbs a, .bradcrumbs span,.post-categories li a,span.page-links-title,.page-links .current .page-number,.page-links a span:hover,#maincontent .wp-block-button a,.widget_calendar tbody a,.wp-block-tag-cloud a:hover,.wp-block-search__button,.woocommerce a.added_to_cart.wc-forward{';
			$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, #sidebar ul li a:hover, a, .nav-menu ul li a:hover, .social-media i, .social-media i:hover, .contact-details i, .border-image i, .footerinner ul li a:hover, span.post-title, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a, .nav-menu ul li a:hover,#footer h3,.tags a i, #footer .wp-block-search__label,#footer h2{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' #sidebar form, .more-btn a:hover, .nav-menu ul ul,.tags a:hover,.page-links .current .page-number, .wp-block-tag-cloud a:hover, #footer .wp-block-search__label,#footer h2,.footerinner .tagcloud a:hover,#sidebar .tagcloud a:hover {';
			$ecommerce_hub_custom_css .='border-color: '.esc_attr($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' 
		.nav-menu ul li a:hover {';
			$ecommerce_hub_custom_css .='border-left-color: '.esc_attr($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' 
		.back-to-top::before {';
			$ecommerce_hub_custom_css .='border-bottom-color: '.esc_attr($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' .blog-sec, #sidebar aside, #sidebar .widget{';
			$ecommerce_hub_custom_css .='box-shadow: 2px 2px '.esc_attr($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}


	// Layout Options
	$ecommerce_hub_theme_layout = get_theme_mod( 'ecommerce_hub_theme_layout_options','Default Theme');
    if($ecommerce_hub_theme_layout == 'Default Theme'){
		$ecommerce_hub_custom_css .='body{';
			$ecommerce_hub_custom_css .='max-width: 100%;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_theme_layout == 'Container Theme'){
		$ecommerce_hub_custom_css .='body{';
			$ecommerce_hub_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_theme_layout == 'Box Container Theme'){
		$ecommerce_hub_custom_css .='body{';
			$ecommerce_hub_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$ecommerce_hub_custom_css .='}';
	}

	/*------------- Slider Opacity -------------------*/
	$ecommerce_hub_slider_layout = get_theme_mod( 'ecommerce_hub_slider_opacity_color','0.7');
	if($ecommerce_hub_slider_layout == '0'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.1'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.1';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.2'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.2';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.3'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.3';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.4'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.4';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.5'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.5';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.6'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.6';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.7'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.7';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.8'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.8';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.9'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.9';
		$ecommerce_hub_custom_css .='}';
	}

	/*----------Slider Content Layout -------------------*/
	$ecommerce_hub_slider_layout = get_theme_mod( 'ecommerce_hub_slider_alignment_option','Left Align');
    if($ecommerce_hub_slider_layout == 'Left Align'){
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
			$ecommerce_hub_custom_css .='text-align:left;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:15%; right:45%;';
		$ecommerce_hub_custom_css .='} }';
	}else if($ecommerce_hub_slider_layout == 'Center Align'){
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
			$ecommerce_hub_custom_css .='text-align:center;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:25%; right:25%;';
		$ecommerce_hub_custom_css .='} }';
	}else if($ecommerce_hub_slider_layout == 'Right Align'){
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
			$ecommerce_hub_custom_css .='text-align:right;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:45%; right:15%;';
		$ecommerce_hub_custom_css .='} }';		
	}

	// Slider Arrows hover color
	$ecommerce_hub_slider_arrows_hover_color = get_theme_mod('ecommerce_hub_slider_arrows_hover_color');
	$ecommerce_hub_custom_css .='#slider .carousel-control-prev-icon:hover,#slider .carousel-control-next-icon:hover{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_slider_arrows_hover_color).' !important;';
	$ecommerce_hub_custom_css .='}';
	
	/*-------- Blog Post Alignment ------*/
	$ecommerce_hub_post_alignment = get_theme_mod('ecommerce_hub_blog_post_alignment', 'left');
	if($ecommerce_hub_post_alignment == 'center' ){
		$ecommerce_hub_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$ecommerce_hub_custom_css .='text-align: '. $ecommerce_hub_post_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_post_alignment == 'left' ){
		$ecommerce_hub_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$ecommerce_hub_custom_css .=' text-align: '. $ecommerce_hub_post_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_post_alignment == 'right' ){
		$ecommerce_hub_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$ecommerce_hub_custom_css .='text-align: '. $ecommerce_hub_post_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$ecommerce_hub_preloader_color = get_theme_mod('ecommerce_hub_preloader_color');

	if($ecommerce_hub_preloader_color != false){
		$ecommerce_hub_custom_css .=' .tg-loader{';
			$ecommerce_hub_custom_css .='border-color: '.esc_attr($ecommerce_hub_preloader_color).';';
		$ecommerce_hub_custom_css .='} ';
		$ecommerce_hub_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_preloader_color).';';
		$ecommerce_hub_custom_css .='} ';
	}

	$ecommerce_hub_preloader_bg_color = get_theme_mod('ecommerce_hub_preloader_bg_color');

	if($ecommerce_hub_preloader_bg_color != false){
		$ecommerce_hub_custom_css .=' #overlayer, .preloader{';
			$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_preloader_bg_color).';';
		$ecommerce_hub_custom_css .='} ';
	}

	$ecommerce_hub_preloader_bg_img = get_theme_mod('ecommerce_hub_preloader_bg_img');
	if($ecommerce_hub_preloader_bg_img != false){
		$ecommerce_hub_custom_css .=' #overlayer, .preloader{';
			$ecommerce_hub_custom_css .='background: url('.esc_attr($ecommerce_hub_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$ecommerce_hub_custom_css .='}';
	}

	/*------------ Button Settings option-----------------*/
	$ecommerce_hub_top_button_padding = get_theme_mod('ecommerce_hub_top_button_padding');
	$ecommerce_hub_bottom_button_padding = get_theme_mod('ecommerce_hub_bottom_button_padding');
	$ecommerce_hub_left_button_padding = get_theme_mod('ecommerce_hub_left_button_padding');
	$ecommerce_hub_right_button_padding = get_theme_mod('ecommerce_hub_right_button_padding');
	if($ecommerce_hub_top_button_padding != false || $ecommerce_hub_bottom_button_padding != false || $ecommerce_hub_left_button_padding != false || $ecommerce_hub_right_button_padding != false){
		$ecommerce_hub_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$ecommerce_hub_custom_css .='padding-top: '.esc_attr($ecommerce_hub_top_button_padding).'px; padding-bottom: '.esc_attr($ecommerce_hub_bottom_button_padding).'px; padding-left: '.esc_attr($ecommerce_hub_left_button_padding).'px; padding-right: '.esc_attr($ecommerce_hub_right_button_padding).'px; display:inline-block;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_button_border_radius = get_theme_mod('ecommerce_hub_button_border_radius');
	$ecommerce_hub_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
		$ecommerce_hub_custom_css .='border-radius: '.esc_attr($ecommerce_hub_button_border_radius).'px;';
	$ecommerce_hub_custom_css .='}';

	// button font weight
	$ecommerce_hub_button_font_weight = get_theme_mod('ecommerce_hub_button_font_weight');
  	$ecommerce_hub_custom_css .='.blogbtn a{';
    $ecommerce_hub_custom_css .='font-weight: '.esc_attr($ecommerce_hub_button_font_weight).';';
  	$ecommerce_hub_custom_css .='}';


  	// button text transform
  	$ecommerce_hub_button_text_transform = get_theme_mod('ecommerce_hub_button_text_transform');
  	if($ecommerce_hub_button_text_transform == 'uppercase' ){
    	$ecommerce_hub_custom_css .='.blogbtn a{';
      	$ecommerce_hub_custom_css .=' text-transform: uppercase;';
    	$ecommerce_hub_custom_css .='}';
  	}elseif($ecommerce_hub_button_text_transform == 'Capitalize' ){
    	$ecommerce_hub_custom_css .='.blogbtn a{';
      	$ecommerce_hub_custom_css .=' text-transform: Capitalize;';
    	$ecommerce_hub_custom_css .='}';
  	}elseif($ecommerce_hub_button_text_transform == 'lowercase' ){
    	$ecommerce_hub_custom_css .='.blogbtn a{';
      	$ecommerce_hub_custom_css .=' text-transform: lowercase;';
    	$ecommerce_hub_custom_css .='}';
  	}

  	// widgets heading font size
	$ecommerce_hub_widgets_heading_fontsize = get_theme_mod('ecommerce_hub_widgets_heading_fontsize',26);
	if($ecommerce_hub_widgets_heading_fontsize != false){
		$ecommerce_hub_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
			$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_widgets_heading_fontsize).'px; ';
		$ecommerce_hub_custom_css .='}';
	}

	// widgets heading font weight
	$ecommerce_hub_widgets_heading_font_weight = get_theme_mod('ecommerce_hub_widgets_heading_font_weight', '600');
  	$ecommerce_hub_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
    $ecommerce_hub_custom_css .='font-weight: '.esc_attr($ecommerce_hub_widgets_heading_font_weight).';';
  	$ecommerce_hub_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$ecommerce_hub_footer_widgets_heading = get_theme_mod( 'ecommerce_hub_footer_widgets_heading','Left');
    if($ecommerce_hub_footer_widgets_heading == 'Left'){
		$ecommerce_hub_custom_css .='#footer h3{';
		$ecommerce_hub_custom_css .='text-align: left;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_footer_widgets_heading == 'Center'){
		$ecommerce_hub_custom_css .='#footer h3{';
			$ecommerce_hub_custom_css .='text-align: center;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_footer_widgets_heading == 'Right'){
		$ecommerce_hub_custom_css .='#footer h3{';
			$ecommerce_hub_custom_css .='text-align: right;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_footer_widgets_content = get_theme_mod( 'ecommerce_hub_footer_widgets_content','Left');
    if($ecommerce_hub_footer_widgets_content == 'Left'){
		$ecommerce_hub_custom_css .='#footer .widget ul{';
		$ecommerce_hub_custom_css .='text-align: left;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_footer_widgets_content == 'Center'){
		$ecommerce_hub_custom_css .='#footer .widget ul{';
			$ecommerce_hub_custom_css .='text-align: center;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_footer_widgets_content == 'Right'){
		$ecommerce_hub_custom_css .='#footer .widget ul{';
			$ecommerce_hub_custom_css .='text-align: right;';
		$ecommerce_hub_custom_css .='}';
	}

	/*----------- Copyright css -----*/
	$ecommerce_hub_copyright_top_padding = get_theme_mod('ecommerce_hub_top_copyright_padding');
	$ecommerce_hub_copyright_bottom_padding = get_theme_mod('ecommerce_hub_top_copyright_padding');
	if($ecommerce_hub_copyright_top_padding != false || $ecommerce_hub_copyright_bottom_padding != false){
		$ecommerce_hub_custom_css .='.inner{';
			$ecommerce_hub_custom_css .='padding-top: '.esc_attr($ecommerce_hub_copyright_top_padding).'px; padding-bottom: '.esc_attr($ecommerce_hub_copyright_bottom_padding).'px; ';
		$ecommerce_hub_custom_css .='}';
	} 

	$ecommerce_hub_copyright_alignment = get_theme_mod('ecommerce_hub_copyright_alignment', 'center');
	if($ecommerce_hub_copyright_alignment == 'center' ){
		$ecommerce_hub_custom_css .='#footer .copyright p{';
			$ecommerce_hub_custom_css .='text-align: '. $ecommerce_hub_copyright_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_copyright_alignment == 'left' ){
		$ecommerce_hub_custom_css .='#footer .copyright p{';
			$ecommerce_hub_custom_css .=' text-align: '. $ecommerce_hub_copyright_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_copyright_alignment == 'right' ){
		$ecommerce_hub_custom_css .='#footer .copyright p{';
			$ecommerce_hub_custom_css .='text-align: '. $ecommerce_hub_copyright_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_copyright_font_size = get_theme_mod('ecommerce_hub_copyright_font_size');
	$ecommerce_hub_custom_css .='#footer .copyright p{';
		$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_copyright_font_size).'px;';
	$ecommerce_hub_custom_css .='}';

	$ecommerce_hub_copyright_color = get_theme_mod('ecommerce_hub_copyright_color');
	$ecommerce_hub_custom_css .='#footer .copyright p,#footer .copyright a{';
		$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_copyright_color).'!important;';
	$ecommerce_hub_custom_css .='}';

	$ecommerce_hub_back_to_top_text_color = get_theme_mod('ecommerce_hub_back_to_top_text_color');
	$ecommerce_hub_custom_css .='.back-to-top{';
		$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_back_to_top_text_color).'!important;';
	$ecommerce_hub_custom_css .='}';

	/*------ Topbar padding ------*/
	$ecommerce_hub_top_topbar_padding = get_theme_mod('ecommerce_hub_top_topbar_padding');
	$ecommerce_hub_bottom_topbar_padding = get_theme_mod('ecommerce_hub_bottom_topbar_padding');
	if($ecommerce_hub_top_topbar_padding != false || $ecommerce_hub_bottom_topbar_padding != false){
		$ecommerce_hub_custom_css .='.social-icon{';
			$ecommerce_hub_custom_css .='padding-top: '.esc_attr($ecommerce_hub_top_topbar_padding).'px; padding-bottom: '.esc_attr($ecommerce_hub_bottom_topbar_padding).'px; ';
		$ecommerce_hub_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$ecommerce_hub_product_border = get_theme_mod('ecommerce_hub_product_border',false);

	if($ecommerce_hub_product_border == true){
		$ecommerce_hub_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$ecommerce_hub_custom_css .='border: 1px solid '.esc_attr($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_product_top = get_theme_mod('ecommerce_hub_product_top_padding');
	$ecommerce_hub_product_bottom = get_theme_mod('ecommerce_hub_product_bottom_padding');
	$ecommerce_hub_product_left = get_theme_mod('ecommerce_hub_product_left_padding');
	$ecommerce_hub_product_right = get_theme_mod('ecommerce_hub_product_right_padding');
	if($ecommerce_hub_product_top != false || $ecommerce_hub_product_bottom != false || $ecommerce_hub_product_left != false || $ecommerce_hub_product_right != false){
		$ecommerce_hub_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$ecommerce_hub_custom_css .='padding-top: '.esc_attr($ecommerce_hub_product_top).'px; padding-bottom: '.esc_attr($ecommerce_hub_product_bottom).'px; padding-left: '.esc_attr($ecommerce_hub_product_left).'px; padding-right: '.esc_attr($ecommerce_hub_product_right).'px;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_product_border_radius = get_theme_mod('ecommerce_hub_product_border_radius');
	if($ecommerce_hub_product_border_radius != false){
		$ecommerce_hub_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$ecommerce_hub_custom_css .='border-radius: '.esc_attr($ecommerce_hub_product_border_radius).'px;';
		$ecommerce_hub_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$ecommerce_hub_product_sale_top = get_theme_mod('ecommerce_hub_product_sale_top_padding');
	$ecommerce_hub_product_sale_bottom = get_theme_mod('ecommerce_hub_product_sale_bottom_padding');
	$ecommerce_hub_product_sale_left = get_theme_mod('ecommerce_hub_product_sale_left_padding');
	$ecommerce_hub_product_sale_right = get_theme_mod('ecommerce_hub_product_sale_right_padding');
	if($ecommerce_hub_product_sale_top != false || $ecommerce_hub_product_sale_bottom != false || $ecommerce_hub_product_sale_left != false || $ecommerce_hub_product_sale_right != false){
		$ecommerce_hub_custom_css .='.woocommerce span.onsale {';
			$ecommerce_hub_custom_css .='padding-top: '.esc_attr($ecommerce_hub_product_sale_top).'px; padding-bottom: '.esc_attr($ecommerce_hub_product_sale_bottom).'px; padding-left: '.esc_attr($ecommerce_hub_product_sale_left).'px; padding-right: '.esc_attr($ecommerce_hub_product_sale_right).'px;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_product_sale_border_radius = get_theme_mod('ecommerce_hub_product_sale_border_radius',50);
	if($ecommerce_hub_product_sale_border_radius != false){
		$ecommerce_hub_custom_css .='.woocommerce span.onsale {';
			$ecommerce_hub_custom_css .='border-radius: '.esc_attr($ecommerce_hub_product_sale_border_radius).'px;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_menu_case = get_theme_mod('ecommerce_hub_product_sale_position', 'Right');
	if($ecommerce_hub_menu_case == 'Right' ){
		$ecommerce_hub_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ecommerce_hub_custom_css .=' left:auto; right:0;';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_menu_case == 'Left' ){
		$ecommerce_hub_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ecommerce_hub_custom_css .=' left:-10px; right:auto;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_product_sale_font_size = get_theme_mod('ecommerce_hub_product_sale_font_size',13);
	$ecommerce_hub_custom_css .='.woocommerce span.onsale {';
		$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_product_sale_font_size).'px;';
	$ecommerce_hub_custom_css .='}';

	/*---- Slider Image overlay -----*/
	$ecommerce_hub_slider_image_overlay = get_theme_mod('ecommerce_hub_slider_image_overlay',true);
	if($ecommerce_hub_slider_image_overlay == false){
		$ecommerce_hub_custom_css .='#slider img {';
			$ecommerce_hub_custom_css .='opacity: 1;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_slider_overlay_color = get_theme_mod('ecommerce_hub_slider_overlay_color');
	if($ecommerce_hub_slider_overlay_color != false){
		$ecommerce_hub_custom_css .='#slider  {';
			$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_slider_overlay_color).';';
		$ecommerce_hub_custom_css .='}';
	}

	/*---- Comment form ----*/
	$ecommerce_hub_comment_width = get_theme_mod('ecommerce_hub_comment_width', '100');
	$ecommerce_hub_custom_css .='#comments textarea{';
		$ecommerce_hub_custom_css .=' width:'.esc_attr($ecommerce_hub_comment_width).'%;';
	$ecommerce_hub_custom_css .='}';

	$ecommerce_hub_comment_submit_text = get_theme_mod('ecommerce_hub_comment_submit_text', 'Post Comment');
	if($ecommerce_hub_comment_submit_text == ''){
		$ecommerce_hub_custom_css .='#comments p.form-submit {';
			$ecommerce_hub_custom_css .='display: none;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_comment_title = get_theme_mod('ecommerce_hub_comment_title', 'Leave a Reply');
	if($ecommerce_hub_comment_title == ''){
		$ecommerce_hub_custom_css .='#comments h2#reply-title {';
			$ecommerce_hub_custom_css .='display: none;';
		$ecommerce_hub_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$ecommerce_hub_footer_bg_color = get_theme_mod('ecommerce_hub_footer_bg_color');
	if($ecommerce_hub_footer_bg_color != false){
		$ecommerce_hub_custom_css .='#footer{';
			$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_footer_bg_color).';';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_footer_bg_image = get_theme_mod('ecommerce_hub_footer_bg_image');
	if($ecommerce_hub_footer_bg_image != false){
		$ecommerce_hub_custom_css .='#footer{';
			$ecommerce_hub_custom_css .='background: url('.esc_attr($ecommerce_hub_footer_bg_image).');';
		$ecommerce_hub_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$ecommerce_hub_feature_image_border_radius = get_theme_mod('ecommerce_hub_feature_image_border_radius');
	if($ecommerce_hub_feature_image_border_radius != false){
		$ecommerce_hub_custom_css .='.blog-sec img{';
			$ecommerce_hub_custom_css .='border-radius: '.esc_attr($ecommerce_hub_feature_image_border_radius).'px;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_feature_image_shadow = get_theme_mod('ecommerce_hub_feature_image_shadow');
	if($ecommerce_hub_feature_image_shadow != false){
		$ecommerce_hub_custom_css .='.blog-sec img{';
			$ecommerce_hub_custom_css .='box-shadow: '.esc_attr($ecommerce_hub_feature_image_shadow).'px '.esc_attr($ecommerce_hub_feature_image_shadow).'px '.esc_attr($ecommerce_hub_feature_image_shadow).'px #aaa;';
		$ecommerce_hub_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$ecommerce_hub_top_sticky_header_padding = get_theme_mod('ecommerce_hub_top_sticky_header_padding');
	$ecommerce_hub_bottom_sticky_header_padding = get_theme_mod('ecommerce_hub_bottom_sticky_header_padding');
	$ecommerce_hub_custom_css .=' .fixed-header{';
		$ecommerce_hub_custom_css .=' padding-top: '.esc_attr($ecommerce_hub_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($ecommerce_hub_bottom_sticky_header_padding).'px';
	$ecommerce_hub_custom_css .='}';

	// featured image dimention
	$ecommerce_hub_blog_image_dimension = get_theme_mod('ecommerce_hub_blog_image_dimension', 'default');
	$ecommerce_hub_feature_image_custom_width = get_theme_mod('ecommerce_hub_feature_image_custom_width',250);
	$ecommerce_hub_feature_image_custom_height = get_theme_mod('ecommerce_hub_feature_image_custom_height',250);
	if($ecommerce_hub_blog_image_dimension == 'custom'){
		$ecommerce_hub_custom_css .='.blog-sec img{';
			$ecommerce_hub_custom_css .='width: '.esc_attr($ecommerce_hub_feature_image_custom_width).'px; height: '.esc_attr($ecommerce_hub_feature_image_custom_height).'px;';
		$ecommerce_hub_custom_css .='}';
	}

	/*------ Related products ---------*/
	$ecommerce_hub_related_products = get_theme_mod('ecommerce_hub_single_related_products',true);
	if($ecommerce_hub_related_products == false){
		$ecommerce_hub_custom_css .=' .related.products{';
			$ecommerce_hub_custom_css .='display: none;';
		$ecommerce_hub_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$ecommerce_hub_menu_font_size = get_theme_mod('ecommerce_hub_menu_font_size',14);
	if($ecommerce_hub_menu_font_size != false){
		$ecommerce_hub_custom_css .='.nav-menu li a{';
			$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_menu_font_size).'px;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_menu_font_weight = get_theme_mod('ecommerce_hub_menu_font_weight');
	$ecommerce_hub_custom_css .='.nav-menu li a{';
		$ecommerce_hub_custom_css .='font-weight: '.esc_attr($ecommerce_hub_menu_font_weight).';';
	$ecommerce_hub_custom_css .='}';

	$ecommerce_hub_menu_case = get_theme_mod('ecommerce_hub_menu_case', 'capitalize');
	if($ecommerce_hub_menu_case == 'uppercase' ){
		$ecommerce_hub_custom_css .='.nav-menu li a{';
			$ecommerce_hub_custom_css .=' text-transform: uppercase;';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_menu_case == 'capitalize' ){
		$ecommerce_hub_custom_css .='.nav-menu li a{';
			$ecommerce_hub_custom_css .=' text-transform: capitalize;';
		$ecommerce_hub_custom_css .='}';
	}

	// Social Icons Font Size
	$ecommerce_hub_social_icons_font_size = get_theme_mod('ecommerce_hub_social_icons_font_size', '12');
	$ecommerce_hub_custom_css .='.social-media i{';
		$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_social_icons_font_size).'px;';
	$ecommerce_hub_custom_css .='}';

	// Featured image header
	$header_image_url = ecommerce_hub_banner_image( $image_url = '' );
	$ecommerce_hub_custom_css .='#page-site-header{';
		$ecommerce_hub_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$ecommerce_hub_custom_css .='}';

	$ecommerce_hub_post_featured_image = get_theme_mod('ecommerce_hub_post_featured_image', 'in-content');
	if($ecommerce_hub_post_featured_image == 'banner' ){
		$ecommerce_hub_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img, .page .title-box{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='.page-template-custom-front-page #page-site-header{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$ecommerce_hub_shop_page_navigation = get_theme_mod('ecommerce_hub_shop_page_navigation',true);
	if ($ecommerce_hub_shop_page_navigation == false) {
		$ecommerce_hub_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$ecommerce_hub_custom_css .='display: none;';
		$ecommerce_hub_custom_css .='}';
	}

	// Slider Button color
	$ecommerce_hub_slider_btn_color = get_theme_mod('ecommerce_hub_slider_btn_color','#1b1b1b');
	$ecommerce_hub_custom_css .='.more-btn a{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_slider_btn_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// Slider button bg color
	$ecommerce_hub_slider_btn_bg_color = get_theme_mod('ecommerce_hub_slider_btn_bg_color');
	$ecommerce_hub_custom_css .='.more-btn a{';
			$ecommerce_hub_custom_css .='background: '.esc_attr($ecommerce_hub_slider_btn_bg_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// Slider button lable hover color
	$ecommerce_hub_slider_btn_lable_hover_color = get_theme_mod('ecommerce_hub_slider_btn_lable_hover_color','#1b1b1b');
	$ecommerce_hub_custom_css .='.more-btn a:hover{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_slider_btn_lable_hover_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// Slider button bg hover color
	$ecommerce_hub_slider_btn_bg_hover_color = get_theme_mod('ecommerce_hub_slider_btn_bg_hover_color','#41d5cf');
	$ecommerce_hub_custom_css .='.more-btn a:hover{';
			$ecommerce_hub_custom_css .='background: '.esc_attr($ecommerce_hub_slider_btn_bg_hover_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	/*---- Slider Height ------*/
	$ecommerce_hub_slider_height = get_theme_mod('ecommerce_hub_slider_height');
	$ecommerce_hub_custom_css .='#slider img{';
		$ecommerce_hub_custom_css .='height: '.esc_attr($ecommerce_hub_slider_height).'px;';
	$ecommerce_hub_custom_css .='}';
	$ecommerce_hub_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$ecommerce_hub_custom_css .='height: auto;';
	$ecommerce_hub_custom_css .='} }';

	/*----- Blog Post display type css ------*/
	$ecommerce_hub_blog_post_display_type = get_theme_mod('ecommerce_hub_blog_post_display_type', 'blocks');
	if($ecommerce_hub_blog_post_display_type == 'without blocks' ){
		$ecommerce_hub_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$ecommerce_hub_custom_css .='border: 0; box-shadow: none;';
		$ecommerce_hub_custom_css .='}';
	}

	/*---------- Responsive style ---------*/
	$ecommerce_hub_toggle_button_bg_color_settings = get_theme_mod('ecommerce_hub_toggle_button_bg_color_settings');
	$ecommerce_hub_custom_css .='.toggle-menu {';
	$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_toggle_button_bg_color_settings).';';
	$ecommerce_hub_custom_css .='} ';
	
	if (get_theme_mod('ecommerce_hub_hide_topbar_responsive',true) == true && get_theme_mod('ecommerce_hub_top_header',true) == false) {
		$ecommerce_hub_custom_css .='.social-icon{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='} ';
	}

	if (get_theme_mod('ecommerce_hub_sticky_header_responsive') == false) {
		$ecommerce_hub_custom_css .='@media screen and (max-width: 575px){
			.sticky{';
			$ecommerce_hub_custom_css .=' position: static;';
		$ecommerce_hub_custom_css .='} }';
	}
	
	if (get_theme_mod('ecommerce_hub_hide_topbar_responsive',true) == false) {
		$ecommerce_hub_custom_css .='@media screen and (max-width: 575px){
			.social-icon{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='} }';
	} else if(get_theme_mod('ecommerce_hub_hide_topbar_responsive',true) == true){
		$ecommerce_hub_custom_css .='@media screen and (max-width: 575px){
			.social-icon{';
			$ecommerce_hub_custom_css .=' display: block;';
		$ecommerce_hub_custom_css .='} }';
	}

	$ecommerce_hub_resp_sidebar = get_theme_mod( 'ecommerce_hub_sidebar_hide_show',true);
    if($ecommerce_hub_resp_sidebar == true){
    	$ecommerce_hub_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_hub_custom_css .='#sidebar{';
			$ecommerce_hub_custom_css .='display:block;';
		$ecommerce_hub_custom_css .='} }';
	}else if($ecommerce_hub_resp_sidebar == false){
		$ecommerce_hub_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_hub_custom_css .='#sidebar{';
			$ecommerce_hub_custom_css .='display:none;';
		$ecommerce_hub_custom_css .='} }';
	}

	// Metabox Seperator
	$ecommerce_hub_metabox_seperator = get_theme_mod('ecommerce_hub_metabox_seperator','|');
	if($ecommerce_hub_metabox_seperator != '' ){
		$ecommerce_hub_custom_css .='.blog-sec .post-info span:after{';
			$ecommerce_hub_custom_css .=' content: "'.esc_attr($ecommerce_hub_metabox_seperator).'"; padding-left:10px;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='.blog-sec .post-info span:last-child:after{';
			$ecommerce_hub_custom_css .=' content: none;';
		$ecommerce_hub_custom_css .='}';
	}

	// Metabox Seperator Single post
	$ecommerce_hub_single_post_metabox_seperator = get_theme_mod('ecommerce_hub_single_post_metabox_seperator','|');
	if($ecommerce_hub_single_post_metabox_seperator != '' ){
		$ecommerce_hub_custom_css .='.post-info span:after{';
			$ecommerce_hub_custom_css .=' content: "'.esc_attr($ecommerce_hub_single_post_metabox_seperator).'"; padding-left:10px;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='.post-info span:last-child:after{';
			$ecommerce_hub_custom_css .=' content: none;';
		$ecommerce_hub_custom_css .='}';
	}

	// Metabox Seperator Grid post
	$ecommerce_hub_grid_post_metabox_seperator = get_theme_mod('ecommerce_hub_grid_post_metabox_seperator','|');
	if($ecommerce_hub_grid_post_metabox_seperator != '' ){
		$ecommerce_hub_custom_css .='.grid-post-info span:after{';
			$ecommerce_hub_custom_css .=' content: "'.esc_attr($ecommerce_hub_grid_post_metabox_seperator).'"; padding-left:10px;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='.grid-post-info span:last-child:after{';
			$ecommerce_hub_custom_css .=' content: none;';
		$ecommerce_hub_custom_css .='}';
	}

	// Site title Font Size
	$ecommerce_hub_site_title_font_size = get_theme_mod('ecommerce_hub_site_title_font_size', '25');
	$ecommerce_hub_custom_css .='.logo h1, .logo p.site-title{';
		$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_site_title_font_size).'px;';
	$ecommerce_hub_custom_css .='}';

	// Site tagline Font Size
	$ecommerce_hub_site_tagline_font_size = get_theme_mod('ecommerce_hub_site_tagline_font_size', '14');
	$ecommerce_hub_custom_css .='.logo p.site-description{';
		$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_site_tagline_font_size).'px;';
	$ecommerce_hub_custom_css .='}';

	/*---- Slider Content Position -----*/
	$ecommerce_hub_top_position = get_theme_mod('ecommerce_hub_slider_top_position');
	$ecommerce_hub_bottom_position = get_theme_mod('ecommerce_hub_slider_bottom_position');
	$ecommerce_hub_left_position = get_theme_mod('ecommerce_hub_slider_left_position');
	$ecommerce_hub_right_position = get_theme_mod('ecommerce_hub_slider_right_position');
	if($ecommerce_hub_top_position != false || $ecommerce_hub_bottom_position != false || $ecommerce_hub_left_position != false || $ecommerce_hub_right_position != false){
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
			$ecommerce_hub_custom_css .='top: '.esc_attr($ecommerce_hub_top_position).'%; bottom: '.esc_attr($ecommerce_hub_bottom_position).'%; left: '.esc_attr($ecommerce_hub_left_position).'%; right: '.esc_attr($ecommerce_hub_right_position).'%;';
		$ecommerce_hub_custom_css .='}';
	}

	// responsive settings
	if (get_theme_mod('ecommerce_hub_preloader_responsive',false) == true && get_theme_mod('ecommerce_hub_preloader',false) == false) {
		$ecommerce_hub_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$ecommerce_hub_custom_css .=' visibility: hidden;';
		$ecommerce_hub_custom_css .='} }';
	}
	if (get_theme_mod('ecommerce_hub_preloader_responsive',false) == false) {
		$ecommerce_hub_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$ecommerce_hub_custom_css .=' visibility: hidden;';
		$ecommerce_hub_custom_css .='} }';
	}

	// scroll to top
	$ecommerce_hub_scroll = get_theme_mod( 'ecommerce_hub_backtotop_responsive',true);
	if (get_theme_mod('ecommerce_hub_backtotop_responsive',true) == true && get_theme_mod('ecommerce_hub_hide_scroll',true) == false) {
    	$ecommerce_hub_custom_css .='.show-back-to-top{';
			$ecommerce_hub_custom_css .='visibility: hidden !important;';
		$ecommerce_hub_custom_css .='} ';
	}
    if($ecommerce_hub_scroll == true){
    	$ecommerce_hub_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_hub_custom_css .='.show-back-to-top{';
			$ecommerce_hub_custom_css .='visibility: visible !important;';
		$ecommerce_hub_custom_css .='} }';
	}else if($ecommerce_hub_scroll == false){
		$ecommerce_hub_custom_css .='@media screen and (max-width:575px) {';
		$ecommerce_hub_custom_css .='.show-back-to-top{';
			$ecommerce_hub_custom_css .='visibility: hidden !important;';
		$ecommerce_hub_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$ecommerce_hub_copyright_bg_color = get_theme_mod('ecommerce_hub_copyright_bg_color');
	if($ecommerce_hub_copyright_bg_color != false){
		$ecommerce_hub_custom_css .='.inner{';
			$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_copyright_bg_color).';';
		$ecommerce_hub_custom_css .='}';
	}

	// site logo padding 
	$ecommerce_hub_logo_spacing = get_theme_mod('ecommerce_hub_logo_spacing', '');
	$ecommerce_hub_custom_css .='.logo{';
	$ecommerce_hub_custom_css .='padding: '.esc_attr($ecommerce_hub_logo_spacing).'px !important;';
	$ecommerce_hub_custom_css .='}';

	// site title color
	$ecommerce_hub_site_title_text_color = get_theme_mod('ecommerce_hub_site_title_text_color');
	$ecommerce_hub_custom_css .='.logo h1 a, .logo p.site-title a{';
		$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_site_title_text_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// site tagline color
	$ecommerce_hub_site_tagline_text_color = get_theme_mod('ecommerce_hub_site_tagline_text_color');
	$ecommerce_hub_custom_css .='.logo p.site-description{';
		$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_site_tagline_text_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// responsive slider
	if (get_theme_mod('ecommerce_hub_slider_responsive',true) == true && get_theme_mod('ecommerce_hub_slider_hide',false) == false) {
		$ecommerce_hub_custom_css .='@media screen and (min-width: 575px){
			#slider{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='} }';
	}
	if (get_theme_mod('ecommerce_hub_slider_responsive',true) == false) {
		$ecommerce_hub_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='} }';
	}

	// slider button
	if (get_theme_mod('ecommerce_hub_slider_button_responsive',true) == true && get_theme_mod('ecommerce_hub_slider_button',true) == false) {
		$ecommerce_hub_custom_css .='@media screen and (min-width: 575px){
			.more-btn{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='} }';
	}
	if (get_theme_mod('ecommerce_hub_slider_button_responsive',true) == false) {
		$ecommerce_hub_custom_css .='@media screen and (max-width: 575px){
			.more-btn{';
			$ecommerce_hub_custom_css .=' display: none;';
		$ecommerce_hub_custom_css .='} }';
	}

	// menu padding
	$ecommerce_hub_menu_padding = get_theme_mod('ecommerce_hub_menu_padding',20);
	$ecommerce_hub_custom_css .='.nav-menu ul li a, .sf-arrows ul .sf-with-ul, .sf-arrows .sf-with-ul{';
		$ecommerce_hub_custom_css .='padding: '.esc_attr($ecommerce_hub_menu_padding).'px;';
	$ecommerce_hub_custom_css .='}';

	// site logo margin 
	$ecommerce_hub_logo_margin = get_theme_mod('ecommerce_hub_logo_margin', '');
	$ecommerce_hub_custom_css .='.logo{';
	$ecommerce_hub_custom_css .='margin: '.esc_attr($ecommerce_hub_logo_margin).'px !important;';
	$ecommerce_hub_custom_css .='}';

	// menu color
	$ecommerce_hub_menu_color = get_theme_mod('ecommerce_hub_menu_color');
	$ecommerce_hub_custom_css .='.nav-menu a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_menu_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// menu hover color
	$ecommerce_hub_menu_hover_color = get_theme_mod('ecommerce_hub_menu_hover_color');
	$ecommerce_hub_custom_css .='.nav-menu a:hover, .nav-menu ul li a:hover{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_menu_hover_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// Submenu color
	$ecommerce_hub_submenu_menu_color = get_theme_mod('ecommerce_hub_submenu_menu_color');
	$ecommerce_hub_custom_css .='.nav-menu ul.sub-menu a, .nav-menu ul.sub-menu li a,.nav-menu ul.children a, .nav-menu ul.children li a{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_submenu_menu_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// submenu hover color
	$ecommerce_hub_submenu_hover_color = get_theme_mod('ecommerce_hub_submenu_hover_color');
	$ecommerce_hub_custom_css .='.nav-menu ul.sub-menu a:hover, .nav-menu ul.sub-menu li a:hover,.nav-menu ul.children a:hover, .nav-menu ul.children li a:hover{';
			$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_submenu_hover_color).' !important;';
	$ecommerce_hub_custom_css .='}';

	// Breadcrumb color option
	$ecommerce_hub_breadcrumb_color = get_theme_mod('ecommerce_hub_breadcrumb_color');
	$ecommerce_hub_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_breadcrumb_color).'!important;';
	$ecommerce_hub_custom_css .='}';

	// Breadcrumb bg color option
	$ecommerce_hub_breadcrumb_background_color = get_theme_mod('ecommerce_hub_breadcrumb_background_color');
	$ecommerce_hub_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_breadcrumb_background_color).'!important;';
	$ecommerce_hub_custom_css .='}';

	// Breadcrumb hover color option
	$ecommerce_hub_breadcrumb_hover_color = get_theme_mod('ecommerce_hub_breadcrumb_hover_color');
	$ecommerce_hub_custom_css .='.bradcrumbs a:hover{';
		$ecommerce_hub_custom_css .='color: '.esc_attr($ecommerce_hub_breadcrumb_hover_color).'!important;';
	$ecommerce_hub_custom_css .='}';

	// Breadcrumb hover bg color option
	$ecommerce_hub_breadcrumb_hover_bg_color = get_theme_mod('ecommerce_hub_breadcrumb_hover_bg_color');
	$ecommerce_hub_custom_css .='.bradcrumbs a:hover{';
		$ecommerce_hub_custom_css .='background-color: '.esc_attr($ecommerce_hub_breadcrumb_hover_bg_color).'!important;';
	$ecommerce_hub_custom_css .='}';

	// Single post image border radious
	$ecommerce_hub_single_post_img_border_radius = get_theme_mod('ecommerce_hub_single_post_img_border_radius', 0);
	$ecommerce_hub_custom_css .='.feature-box img{';
		$ecommerce_hub_custom_css .='border-radius: '.esc_attr($ecommerce_hub_single_post_img_border_radius).'px;';
	$ecommerce_hub_custom_css .='}';

	// Single post image box shadow
	$ecommerce_hub_single_post_img_box_shadow = get_theme_mod('ecommerce_hub_single_post_img_box_shadow',0);
	$ecommerce_hub_custom_css .='.feature-box img{';
		$ecommerce_hub_custom_css .='box-shadow: '.esc_attr($ecommerce_hub_single_post_img_box_shadow).'px '.esc_attr($ecommerce_hub_single_post_img_box_shadow).'px '.esc_attr($ecommerce_hub_single_post_img_box_shadow).'px #ccc;';
	$ecommerce_hub_custom_css .='}';

		// Button Font Size
	$ecommerce_hub_button_font_size = get_theme_mod('ecommerce_hub_button_font_size', '16');
	$ecommerce_hub_custom_css .='.blogbtn a{';
		$ecommerce_hub_custom_css .='font-size: '.esc_attr($ecommerce_hub_button_font_size).'px;';
	$ecommerce_hub_custom_css .='}';