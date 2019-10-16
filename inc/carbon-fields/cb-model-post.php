<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_model_post_options' );
function crb_model_post_options() {
	Container::make( 'post_meta', __( 'Model short text' ) )
		->or_where( 'post_term', '=', array(
			'field'    => 'slug',
			'value'    => 'industrial-sewing-machines',
			'taxonomy' => 'model',
		) )
		->add_fields( array(
			Field::make( 'textarea', 'crb_model_short_text_ro', __( 'crb_model_short_text_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_ru', __( 'crb_model_short_text_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_en', __( 'crb_model_short_text_en' ) )
		              ->set_width( 30 ),
	         ) );
}
