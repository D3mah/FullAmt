<?php
add_action('wp_enqueue_scripts', 'style'); // Style
add_action('wp_enqueue_scripts', 'scripts'); // Scripts
add_action('wp_footer', 'script'); // Script
add_action('after_setup_theme', 'menu'); // Menu
add_action('widgets_init', 'support'); // Support
add_action('widgets_init', 'sidebars'); // Sidebars
add_action('init', 'register_post_photo'); // New Post type
add_action('admin_head', 'true_post_type_help_tab'); //help
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function support() {
	add_theme_support( 'post-formats', array( 'aside' ) );
	add_post_type_support( 'page', 'post-formats' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'custom-logo');
}
function style() {
	wp_enqueue_style ('normalize', get_template_directory_uri() .'/assets/css/normalize.css');
	wp_enqueue_style ('files', get_template_directory_uri() .'/assets/css/files.css');
	wp_enqueue_style ('fonts', get_template_directory_uri() .'/assets/css/fonts.css');
	wp_enqueue_style ('uikit', get_template_directory_uri() .'/assets/css/uikit.css');
	wp_enqueue_style ('print', get_template_directory_uri() .'/assets/css/print.css');
	wp_enqueue_style ('style', get_stylesheet_uri() );
}
function scripts() {
	wp_enqueue_script ('jqery', get_template_directory_uri() .'/assets/js/jquery-3.5.1.min.js');
	wp_enqueue_script ('fontawesome', 'https://kit.fontawesome.com/8cea7a5a56.js');
	wp_enqueue_script ('uikit', get_template_directory_uri() .'/assets/js/uikit.min.js');
	wp_enqueue_script ('uikit-icon', get_template_directory_uri() .'/assets/js/uikit-icons.min.js');
	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );
	wp_enqueue_script( 'updown', get_stylesheet_directory_uri() . '/assets/js/up-down.js', array('jquery') );
}
function script() {
	wp_enqueue_script ('script', get_template_directory_uri() .'/assets/js/script.js');
}
function menu() {
	register_nav_menu('top','Верхнее горизонтальное меню');
	register_nav_menu('b-slider','Меню под слайдером');
}
function sidebars() {
	register_sidebar( array(
		'name'          => 'Слайдер',
		'id'            => "slider",
		'description'   => 'Блок для слайдера изображений на главной странице сайта. Рекомендуемый плагин/виджет: Smart Slider 3 и выше',
		'before_widget' => null,
		'after_widget'  => null,
		'before_title'  => null,
		'after_title'   => null
	));
	register_sidebar( array(
		'name'          => 'Важная информация',
		'id'            => "imp",
		'description'   => 'Блок важней информации на сайте. Отображается только на главной странице сайта. Если нет, экстренных объявлений, оставить блок пустым. Рекомендуемые виджеты: Текст / html редактор',
		'before_widget' => '<div uk-grid><div class="uk-width@m"><div class="uk-section i-n"><div class="imp-n uk-card uk-card-hover">',
		'after_widget'  => '</div></div></div></div>',
		'before_title'  => '<div class="w-title imp-t">',
		'after_title'   => '</div>'
	));
	register_sidebar( array(
		'name'          => 'Логотипы. Баннеры',
		'id'            => "banners",
		'description'   => 'Блок для слайдера баннеров на главной странице. Стандартный размер 400x150. Рекомендуемый Плагин/Виджет: Logo Slider WP / Текст',
		'before_widget' => null,
		'after_widget'  => null,
		'before_title'  => null,
		'after_title'   => null
	));
	register_sidebar( array(
		'name'          => 'Правая колонка для виджетов',
		'id'            => "r-column-top",
		'description'   => 'Правая колонка сайта',
		'before_widget' => '<div id="%1$s" class="widget uk-card uk-card-default uk-card-hover %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="w-title">',
		'after_title'   => '</div><div class="w-line"></div>'
	));
	register_sidebar( array(
		'name'          => 'Правая колонка для Кнопок',
		'id'            => "r-column-bottom",
		'description'   => 'Правая колонка сайта',
		'before_widget' => '<div id="%1$s" class="aside__button uk-card %2$s">',
		'after_widget'  => '<div class="svg__button"></div></div>',
		'before_title'  => '<div class="w-title">',
		'after_title'   => '</div><div class="w-line"></div>'
	));
	register_sidebar( array(
		'name'          => 'Нижняя левая колонка',
		'id'            => "b-l-column",
		'description'   => 'Нижняя левая колонка сайта',
		'before_widget' => '<div class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f-text text-center">',
		'after_title'   => '</div><div class="w-line"></div>'
	));
	register_sidebar( array(
		'name'          => 'Нижняя вторая колонка',
		'id'            => "b-lc-column",
		'description'   => 'Нижняя вторая колонка',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f-text text-center">',
		'after_title'   => '</div><div class="w-line"></div>'
	));
	register_sidebar( array(
		'name'          => 'Нижняя третья колонка',
		'id'            => "b-rc-column",
		'description'   => 'Нижняя третья колонка',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f-text text-center">',
		'after_title'   => '</div><div class="w-line"></div>'
	));
	register_sidebar( array(
		'name'          => 'Нижняя правая колонка',
		'id'            => "b-r-column",
		'description'   => 'Нижняя правая колонка',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="f-text text-center">',
		'after_title'   => '</div><div class="w-line"></div>'
	));
}
class Amt_Walker extends Walker_Nav_Menu
{
		function start_el( &$output, $item, $depth = 1, $args = array(), $id = 1 )
    {
        $classes = empty($item->classes) ? array () : (array) $item->classes;
        $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
        $output .= "<div id='menu-item-$item->ID' $class_names>";
        $attributes  = '';
        !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $item_output = $args->before
        . "<a $attributes class=\"uk-card uk-card-default uk-card-body u-card-s\"><div>"
        . $args->link_before
        . $title
        . '</div></a></div>'
        . $args->link_after
        . $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
function kama_excerpt( $args = '' ){
	global $post;

	if( is_string($args) )
		parse_str( $args, $args );

	$rg = (object) array_merge( array(
		'maxchar'     => 350,   // Макс. количество символов.
		'text'        => '',    // Какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
		'autop'       => true,  // Заменить переносы строк на <p> и <br> или нет?
		'save_tags'   => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'.
		'more_text'   => 'Читать дальше...', // Текст ссылки `Читать дальше`.
		'ignore_more' => false, // нужно ли игнорировать <!--more--> в контенте
	), $args );

	$rg = apply_filters( 'kama_excerpt_args', $rg );

	if( ! $rg->text )
		$rg->text = $post->post_excerpt ?: $post->post_content;

	$text = $rg->text;
	$text = preg_replace( '~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text );
	$text = preg_replace( '~\[/?[^\]]*\](?!\()~', '', $text );
	$text = trim( $text );

	if( ! $rg->ignore_more  &&  strpos( $text, '<!--more-->') ){
		preg_match('/(.*)<!--more-->/s', $text, $mm );

		$text = trim( $mm[1] );

		$text_append = ' <a href="'. get_permalink( $post ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
	}
	else {
		$text = trim( strip_tags($text, $rg->save_tags) );
		if( mb_strlen($text) > $rg->maxchar ){
			$text = mb_substr( $text, 0, $rg->maxchar );
			$text = preg_replace( '~(.*)\s[^\s]*$~s', '\\1...', $text ); // кил последнее слово, оно 99% неполное
		}
	}
	if( $rg->autop ){
		$text = preg_replace(
			array("/\r/", "/\n{2,}/", "/\n/",   '~</p><br ?/?>~'),
			array('',     '</p><p>',  '<br />', '</p>'),
			$text
		);
	}

	$text = apply_filters( 'kama_excerpt', $text, $rg );

	if( isset($text_append) )
		$text .= $text_append;

	return ( $rg->autop && $text ) ? "<p>$text</p>" : $text;
}
// Настройка отображения пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
	<div class="p-f">
		<ul class="uk-pagination uk-flex-center %1$s" role="navigation">
			<li class="p-li">%3$s</li>
		</ul>
	</div>    
	';
}
// Хлебные крошки
function the_breadcrumb(){
	// получаем номер текущей страницы
	$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$separator = ' &raquo; '; //  »
	// если главная страница сайта
	if( is_front_page() ){
		if( $pageNum > 1 ) {
			echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
		} else {
			echo '<a href="' . site_url() . '">Главная</a>';
		}
	} else { // не главная
		echo '<a href="' . site_url() . '">Главная</a>' . $separator;
		if( is_single() ){ // записи
			the_category(', '); echo $separator; the_title();
		} elseif ( is_page() ){ // страницы WordPress 
			the_title();
		} elseif ( is_category() ) {
			single_cat_title();
		} elseif( is_tag() ) {
			single_tag_title();
		} elseif ( is_day() ) { // архивы (по дням)
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
			echo get_the_time('d');
		} elseif ( is_month() ) { // архивы (по месяцам)
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo get_the_time('F');
		} elseif ( is_year() ) { // архивы (по годам)
			echo get_the_time('Y');
		} elseif ( is_author() ) { // архивы по авторам
			global $author;
			$userdata = get_userdata($author);
			echo 'Опубликовал(а) ' . $userdata->display_name;
		} elseif ( is_404() ) { // если страницы не существует
			echo 'Ошибка 404';
		}
		if ( $pageNum > 1 ) { // номер текущей страницы
			echo ' (' . $pageNum . '-я страница)';
		}
	}
}
function register_post_photo(){
	register_post_type( 'photo', [
		'label'  => null,
		'labels' => [
			'name'               => 'Фотогалерея', // основное название для типа записи
			'singular_name'      => 'Фотогалерея', // название для одной записи этого типа
			'add_new'            => 'Добавить фотогалерею', // для добавления новой записи
			'add_new_item'       => 'Добавление фотогалереи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование фотофотогалереи', // для редактирования типа записи
			'new_item'           => 'Новая фотогалерея', // текст новой записи
			'view_item'          => 'Смотреть фотогалерею', // для просмотра записи этого типа.
			'search_items'       => 'Искать фотогалерею', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Фотогалерея', // название меню
		],
		'description'         => 'Фотогалерии мероприятий',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-camera',
		'supports'            => [ 'title', 'thumbnail', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false
	] );
}

function true_post_type_help_tab() {
	$screen = get_current_screen();
	// Прекращаем выполнение функции, если находимся на страницах других типов постов
	if ( 'photo' != $screen->post_type )
		return;
	// Массив параметров для первой вкладки
	$args = array(
		'id'      => 'tab_1',
		'title'   => 'Обзор',
		'content' => '<h3>Обзор</h3><p>Содержимое первой вкладки.</p>'
	);
	// Добавляем вкладку
	$screen->add_help_tab( $args );
	// Массив параметров для второй вкладки
	$args = array(
		'id'      => 'tab_2',
		'title'   => 'Доступные действия',
		'content' => '<h3>Доступные действия с типом постов «' . $screen->post_type . '»</h3><p>Содержимое второй вкладки</p>'
	);
	// Добавляем вторую вкладку
	$screen->add_help_tab( $args );
}




function true_load_posts(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['post_type'] = array('post');
	$args['paged'] = $_POST['page'] + 1; // следующая страница
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();
 
			get_template_part( 'template/more/search-post', get_post_format() );
 
		endwhile;
		wp_reset_postdata();
	endif;
	die();
}