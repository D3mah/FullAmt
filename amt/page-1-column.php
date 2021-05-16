<?php
 /*
 Template Name: Страница без колонок
 Template Post Type: page
 */
?>
<?php get_header() ; ?>
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
				<!-- Start uk-wdth-1-1 -->
				<div class="uk-width-1-1">
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
							<!-- End page_contant -->
						</div>
						<!-- End uk-container -->
					</div>
					<!-- End uk-section -->
				</div>
				<!-- End uk-width-1-1 -->
			</div>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End page -->
<?php get_footer() ; ?>