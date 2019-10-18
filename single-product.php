<?php get_header(); ?>

<div class="slider-wrap">
    <div class="slider" id="js-slider">
		<?php $slider = carbon_get_post_meta( get_the_ID(), 'crb_product_slider' ); ?>
		<?php foreach ( $slider as $slide ): ?>
            <div class="slider__item">
                <img src="<?php echo $slide['image']; ?>">
            </div>
		<?php endforeach; ?>
    </div>
</div>

<ul class="breadcrumbs">
    <li>
        <a href="<?php echo get_page_link( 13 ); ?>"><?php echo get_the_title( 13 ); ?></a>
    </li>
    <li>
        <a href="<?php echo get_page_link( 45 ); ?>"><?php echo get_the_title( 45 ); ?></a>
    </li>
    <li><?php the_title(); ?></li>
</ul>
<section class="section grid padding-right">
    <?php $taxonomy_product = get_the_terms(get_the_ID(), 'model')[0]->slug; ?>

    <?php vardump($taxonomy_product); ?>

    <aside class="sidebar">
		<?php $products = new WP_Query( [
			'post_type'      => 'product',
			'model'          => 'industrial-sewing-machines',
			'orderby'        => 'name',
			'order'          => 'ASC',
			'posts_per_page' => - 1
		] ); ?>
		<?php $post_title = get_the_title(); ?>

        <ul class="sidebar__list no-border products-list">
            <li>
                <a class="active" href="<?php echo get_page_link( 45 ); ?>"><?php echo get_the_title( 45 ); ?></a>
                <ul>
					<?php if ( $products->have_posts() ): ?>
						<?php while ( $products->have_posts() ): ?>
							<?php $products->the_post(); ?>
							<?php if ( get_the_title() === $post_title ) {
								$link_active = 'class="active"';
							} else {
								$link_active = '';
							} ?>

                            <li>
                                <a <?php echo $link_active; ?>
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </ul>
            </li>
            <li>
                <a class="active" href="<?php echo get_page_link( 45 ); ?>"><?php echo get_the_title( 45 ); ?></a>
                <ul>
		            <?php if ( $products->have_posts() ): ?>
			            <?php while ( $products->have_posts() ): ?>
				            <?php $products->the_post(); ?>
				            <?php if ( get_the_title() === $post_title ) {
					            $link_active = 'class="active"';
				            } else {
					            $link_active = '';
				            } ?>

                            <li>
                                <a <?php echo $link_active; ?>
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
			            <?php endwhile; ?>
			            <?php wp_reset_postdata(); ?>
		            <?php endif; ?>
                </ul>
            </li>
        </ul>
    </aside>
    <div class="main single-product">
        <h2 class="section__title"><?php the_title(); ?></h2>

        <div class="single-product__wrap">
            <div class="banner-wrap">
                <div class="banner">
                    <div class="banner__header"><?php echo carbon_get_theme_option( 'crb_single_product_banner_title' . get_lang() ); ?></div>

                    <div class="banner__content">
                        <ul>
							<?php $single_banner = carbon_get_post_meta( get_the_ID(), 'crb_single_product_banner' ); ?>
							<?php foreach ( $single_banner as $item ): ?>
                                <li>
                                    <img src="<?php echo get_template_directory_uri() . '/site/assets/i/pdf_icon.png'; ?>"
                                         alt="">
                                    <a href="<?php echo $item['crb_file']; ?>"
                                       target="_blank"><?php echo $item['name']; ?></a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php $banner_link = carbon_get_post_meta(get_the_ID(), 'crb_product_singel_update_button_link'); ?>
                <?php if($banner_link): ?>
                    <a class="banner-update-link" href="<?php echo $banner_link; ?>"><?php echo carbon_get_theme_option('crb_update_button'.get_lang()); ?></a>
                <?php endif; ?>

            </div>
			<?php if ( have_posts() ): ?>
                <div class="single-product__content">
					<?php the_post(); ?>
					<?php the_content(); ?>
					<?php wp_reset_postdata(); ?>
                </div>
			<?php endif; ?>
        </div>

		<?php $table = carbon_get_post_meta( get_the_ID(), 'crb_product_table' ); ?>

        <div class="table-colorized">
            <table>
				<?php $i = 1;
				foreach ( $table as $column ): ?>
                    <tr>
						<?php if ( $i == 1 ): ?>
							<?php if ( ! empty( $column[ 'td_1' . get_lang() ] ) ): ?>
                                <th><?php echo $column[ 'td_1' . get_lang() ]; ?></th>
							<?php endif; ?>
							<?php if ( ! empty( $column[ 'td_2' . get_lang() ] ) ): ?>
                                <th><?php echo $column[ 'td_2' . get_lang() ]; ?></th>
							<?php endif; ?>
							<?php if ( ! empty( $column[ 'td_3' . get_lang() ] ) ): ?>
                                <th><?php echo $column[ 'td_3' . get_lang() ]; ?></th>
							<?php endif; ?>
							<?php if ( ! empty( $column[ 'td_4' . get_lang() ] ) ): ?>
                                <th><?php echo $column[ 'td_4' . get_lang() ]; ?></th>
							<?php endif; ?>
							<?php if ( ! empty( $column[ 'td_5' . get_lang() ] ) ): ?>
                                <th><?php echo $column[ 'td_5' . get_lang() ]; ?></th>
							<?php endif; ?>
						<?php else: ?>
							<?php if ( ! empty( $column[ 'td_1' . get_lang() ] ) ): ?>
                                <td><?php echo $column[ 'td_1' . get_lang() ]; ?></td>
							<?php endif; ?>

							<?php if ( ! empty( $column[ 'td_2' . get_lang() ] ) ): ?>
                                <td><?php echo $column[ 'td_2' . get_lang() ]; ?></td>
							<?php endif; ?>
							<?php if ( ! empty( $column[ 'td_3' . get_lang() ] ) ): ?>
                                <td><?php echo $column[ 'td_3' . get_lang() ]; ?></td>
							<?php endif; ?>
							<?php if ( ! empty( $column[ 'td_4' . get_lang() ] ) ): ?>
                                <td><?php echo $column[ 'td_4' . get_lang() ]; ?></td>
							<?php endif; ?>
							<?php if ( ! empty( $column[ 'td_5' . get_lang() ] ) ): ?>
                                <td><?php echo $column[ 'td_5' . get_lang() ]; ?></td>
							<?php endif; ?>
						<?php endif; ?>
                    </tr>
					<?php $i ++; endforeach; ?>
            </table>
        </div>
</section>
<?php get_footer(); ?>
