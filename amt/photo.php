<?php
 /*
 Template Name: Фотогалерея
 */
?>
<?php get_header() ; ?>


<?php
$posts = get_posts( array(
	'numberposts' => 6,
	'post_type'   => 'photo',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
?>
<!-- Start photo-page  -->
<div class="photo-page">
			<!-- Start uk-container -->
			<div class="uk-container">
				<!-- Start uk-grid -->
				<div uk-grid>
					<!-- Start uk-width-1-1 -->
					<div class="uk-width-1-1">
						<!-- Start uk-section post-top -->
						<div class="uk-section post-top">
							<!-- Start photo-block -->
							<div class="photo-block">
								<div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-3@l uk-child-width-1-3@xl uk-grid-match" data-uk-grid>
									<?php foreach( $posts as $post ){
										setup_postdata($post); ?>
   
	 
								
								
								 	<div>
								 		<div class="uk-card uk-card-default uk-card-small">


										<?php if (has_post_thumbnail()) { ?>
										<div class="uk-card-media-top">
											<div class="uk-inline-clip uk-transition-toggle uk-light width-photo">
												<img src="<?php echo get_the_post_thumbnail_url( '' , array(200, 300)); ?>" alt="">
												<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
													<div data-uk-margin class="uk-transition-slide-bottom-small">
														<span uk-icon="plus"></span>
													</div>
												</div>
												<a href="<?php the_permalink(); ?>" class="uk-position-cover"></a>
											</div>
										</div>
										<?php } else { ?>
										<div class="uk-card-media-top">
											<div class="uk-inline-clip uk-transition-toggle uk-light width-photo">
												<img src="/wp-content/themes/amt/assets/img/no_photo.png" alt="">
												<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
													<div data-uk-margin class="uk-transition-slide-bottom-small">
														<span uk-icon="plus"></span>
													</div>
												</div>
												<a href="<?php the_permalink(); ?>" class="uk-position-cover"></a>
											</div>
										</div>
										<?php } ?>
										<div class="uk-card-header">
											<div class="uk-grid-small uk-flex uk-flex-middle uk-grid" data-uk-grid>
												<div class="uk-width-expand">
													<h5 class="uk-margin-remove-bottom"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
													<p class="uk-text-meta uk-margin-remove">Дата: <?php echo get_the_date(); ?></p>
												</div>
											</div>
										</div>
									</div>
								 </div>
								<?php }?>
								</div>
							</div>
							<!-- End photo-block -->
						</div>
						<!-- End uk-section post-top -->
					</div>
					<!-- End uk-width-1-1 -->
				</div>
				<!-- End uk-grid -->
			</div>
			<!-- End uk-container -->
		</div>
	 <!-- End photo-page -->

<?php wp_reset_postdata(); // сброс ?>


<?php get_footer() ; ?>