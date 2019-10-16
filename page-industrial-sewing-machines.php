<?php
/**
 * Template Name: Industrial Sewing Machine
 */
?>
<?php get_header(); ?>

<?php $term_image = carbon_get_term_meta( 2, 'cb_sewing_term_image' ); ?>
<img class="page-image" src="<?php echo $term_image; ?>" alt="">

<ul class="breadcrumbs">
	<?php $products_page = new WP_Query( [ 'page_id' => 13 ] ); ?>
	<?php if ( $products_page->have_posts() ): ?>
		<?php $products_page->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
    <li><?php the_title(); ?></li>
</ul>

<div class="products-items">
    <div class="products-items__block">
		<?php $sewing_pattern_machine_term = get_term( 4 ); ?>
        <h2 class="products-items__header"><?php echo $sewing_pattern_machine_term->name; ?></h2>
        <div class="products-items__grid">
			<?php $sewing_pattern_machine = new WP_Query( [
				'post_type'      => 'product',
				'model'          => 'sewing-pattern-machines',
				'posts_per_page' => - 1
			] ); ?>

			<?php if ( $sewing_pattern_machine->have_posts() ): ?>
				<?php $sewing_pattern_machine->the_post(); ?>
                <div class="products-items__item">
                    <div class="products-items__img"><?php echo kama_thumb_img( 'w=191 &h=146' ); ?></div>
                    <div class="products-items__content">
                        <h3 class="products-items__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="products-items__text"><?php echo carbon_get_the_post_meta('crb_model_short_text'.get_lang()); ?></p>
                        <a class="products-items__link" href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option('crb_more_info'.get_lang()); ?></a>
                    </div>
                </div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
        </div>
    </div>
    <div class="products-items__block">
        <h2 class="products-items__header">Sewing Pattern Machines</h2>
        <div class="products-items__grid">
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
        </div>
    </div>
    <div class="products-items__block">
        <h2 class="products-items__header">Sewing Pattern Machines</h2>
        <div class="products-items__grid">
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable Electronic Pattern Sewer with Cylinder
                        Bed</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
            <div class="products-items__item">
                <div class="products-items__img">
                    <img src="assets/i/sewing-pattern/BAS-311HN_2018.jpg">
                </div>
                <div class="products-items__content">
                    <h3 class="products-items__title">
                        <a href="#">BAS-311HN</a>
                    </h3>
                    <p class="products-items__text">Direct Drive Programmable</p>
                    <a class="products-items__link" href="#">More information</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
