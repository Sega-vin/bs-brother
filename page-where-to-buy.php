<?php
/**
 * Template Name: Where-to-buy
 */
?>
<?php get_header(); ?>
<section class="section section-where-to-buy"
         style="background-image: url('<?php echo get_template_directory_uri() ?>/site/assets/i/where_to_buy_background.jpg'); background-size: cover;">
    <h2 class="section__title"><?php the_title(); ?></h2>

    <div class="blocks">
	    <?php $industrial_page_where_to_buy = new WP_Query([
		    'page_id' => 107
	    ]); ?>

	    <?php if($industrial_page_where_to_buy->have_posts()): ?>
		    <?php while($industrial_page_where_to_buy->have_posts()): ?>
			    <?php $industrial_page_where_to_buy->the_post(); ?>
                <a class="blocks__item" href="<?php the_permalink(); ?>">
                    <div class="blocks__image-bg" style="background-image: url('<?php echo kama_thumb_src('w=304 &h=290'); ?>')"></div>
                    <div class="blocks__content">
                        <header class="blocks__content-header">
                            <img class="blocks__image_show"
                                 src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                            <img
                                    class="blocks__image_hover"
                                    src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                            <div class="blocsk__titles">
                                <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta('crb_where_to_buy_page_brand_title'.get_lang()); ?></h4>
                                <h3 class="blocks__title"><?php echo carbon_get_the_post_meta('crb_where_to_buy_page_brand_subtitle'.get_lang()); ?></h3>
                            </div>
                        </header>
                        <div class="blocks__text"><?php echo carbon_get_the_post_meta('crb_where_to_buy_page_short_text'.get_lang()); ?></div>
                    </div>
                </a>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
	    <?php endif; ?>

	    <?php $garment_page_where_to_buy = new WP_Query([
		    'page_id' => 112
	    ]); ?>

        <?php if($garment_page_where_to_buy->have_posts()): ?>
        	<?php while($garment_page_where_to_buy->have_posts()): ?>
        		<?php $garment_page_where_to_buy->the_post(); ?>
                <a class="blocks__item" href="<?php the_permalink(); ?>">
                    <div class="blocks__image-bg" style="background-image: url('<?php echo kama_thumb_src('w=304 &h=290'); ?>')"></div>
                    <div class="blocks__content">
                        <header class="blocks__content-header">
                            <img class="blocks__image_show"
                                 src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                            <img
                                    class="blocks__image_hover"
                                    src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                            <div class="blocsk__titles">
                                <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta('crb_where_to_buy_page_brand_title'.get_lang()); ?></h4>
                                <h3 class="blocks__title"><?php echo carbon_get_the_post_meta('crb_where_to_buy_page_brand_subtitle'.get_lang()); ?></h3>
                            </div>
                        </header>
                        <div class="blocks__text"><?php echo carbon_get_the_post_meta('crb_where_to_buy_page_short_text'.get_lang()); ?></div>
                    </div>
                </a>
	        <?php endwhile; ?>
        	<?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </div>
</section>
<?php get_footer(); ?>
