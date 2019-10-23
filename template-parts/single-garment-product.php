<div class="single-garment-content">
	<?php if ( have_posts() ): ?>
		<?php the_post(); ?>

        <div class="tabs" id="js-tabs">
            <div class="tabs__header">
                <div data-tab="tab-1" class="tabs__title active">Overview</div>
                <div data-tab="tab-2" class="tabs__title">Specifications</div>
                <div data-tab="tab-3" class="tabs__title">Optional Accessories</div>
                <div data-tab="tab-4" class="tabs__title">Optional Software</div>
                <div data-tab="tab-5" class="tabs__title">Video</div>
            </div>
            <div class="tabs__content">

				<?php $tabs = carbon_get_the_post_meta( 'crb_product_tabs' ); ?>

				<?php $i = 1;
				foreach ( $tabs as $tab ): ?>
                    <div data-tab="tab-<?php echo $i; ?>" class="tabs__item">
						<?php if ( $tab['crb_radio'] == 'Overview' ): ?>
                            <div class="single-product__wrap">
                                <div class="single-product__content">
									<?php echo apply_filters( 'the_content', $tab[ 'crb_product_overview' . get_lang() ] ); ?>
                                </div>
                                <div class="banner-wrap">
									<?php $single_banner = carbon_get_post_meta( get_the_ID(), 'crb_single_product_banner' ); ?>
									<?php if ( ! empty( $single_banner ) ): ?>
                                        <div class="banner">
                                            <div class="banner__header"><?php echo carbon_get_theme_option( 'crb_single_product_banner_title' . get_lang() ); ?></div>
                                            <div class="banner__content">
                                                <ul>
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
									<?php endif; ?>
									<?php $banner_link = carbon_get_post_meta( get_the_ID(), 'crb_product_singel_update_button_link' ); ?>

									<?php if ( $banner_link ): ?>
                                        <a class="banner-update-link"
                                           href="<?php echo $banner_link; ?>"><?php echo carbon_get_theme_option( 'crb_where_to_buy_button' . get_lang() ); ?></a>
									<?php endif; ?>

                                </div>
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

						<?php endif; ?>
						<?php if ( $tab['crb_radio'] == 'Specifications' ): ?>
							<?php echo apply_filters( 'the_content', $tab[ 'crb_product_specifications' . get_lang() ] ); ?>
						<?php endif; ?>
						<?php if ( $tab['crb_radio'] == 'Accessories' ): ?>
							<?php echo apply_filters( 'the_content', $tab[ 'crb_product_accesories' . get_lang() ] ); ?>
						<?php endif; ?>
						<?php if ( $tab['crb_radio'] == 'Software' ): ?>
                            <div class="blue-text">
								<?php echo apply_filters( 'the_content', $tab[ 'crb_product_software' . get_lang() ] ); ?>
                            </div>
						<?php endif; ?>
						<?php if ( $tab['crb_radio'] == 'Video' ): ?>
							<?php echo apply_filters( 'the_content', $tab[ 'crb_product_video' . get_lang() ] ); ?>
						<?php endif; ?>
						<?php if ( $tab['crb_radio'] == 'Documents' ): ?>
							<?php echo apply_filters( 'the_content', $tab[ 'crb_product_documents' . get_lang() ] ); ?>
						<?php endif; ?>
                    </div>
					<?php $i ++; endforeach; ?>
            </div>
        </div>


	<?php endif; ?>

</div>
