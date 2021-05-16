<?php
 /*
 Template Name: Шаблон для фотоальбома
 Template Post Type: photo
 */
?>
<?php get_header() ; ?>
	<!-- Start photoalbum -->
	<div class="photoalbum">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start uk-grid -->
			<div uk-grid>
				<!-- Start uk-width-1-1 post-top -->
				<div class="uk-width-1-1 post-top">
					<!-- Start help-button -->
					<div class="help-button">
						<div class="uk-grid-collapse uk-child-width-expand@m uk-text-center" uk-grid>
							<div>
								<div class="site-print print" uk-tooltip="Распечатать страницу">
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
				<!-- End uk-width-1-1 post-top -->
			</div>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End photoalbum -->
<?php get_footer() ; ?>