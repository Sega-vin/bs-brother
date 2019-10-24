<?php
/**
 * Template Name: Page city
 */
?>
<?php get_header(); ?>
<?php $id = get_the_ID(); ?>

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
			$region_id = 14;
			$term_name = get_term( $region_id, 'categories' )->name;
			$terms     = get_term_children( $region_id, 'categories' );
			?>
            <h2 class="section__title"><?php echo $term_name; ?></h2>

            <ul>
				<?php foreach ( $terms as $term_item ): ?>
                    <li>
                        <a href="<?php echo get_term_link( $term_item ); ?>"><?php echo get_term( $term_item )->name; ?></a>
                    </li>
				<?php endforeach; ?>
            </ul>

        </div>
        <div class="where-to-buy__item">
			<?php
			$region_id = 24;
			$term_name = get_term( $region_id, 'categories' )->name;
			$terms     = get_term_children( $region_id, 'categories' );
			?>
            <h2 class="section__title"><?php echo $term_name; ?></h2>

            <ul>
				<?php foreach ( $terms as $term_item ): ?>
                    <li>
                        <a href="<?php echo get_term_link( $term_item ); ?>"><?php echo get_term( $term_item )->name; ?></a>
                    </li>
				<?php endforeach; ?>
            </ul>

        </div>
        <div class="where-to-buy__item">
			<?php
			$region_id = 28;
			$term_name = get_term( $region_id, 'categories' )->name;
			$terms     = get_term_children( $region_id, 'categories' );
			?>
            <h2 class="section__title"><?php echo $term_name; ?></h2>

            <ul>
				<?php foreach ( $terms as $term_item ): ?>
                    <li>
                        <a href="<?php echo get_term_link( $term_item ); ?>"><?php echo get_term( $term_item )->name; ?></a>
                    </li>
				<?php endforeach; ?>
            </ul>

        </div>
    </div>
</section>
<?php get_footer(); ?>
