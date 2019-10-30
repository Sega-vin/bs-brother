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
            <?php $region_id = 14; ?>
            <?php $region_slug = get_term($region_id)->slug; ?>
			<?php
			showCountries($region_id, $machine_type, $region_slug);
			?>
        </div>

        <div class="where-to-buy__item where-to-buy__item--count-1">
		    <?php $region_id = 24; ?>
		    <?php $region_slug = get_term($region_id)->slug; ?>
		    <?php
		    showCountries($region_id, $machine_type, $region_slug);
		    ?>
        </div>

        <div class="where-to-buy__item where-to-buy__item--count-2">
		    <?php $region_id = 28; ?>
		    <?php $region_slug = get_term($region_id)->slug; ?>
		    <?php
		    showCountries($region_id, $machine_type, $region_slug);
		    ?>
        </div>
    </div>
    <footer class="page-city__footer">
        <p><?php echo apply_filters( 'the_content', carbon_get_theme_option( 'crb_where_to_buy_footer' . get_lang() ) ); ?></p>
    </footer>
</section>
<?php get_footer(); ?>
