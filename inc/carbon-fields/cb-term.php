<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_sewing_term_options' );
function crb_sewing_term_options() {
	Container::make( 'term_meta', __( 'Term page image' ) )
	         ->where( 'term_taxonomy', '=', 'model' )
	         ->add_fields( array(
		         Field::make( 'image', 'cb_sewing_term_image', __( 'Image' ) )
		              ->set_help_text( '941x346' )
		              ->set_value_type( 'url' )
	         ) );
}
