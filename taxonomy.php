<?php get_header(); ?>

<?php $machine_type = get_query_var('machine_type'); ?>

<ul class="breadcrumbs">
    <li>
        <a href="<?php echo get_page_link( 16 ); ?>"><?php echo get_the_title( 16 ); ?></a>
    </li>

    <li>Industrial Sewing Machines</li>
</ul>
<section class="section section-country"
         style="background-color: #f5f6f8; background-image: url('<?php echo get_template_directory_uri(); ?>/site/assets/i/where_to_buy_background.jpg'); background-repeat: no-repeat;">
    <h2 class="section__title"><?php echo carbon_get_theme_option( 'crb_city_one_text' . get_lang() ); ?></h2>
    <div class="country">

        <h3 class="country__title">A. Liersch GmbH</h3>
        <p class="country__text">Gustav-Adolf-Straße 36 22043 Hamburg Germany</p>
        <div class="country__table">
            <div class="tr">
                <div class="td">Tel:</div>
                <div class="td">
                    <a href="tel:490406695971">+49 (0) 40 6695971</a>
                </div>
            </div>
            <div class="tr">
                <div class="td">Fax:</div>
                <div class="td">
                    <a href="tel:490406695971">+49 (0) 40 6695971</a>
                </div>
            </div>
            <div class="tr">
                <div class="td">Email:</div>
                <div class="td">
                    <a href="mailto:info@liersch.com">info@liersch.com</a>
                </div>
            </div>
            <div class="tr">
                <div class="td">Web:</div>
                <div class="td">
                    <a href="www.Liersch.com">www.Liersch.com</a>
                </div>
            </div>
        </div>
    </div>
    <a class="country__back-link" href="">Back to country selection</a>
</section>
<?php get_footer(); ?>
