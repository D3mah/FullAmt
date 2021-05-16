<?php get_header() ; ?>
<!-- Start uk-container -->
<div class="uk-container">
	<!-- Start uk-section -->
	<div class="uk-section">
		<!-- Start page-404 -->
		<div class="page-404">
		<img src="/wp-content/themes/amt/assets/img/404.png" alt="404">
		 <h2>Страница не найдена</h2>
		 <p>Страница, на которую Вы хотели перейти, не найдена. Возможно, введен некорректный адрес или страница была удалена</p>
		 	<div class="link-404">
			 <a href="<?php echo get_home_url(); ?>">На главную</a>
			</div>
		</div>
		<!-- End page-404 -->
	</div>
	<!-- End-uk-section -->
</div>
<!-- End uk-container -->
<?php get_footer() ; ?>