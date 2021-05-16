<!-- Start post -->

<div class="post">

	<!-- Start uk-container -->

	<div class="uk-container">

		<!-- Start breadcrumbs -->

		<div class="breadcrumbs">

			<?php the_breadcrumb(); ?>

		</div>

		<!-- End breadcrumbs -->

	</div>

	<!-- End uk-container -->

	<!-- Start uk-container -->

	<div class="uk-container">

		<!-- Start uk-grid -->

		<div uk-grid>

			<!-- Start uk-width-2-3@m -->

			<div class="uk-width-2-3@m">

				<!-- Start uk-section -->

				<div class="uk-section post-top">

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

					<!-- Start post-l -->

					<div class="post-l">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php if (get_the_post_thumbnail()) { ?>

								<div class="bg-color">

									<div class="uk-background-fixed uk-background-cover uk-background-center-center uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('<?php echo get_the_post_thumbnail_url(); ?>');">

										<p class="post-title"><?php the_title(); ?></p>

										<div class="uk-card-badge-post-date uk-label" uk-tooltip="title: Дата поста; pos: top" title="" aria-expanded="false"><?php echo get_the_date(); ?></div>

										<div class="uk-card-badge-post-views uk-label" uk-tooltip="title: Просмотров; pos: top"><i class="fas fa-eye"> </i><?php the_views(); ?></div>

									</div>

								</div>

								<?php } else { ?>

									<div class="bg-color">

										<div class="uk-background-fixed uk-background-cover uk-background-center-center uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('/wp-content/themes/amt/assets/img/no_photo.png');">

											<p class="post-title"><?php the_title(); ?></p>

											<div class="uk-card-badge-post-date uk-label" uk-tooltip="title: Дата поста; pos: top" title="" aria-expanded="false"><?php echo get_the_date(); ?></div>

											<div class="uk-card-badge-post-views uk-label" uk-tooltip="title: Просмотров; pos: top"><i class="fas fa-eye"> </i><?php the_views(); ?></div>

										</div>

									</div>	

								<?php } ?>

							<div class="post-content">

								<?php the_content();	?>

							</div>

						<?php endwhile; ?>

						<?php else: ?>

						<?php endif; ?>

					</div>

					<!-- End post-l -->

				</div>

				<!-- End uk-section -->	

			</div>

			<!-- End uk-width-2-3@m -->

			<!-- Start uk-width-expand@m -->

			<div class="uk-width-expand@m">

				<!-- Start uk-section -->

				<div class="uk-section post-top">

					<!-- Start r-column -->

					<div class="r-column">

						<?php dynamic_sidebar('r-column-top'); ?>

						<?php dynamic_sidebar('r-column-bottom'); ?>

					</div>

					<!-- End r-column -->

				</div>

				<!-- End uk-section -->

			</div>

			<!-- End uk-width-expand@m -->

		</div>

		<!-- End uk-grid -->

	</div>

	<!-- End uk-container -->

</div>

<!-- End post -->









