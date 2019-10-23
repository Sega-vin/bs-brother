<div class="single-garment-content">
	<?php if ( have_posts() ): ?>
		<?php the_post(); ?>
		<?php if ( get_the_ID() == 229 ): ?>
            <div class="single-product__wrap">
				<?php the_content(); ?>
            </div>
		<?php else: ?>
			<?php require_once __DIR__ . '/garment-tabs.php'; ?>
		<?php endif; ?>

	<?php endif; ?>

</div>
