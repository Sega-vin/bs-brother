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

		         Field::make( 'separator', 'crb_product_single_sep_1', __( 'Product slider' ) ),
		         Field::make( 'complex', 'crb_product_slider', __( 'Product slider' ) )
		              ->add_fields( array(
			              Field::make( 'image', 'image', __( 'Image' ) )
			                   ->set_help_text( '940x346' )
			                   ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'separator', 'crb_product_single_sep_3', __( 'Single product banner' ) ),
		         Field::make( 'complex', 'crb_single_product_banner', __( 'Single product banner' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'name', __( 'filename' ) ),
			              Field::make( 'file', 'crb_file', __( 'File' ) )
			                   ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'separator', 'crb_product_single_sep_4', __( 'Button to update' ) ),
		         Field::make( 'text', 'crb_product_singel_update_button_link', __( 'Button to update link' ) ),

		         Field::make( 'separator', 'crb_product_single_sep_2', __( 'Product table' ) ),
		         Field::make( 'complex', 'crb_product_table', __( 'Product table' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'td_1_ro', __( 'td_1_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_1_ru', __( 'td_1_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_1_en', __( 'td_1_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_2_ro', __( 'td_2_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_2_ru', __( 'td_2_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_2_en', __( 'td_2_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_3_ro', __( 'td_3_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_3_ru', __( 'td_3_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_3_en', __( 'td_3_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_4_ro', __( 'td_4_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_4_ru', __( 'td_4_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_4_en', __( 'td_4_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_5_ro', __( 'td_5_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_5_ru', __( 'td_5_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_5_en', __( 'td_5_en' ) )
			                   ->set_width( 30 ),

		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_model_post_garment_options' );
function crb_model_post_garment_options() {
	Container::make( 'post_meta', __( 'Model short text' ) )
	         ->or_where( 'post_term', '=', array(
		         'field'    => 'slug',
		         'value'    => 'industrial-garment-printers',
		         'taxonomy' => 'model',
	         ) )
	         ->add_fields( array(
		         Field::make( 'textarea', 'crb_model_short_text_ro', __( 'crb_model_short_text_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_ru', __( 'crb_model_short_text_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_en', __( 'crb_model_short_text_en' ) )
		              ->set_width( 30 ),

//		         Field::make( 'separator', 'crb_product_single_sep_1', __( 'Product slider' ) ),
//		         Field::make( 'complex', 'crb_product_slider', __( 'Product slider' ) )
//		              ->add_fields( array(
//			              Field::make( 'image', 'image', __( 'Image' ) )
//			                   ->set_help_text( '940x346' )
//			                   ->set_value_type( 'url' )
//		              ) )
//		              ->set_layout( 'tabbed-horizontal' ),
//
//		         Field::make( 'separator', 'crb_product_single_sep_3', __( 'Single product banner' ) ),
//		         Field::make( 'complex', 'crb_single_product_banner', __( 'Single product banner' ) )
//		              ->add_fields( array(
//			              Field::make( 'text', 'name', __( 'filename' ) ),
//			              Field::make( 'file', 'crb_file', __( 'File' ) )
//			                   ->set_value_type( 'url' )
//		              ) )
//		              ->set_layout( 'tabbed-horizontal' ),
//
//		         Field::make( 'separator', 'crb_product_single_sep_4', __( 'Button to update' ) ),
//		         Field::make( 'text', 'crb_product_singel_update_button_link', __( 'Button to update link' ) ),
//
//		         Field::make( 'separator', 'crb_product_single_sep_2', __( 'Product table' ) ),
//		         Field::make( 'complex', 'crb_product_table', __( 'Product table' ) )
//		              ->add_fields( array(
//			              Field::make( 'text', 'td_1_ro', __( 'td_1_ro' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_1_ru', __( 'td_1_ru' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_1_en', __( 'td_1_en' ) )
//			                   ->set_width( 30 ),
//
//			              Field::make( 'text', 'td_2_ro', __( 'td_2_ro' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_2_ru', __( 'td_2_ru' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_2_en', __( 'td_2_en' ) )
//			                   ->set_width( 30 ),
//
//			              Field::make( 'text', 'td_3_ro', __( 'td_3_ro' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_3_ru', __( 'td_3_ru' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_3_en', __( 'td_3_en' ) )
//			                   ->set_width( 30 ),
//
//			              Field::make( 'text', 'td_4_ro', __( 'td_4_ro' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_4_ru', __( 'td_4_ru' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_4_en', __( 'td_4_en' ) )
//			                   ->set_width( 30 ),
//
//			              Field::make( 'text', 'td_5_ro', __( 'td_5_ro' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_5_ru', __( 'td_5_ru' ) )
//			                   ->set_width( 30 ),
//			              Field::make( 'text', 'td_5_en', __( 'td_5_en' ) )
//			                   ->set_width( 30 ),
//
//		              ) )
//		              ->set_layout( 'tabbed-horizontal' ),
	         ) );
}
