<?php get_header() ; ?>
	<!-- Start search-page -->
	<div class="search-page">
		<!-- Start uk-container -->
		<div class="uk-container">
			<!-- Start uk-grid -->
			<div uk-grid>
				<!-- Start uk-width-1-1 -->
				<div class="uk-width-1-1">
					<!-- Start uk-section post-top -->
					<div class="uk-section post-top">
						<!-- Start form-search -->
						<div class="form-search">
							<form class="uk-search uk-navbar" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
								<input class="uk-search-input uk-navbar-left" type="text" value="<?php echo (isset($_GET['s']))?$_GET['s']:''; ?>" name="s" id="s" placeholder="Поиск..." autofocus >
								<input class="uk-navbar-right" type="submit" id="searchsubmit" value="Найти" />
							</form>
						</div>
						<!-- End form-search -->
						<h2>Результаты поиска:</h2>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="a-imp-news">
								<div class="uk-card uk-card-default uk-card-hover">
									<div class="uk-card-body searchtheme">
										<div class="uk-card-badge uk-label"><?php echo get_the_date(); ?></div>
										<h3 class="uk-card-title title-n"><?php the_title(); ?></h3>
										<?php echo kama_excerpt( array('maxchar'=>120) ); ?>
									</div>
								</div>
							</a>
						<?php endwhile; wp_reset_postdata(); ?>
							<?php get_template_part('template/more/loadmore'); ?>
						<?php else: ?>
							<p>Извините, по Вашему запросу ничего не найдено. Пожалуйста, попробуйте снова.</p>
						<?php endif; ?>
					</div>
					<!-- End uk-section post-top -->
				</div>
				<!-- End uk-width-1-1 -->
			</div>
			<!-- End uk-grid -->
		</div>
		<!-- End uk-container -->
	</div>
	<!-- End search-page -->
<?php get_footer() ; ?>