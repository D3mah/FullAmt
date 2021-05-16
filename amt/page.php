<?php get_header() ; ?>
<style>
	.bottom-icon a div {
		font-size: 13px!important;
	}
	.c-icon .current_page_item {
		background-color: transparent!important;
	}
	.c-icon .current_page_item a {
		background-color: var(--bg-canvas);
	}
</style>
	<!-- Start c-icon uk-section -->
	<div class="c-icon uk-section">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start uk-grid -->
			<?php 
				wp_nav_menu( array (
					'theme_location'  => 'b-slider',
					'container'       => 'div',
					'container_id' => null,
					'container_class' => 'uk-child-width-1-6@l uk-child-width-1-3@m bottom-icon uk-text-center uk-grid',
					'items_wrap'      => '%3$s',
					'depth'           => 1,
					'walker'        	=> new Amt_Walker
					)
				);
					?>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- Start page -->
	<div class="page">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start breadcrumbs -->
			<div class="breadcrumbs">
				<?php the_breadcrumb(); ?>
			</div>
			<!-- End breadcrumbs -->
			<!-- Start uk-grid -->
			<div uk-grid>
				<!-- Start uk-wdth-2-3@m -->
				<div class="uk-width-2-3@m">
					<!-- Start uk-section -->
					<div class="uk-section">
						<!-- Start help-button -->
						<div class="help-button">
							<div class="uk-grid-collapse uk-child-width-expand@m uk-text-center" uk-grid>
								<div>
									<div class="site-print print">
										<div><span href="#" class="uk-margin-small-right" uk-icon="print"></span>Печать</div>
									</div>
								</div>
								<div>
									<div class="js-copy-btn copy" uk-tooltip="Скопировать ссылку">
									<span class="js-copy-target h-target"><?php echo get_page_link(); ?></span>
										<div><span class="uk-margin-small-right" uk-icon="copy"></span>Скопировать</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End help-button -->
						<!-- Start uk-container -->
						<div class="uk-container p-bottom">
							<!-- Start page_content -->
							<div class="page_content">
							<h2><?php the_title() ?></h2>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="c-page">
									<?php the_content(); ?>
								</div>
							<?php endwhile; ?>
							<?php else: ?>
							<?php endif; ?>
							</div>
							<!-- End page_content -->
						</div>
						<!-- End uk-container -->
					</div>
					<!-- End uk-section -->
				</div>
				<!-- End uk-width-2-3@m -->
				<!-- Start uk-width-expand@m -->
				<div class="uk-width-expand@m">
					<!-- Start uk-section -->
					<div class="uk-section">
						<!-- Start uk-container -->
						<div class="uk-container">
							<!-- Start r-column -->
							<div class="r-column">
								<?php dynamic_sidebar('r-column-top'); ?>
								<?php dynamic_sidebar('r-column-bottom'); ?>
							</div>
							<!-- End r-column -->
						</div>
						<!-- End uk-container -->
					</div>
					<!-- End uk-section -->
				</div>
				<!-- End uk-width-expand@m -->
			</div>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End page -->
<?php get_footer() ; ?>