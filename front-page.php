<?php
/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>
<div class="slider-wrap">
    <div class="slider-buttons">
        <div class="slider-left">
            <svg class="right-arrow">
                <use xlink:href="#right-arrow"></use>
            </svg>
        </div>
        <div class="slider-right">
            <svg class="right-arrow">
                <use xlink:href="#right-arrow"></use>
            </svg>
        </div>
    </div>
    <div class="slider" id="js-slider">
		<?php $slider = carbon_get_theme_option( 'crb_slider' ); ?>
		<?php foreach ( $slider as $slide ): ?>
            <a class="slider__item" href="<?php echo $slide['link']; ?>">
                <img src="<?php echo $slide['image']; ?>">
            </a>
		<?php endforeach; ?>
    </div>
</div>
<div class="blocks">
    <a class="blocks__item" href="<?php echo get_page_link(45); ?>">
		<?php $page_sewing = new WP_Query( [
			'page_id' => 45
		] ); ?>
		<?php if ( $page_sewing->have_posts() ): ?>
			<?php $page_sewing->the_post(); ?>
            <div class="blocks__image-bg"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/1.jpg')"></div>
            <div class="blocks__content">
                <header class="blocks__content-header">
                    <img class="blocks__image_show"
                         src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                    <img class="blocks__image_hover"
                         src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                    <div class="blocsk__titles">
                        <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta( 'crb_block_title' . get_lang() ); ?></h4>
                        <h3 class="blocks__title"><?php echo carbon_get_the_post_meta( 'crb_block_subtitle' . get_lang() ); ?></h3>
                    </div>
                </header>
                <div class="blocks__text"><?php echo carbon_get_the_post_meta( 'crb_block_short_text' . get_lang() ); ?></div>
            </div>

			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </a>
    <a class="blocks__item" href="<?php echo get_page_link(49); ?>">
		<?php $page_garment = new WP_Query( [
			'page_id' => 49
		] ); ?>
		<?php if ( $page_garment->have_posts() ): ?>
			<?php $page_garment->the_post(); ?>
            <div class="blocks__image-bg"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/2.jpg')"></div>
            <div class="blocks__content">
                <header class="blocks__content-header">
                    <img class="blocks__image_show"
                         src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                    <img
                            class="blocks__image_hover"
                            src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                    <div class="blocsk__titles">
                        <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta( 'crb_block_title' . get_lang() ); ?></h4>
                        <h3 class="blocks__title"><?php echo carbon_get_the_post_meta( 'crb_block_subtitle' . get_lang() ); ?></h3>
                    </div>
                </header>
                <div class="blocks__text"><?php echo carbon_get_the_post_meta( 'crb_block_short_text' . get_lang() ); ?></div>
            </div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

    </a>
    <a class="blocks__item" href="<?php echo get_page_link(55); ?>">
		<?php $newsletter = new WP_Query( [
			'p' => 55
		] ); ?>
		<?php if ( $newsletter->have_posts() ): ?>
			<?php $newsletter->the_post(); ?>
            <div class="blocks__image-bg"
                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/3.jpg')"></div>
            <div class="blocks__content">
                <header class="blocks__content-header">
                    <img class="blocks__image_show"
                         src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow.png">
                    <img
                            class="blocks__image_hover"
                            src="<?php echo get_template_directory_uri(); ?>/site/assets/i/blocks/block-arrow-hover.png">
                    <div class="blocsk__titles">
                        <h4 class="blocks__brand-title"><?php echo carbon_get_the_post_meta( 'crb_block_title' . get_lang() ); ?></h4>
                        <h3 class="blocks__title"><?php echo carbon_get_the_post_meta( 'crb_block_subtitle' . get_lang() ); ?></h3>
                    </div>
                </header>
                <div class="blocks__text"><?php echo carbon_get_the_post_meta( 'crb_block_short_text' . get_lang() ); ?></div>
            </div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
    </a>
</div>
<div class="big-links">
    <?php $links_block = carbon_get_theme_option('crb_link_block'); ?>
    <?php foreach($links_block as $link): ?>
        <a class="big-links__item" href="<?php echo get_page_link($link['id']); ?>">
            <img src="<?php echo $link['image']; ?>" alt="">
        </a>
    <?php endforeach; ?>
</div>
<div class="events">
    <div class="events__line"></div>
    <div class="events__body">
        <header class="events__header">
            <a class="tooltip events__link" title="X-Fair Wien"
               href="https://www.brother-ism.com/about-brother/events.html">Events
            </a>
        </header>
        <div class="events__content">
            <div class="events__item">
                <a class="tooltip events__img" title="X-Fair Wien"
                   href="https://www.brother-ism.com/about-brother/events/article/x-fair-wien.html">
                    <img
                            src="<?php echo get_template_directory_uri(); ?>/site/assets/i/events/1.jpg" alt="">
                </a>
                <div class="events__text">
                    <header class="events__item-header">
                        <div class="events__time">08.10.2019 - 10.10.2019</div>
                        <h4 class="events__title">
                            <a class="tooltip" title="X-Fair Wien"
                               href="https://www.brother-ism.com/about-brother/events/article/x-fair-wien.html">X-Fair
                                Wien
                            </a>
                        </h4>
                    </header>
                    <div class="events__text">X-Fair is the international Print & Crossmedia Show for Austria and
                        CEE....
                        <a title="X-Fair Wien" class="tooltip"
                           href="https://www.brother-ism.com/about-brother/events/article/x-fair-wien.html">Read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="events__item">
                <a class="tooltip events__img" title="Viscom Italia 2019"
                   href="https://www.brother-ism.com/about-brother/events/article/viscom-italia-2019.html">
                    <img
                            src="<?php echo get_template_directory_uri(); ?>/site/assets/i/events/2.jpg" alt="">
                </a>
                <div class="events__text">
                    <header class="events__item-header">
                        <div class="events__time">08.10.2019 - 10.10.2019</div>
                        <h4 class="events__title">
                            <a class="tooltip" title="Viscom Italia 2019"
                               href="https://www.brother-ism.com/about-brother/events/article/viscom-italia-2019.html">
                                Viscom Italia 2019
                            </a>
                        </h4>
                    </header>
                    <div class="events__text">Viscom Italia is here to best meet all your needs, actively listen to
                        your....
                        <a title="Viscom Italia 2019" class="tooltip"
                           href="https://www.brother-ism.com/about-brother/events/article/viscom-italia-2019.html">Read
                            more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="events__line events__line--bottom"></div>
</div>
<?php get_footer(); ?>
