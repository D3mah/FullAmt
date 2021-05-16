<?php get_header() ; ?>
	<!-- Start category -->
	<div class="category">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start uk-grid -->
			<div uk-grid>
				<!-- Start uk-width-1-1 -->
				<div class="uk-width-1-1">
					<!-- Start uk-section post-top -->
					<div class="uk-section post-top">

						<div uk-filter="target: .js-filter">
							<ul class="uk-tab category-tab">
								<li uk-filter-control="[data-style='01']"><a href="#">Январь</a></li>
								<li uk-filter-control="[data-style='02']"><a href="#">Февраль</a></li>
								<li uk-filter-control="[data-style='03']"><a href="#">Март</a></li>
								<li uk-filter-control="[data-style='04']"><a href="#">Апрель</a></li>
								<li uk-filter-control="[data-style='05']"><a href="#">Май</a></li>
								<li uk-filter-control="[data-style='06']"><a href="#">Июнь</a></li>
								<li uk-filter-control="[data-style='07']"><a href="#">Июль</a></li>
								<li uk-filter-control="[data-style='08']"><a href="#">Август</a></li>
								<li uk-filter-control="[data-style='09']"><a href="#">Сентябрь</a></li>
								<li uk-filter-control="[data-style='10']"><a href="#">Октябрь</a></li>
								<li uk-filter-control="[data-style='11']"><a href="#">Ноябрь</a></li>
								<li uk-filter-control="[data-style='12']"><a href="#">Декабрь</a></li>
							</ul>

							<div class="js-filter uk-child-width-1-2@m uk-child-width-1-3@l" uk-height-match=".uk-card-body" uk-grid>
								<?php 
									query_posts('&cat=1&order=DESC&posts_per_page=400'); // базовый запрос + свои параметры 
									if (have_posts()) : while (have_posts()) : the_post(); ?>
									<div data-style="<?php echo get_the_date('m'); ?>">
										<a href="<?php the_permalink(); ?>" class="a-imp-news">
											<div class="uk-card uk-card-default uk-card-hover">
												<div class="uk-card-body cardtheme">
													<div class="uk-card-badge uk-label"><?php echo get_the_date(); ?></div>
													<h3 class="uk-card-title title-n"><?php the_title(); ?></h3>
												</div>
											</div>
										</a>
									</div>
								<?php endwhile; ?> 
								<?php wp_reset_query(); ?>
									<?php else : ?>
										<p>Записей нет</p>
									<?php endif; ?>
							</div>
						</div>

					</div>
					<!-- End uk-section post-top -->
				</div>
				<!-- End uk-width-1-1 -->
			</div>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End category -->
<?php get_footer() ; ?>