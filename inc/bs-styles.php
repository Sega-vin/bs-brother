<?php

function bs_brother_scripts() {
	wp_enqueue_style( 'bs-brother-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-tooltipster-style', get_template_directory_uri().'/site/assets/libs/tooltipster/tooltipster.main.min.css' );
	wp_enqueue_style( 'bs-my-style', get_template_directory_uri().'/site/assets/css/my.css' );

	wp_enqueue_script( 'bs-brother-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bs-brother-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bs_brother_scripts' );
