<form class="uk-search uk-search-large" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input class="uk-search-input" type="text" value="<?php echo (isset($_GET['s']))?$_GET['s']:''; ?>" name="s" id="s" placeholder="Поиск..." autofocus>
</form>
