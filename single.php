<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs-brother
 */

get_header();
?>

<?php if ( in_category( 'about-brother' ) ): ?>
    <ul class="breadcrumbs">
        <li>
            <a href="abouot-brothers.html"><?php echo get_the_title(); ?></a>
        </li>
        <li><?php the_title(); ?></li>
    </ul>
    <section class="section grid padding-right">
        <aside class="sidebar">
			<?php wp_nav_menu( [
				'theme_location'  => 'menu-about',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'sidebar__list',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] ); ?>
        </aside>
        <div class="main">
			<?php if ( have_posts() ): ?>
			<?php the_post(); ?>
            <h2 class="section__title"><?php the_title();?></h2>
            <?php the_content(); ?>
        </div>

		<?php endif; ?>
    </section>
<?php endif; ?>

<?php
get_footer();
