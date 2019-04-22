<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}



if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
	/**
	 * Register Google fonts for Twenty Fifteen.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function twentyfifteen_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		/*
		 * Translators: If there are characters in your language that are not supported
		 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
			$fonts[] = 'Noto Sans:400italic,700italic,400,700';
		}

		/*
		 * Translators: If there are characters in your language that are not supported
		 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Lora font: on or off', 'twentyfifteen' ) ) {
			$fonts[] = 'Lora:400italic,700italic,400,700';
		}

		/*
		 * Translators: If there are characters in your language that are not supported
		 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
			$fonts[] = 'Inconsolata:400,700';
		}

		/*
		 * Translators: To add an additional character subset specific to your language,
		 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

		if ( 'cyrillic' == $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' == $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'devanagari' == $subset ) {
			$subsets .= ',devanagari';
		} elseif ( 'vietnamese' == $subset ) {
			$subsets .= ',vietnamese';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg(
				array(
					'family' => urlencode( implode( '|', $fonts ) ),
					'subset' => urlencode( $subsets ),
				),
				'https://fonts.googleapis.com/css'
			);
		}

		return $fonts_url;
	}
endif;

add_action( 'wp_enqueue_scripts', 'enqueue_child_scripts' );

function enqueue_child_scripts() {
	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/0e3415d4ab.js', array(), '1.0', false );
	wp_enqueue_script( 'nightmode', get_stylesheet_directory_uri()  . '/nightmode.js', array( 'jquery' ), '20190330', true );
}

?>