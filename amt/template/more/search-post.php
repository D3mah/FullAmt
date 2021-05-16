<a href="<?php the_permalink(); ?>" class="a-imp-news">
	<div class="uk-card uk-card-default uk-card-hover">
		<div class="uk-card-body searchtheme">
			<div class="uk-card-badge uk-label"><?php echo get_the_date(); ?></div>
			<h3 class="uk-card-title title-n"><?php the_title(); ?></h3>
			<?php echo kama_excerpt( array('maxchar'=>120) ); ?>
		</div>
	</div>
</a>