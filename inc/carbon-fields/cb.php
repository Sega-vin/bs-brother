<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$basic_options_container = Container::make( 'theme_options', __( 'Carbon Fields' ) )
	                                    ->add_tab( __( 'Contacts' ), array(
		                                    Field::make( 'text', 'crb_email', __( 'Email' ) ),
	                                    ) );

	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Blocks' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Header search' ), array(
			Field::make( 'text', 'crb_header_search_europe_title_ro', __( 'crb_header_search_europe_title_ro' ) )
			     ->set_width( 30 ),
			Field::make( 'text', 'crb_header_search_europe_title_ru', __( 'crb_header_search_europe_title_ru' ) )
			     ->set_width( 30 ),
			Field::make( 'text', 'crb_header_search_europe_title_en', __( 'crb_header_search_title_en' ) )
			     ->set_width( 30 ),
			Field::make( 'text', 'crb_header_search_europe_link', __( 'crb_header_search_europe_link' ) ),

			Field::make( 'text', 'crb_header_search_global_title_ro', __( 'crb_header_search_global_title_ro' ) )
			     ->set_width( 30 ),
			Field::make( 'text', 'crb_header_search_global_title_ru', __( 'crb_header_search_global_title_ru' ) )
			     ->set_width( 30 ),
			Field::make( 'text', 'crb_header_search_global_title_en', __( 'crb_header_search_global_title_en' ) )
			     ->set_width( 30 ),
			Field::make( 'text', 'crb_header_search_global_link', __( 'crb_header_search_global_link' ) ),
		) )
	         ->add_tab( __( 'Slider' ), array(
		         Field::make( 'complex', 'crb_slider', __( 'Slider' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'link', __( 'link' ) )
						 ->set_help_text( 'id number' ),
			              Field::make( 'image', 'image', __( 'Image' ) )
			                   ->set_help_text( '304x130' )
			                   ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) )
	         ->
	         add_tab( __( 'Block with links to page' ), array(
		         Field::make( 'complex', 'crb_link_block', __( 'Block with links to page' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'id', __( 'Page id' ) ),
			              Field::make( 'image', 'image', __( 'Image' ) )
			                   ->set_help_text( '941x346' )
			                   ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) );
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../../vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
