<?php
/**
 * Template Name: Page city
 */
?>
<?php get_header(); ?>
<?php
$id           = get_the_ID();
$machine_type = '';

if ( $id === 107 ) {
	$machine_type = 'industrial-sewing-machines';
} elseif ( $id == 112 ) {
	$machine_type = 'industrial-garment-printers';
}
?>


<ul class="breadcrumbs">
    <li>
        <a href="<?php echo get_page_link( 16 ); ?>"><?php echo get_the_title( 16 ); ?></a>
    </li>
    <li><?php echo carbon_get_post_meta( $id, 'crb_where_to_buy_title' . get_lang() ); ?></li>
</ul>
<section class="section section-where-to-buy"
         style="background-image: url('<?php echo get_template_directory_uri() ?>/site/assets/i/where_to_buy_background.jpg'); background-size: cover;">
    <div class="where-to-buy__grid">
        <div class="where-to-buy__item">
			<?php
			$region_id = 14; //регион, европа, африка, ближний восток id
			$term_name = get_term( $region_id, 'categories' )->name; // название региона
			$terms     = get_term_children( $region_id, 'categories' ); // дочерние таксономии региона
			?>

            <h2 class="section__title"><?php echo $term_name; ?></h2>

			<?php $address_posts = new WP_Query( [
				'posts_per_page' => - 1,
				'post_type'      => 'address',
				'categories'     => $machine_type
			] ); ?>

			<?php $countries = []; ?>

            <ul>
				<?php if ( $address_posts->have_posts() ): ?>
					<?php while ( $address_posts->have_posts() ): ?>
						<?php $address_posts->the_post(); ?>

						<?php $terms = get_the_terms( $post->ID, 'categories' ); ?>
						<?php
						foreach ( $terms as $term ) {
							if ( $term->slug === 'industrial-sewing-machines' || $term->slug == 'industrial-garment-printers' ) {
								continue;
							} else {
								$countries[ $term->name ] = $term->term_id;
							}
						}
						?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php
					$unique_data = array_unique( $countries );
					ksort( $unique_data );
					?>
					<?php foreach ( $unique_data as $key => $item ): ?>
						<?php add_query_arg('machine_type', $machine_type); ?>
                        <li>
                            <a href="<?php echo esc_url(add_query_arg('machine_type', $machine_type, get_term_link( $item ))); ?>"><?php echo $key; ?></a>
                        </li>
					<?php endforeach; ?>

				<?php endif; ?>
            </ul>
        </div>
    </div>
    <footer class="page-city__footer">
        <p><?php echo apply_filters( 'the_content', carbon_get_theme_option( 'crb_where_to_buy_footer'.get_lang() ) ); ?></p>
    </footer>
</section>
<?php get_footer(); ?>
