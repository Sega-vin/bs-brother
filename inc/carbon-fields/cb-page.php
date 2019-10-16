<?php

if( ! defined('ABSPATH') ) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_blocks_link_options' );
function crb_blocks_link_options() {
	Container::make( 'post_meta', __( 'Block title and short text' ) )
		->where( 'post_id', '=', 45 )
		->or_where( 'post_id', '=', 49 )
		->or_where( 'post_term', '=', array(
			'field' => 'slug',
			'value' => 'about-brother',
			'taxonomy' => 'category',
		) )
		->add_fields(  array(
			Field::make( 'text', 'crb_block_title_ro', __( 'crb_block_title_ro' ) )
			->set_width(30),
			Field::make( 'text', 'crb_block_title_ru', __( 'crb_block_title_ru' ) )
			->set_width(30),
			Field::make( 'text', 'crb_block_title_en', __( 'crb_block_title_en' ) )
			->set_width(30),

			Field::make( 'text', 'crb_block_subtitle_ro', __( 'crb_block_subtitle_ro' ) )
			     ->set_width(30),
			Field::make( 'text', 'crb_block_subtitle_ru', __( 'crb_block_subtitle_ru' ) )
			     ->set_width(30),
			Field::make( 'text', 'crb_block_subtitle_en', __( 'crb_block_subtitle_en' ) )
			     ->set_width(30),

			Field::make( 'textarea', 'crb_block_short_text_ro', __( 'crb_block_short_text_ro' ) )
			     ->set_width(30),
			Field::make( 'textarea', 'crb_block_short_text_ru', __( 'crb_block_short_text_ru' ) )
			     ->set_width(30),
			Field::make( 'textarea', 'crb_block_short_text_en', __( 'crb_block_short_text_en' ) )
			     ->set_width(30),
		));
}
