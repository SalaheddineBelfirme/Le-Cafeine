<?php
/*
 *
 * Slider Default
 */
 function retailsy_get_slider_default() {
	return apply_filters(
		'retailsy_get_slider_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/slider1.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/slider-speaker.png',
					'title'           => esc_html__( 'Exclusive offers 30% Off', 'retailsy' ),
					'subtitle'           => esc_html__( 'Hot Trending Collection 2021', 'retailsy' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'button_second'	  =>  esc_html__( 'Add To Cart', 'retailsy' ),
					'link2'	  =>  esc_html__( '#', 'retailsy' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/slider2.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/Iphone.png',
					'title'           => esc_html__( 'Exclusive offers 30% Off', 'retailsy' ),
					'subtitle'           => esc_html__( 'Hot Trending Collection 2022', 'retailsy' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'button_second'	  =>  esc_html__( 'Add To Cart', 'retailsy' ),
					'link2'	  =>  esc_html__( '#', 'retailsy' ),
					"slide_align" => "center", 
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/slider3.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/bass.png',
					'title'           => esc_html__( 'Exclusive offers 30% Off', 'retailsy' ),
					'subtitle'           => esc_html__( 'Hot Trending Collection 2023', 'retailsy' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'button_second'	  =>  esc_html__( 'Add To Cart', 'retailsy' ),
					'link2'	  =>  esc_html__( '#', 'retailsy' ),
					"slide_align" => "right", 
					'id'              => 'customizer_repeater_slider_003',
				)
			)
		)
	);
}




/*
 *
 * Info Default
 */
 function retailsy_get_info_default() {
	return apply_filters(
		'retailsy_get_info_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-truck',
					'title'           => esc_html__( 'Free Delivery $100', 'retailsy' ),
					'text'           => esc_html__( 'For All Orders $100', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'id'              => 'customizer_repeater_info_001',
				),
				array(
					'icon_value'       => 'fa-money',
					'title'           => esc_html__( 'Money Back Guarantee', 'retailsy' ),
					'text'           => esc_html__( 'Money Back', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'id'              => 'customizer_repeater_info_002',
				),
				array(
					'icon_value'       => 'fa-link',
					'title'           => esc_html__( 'Return 15 Days', 'retailsy' ),
					'text'           => esc_html__( 'For Free Return', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'id'              => 'customizer_repeater_info_003',			
				),
				array(
					'icon_value'       => 'fa-users',
					'title'           => esc_html__( '24/7 Support', 'retailsy' ),
					'text'           => esc_html__( 'Online Support', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'id'              => 'customizer_repeater_info_004',		
				),
			)
		)
	);
}



/*
 *
 * Banner Default
 */
 function retailsy_get_banner_default() {
	return apply_filters(
		'retailsy_get_banner_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/shining-cards/vivocard.png',
					'title'           => esc_html__( 'Mobile & Tab', 'retailsy' ),
					'text'         => esc_html__( '25% Discount', 'retailsy' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'id'              => 'customizer_repeater_banner_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/shining-cards/speakercard.png',
					'title'           => esc_html__( 'Digital Speaker', 'retailsy' ),
					'text'         => esc_html__( '45% Discount', 'retailsy' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'id'              => 'customizer_repeater_banner_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/shining-cards/cameracard.png',
					'title'           => esc_html__( 'Digital Camera', 'retailsy' ),
					'text'         => esc_html__( '35% Discount', 'retailsy' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'retailsy' ),
					'link'	  =>  esc_html__( '#', 'retailsy' ),
					'id'              => 'customizer_repeater_banner_003'
				)
			)
		)
	);
}