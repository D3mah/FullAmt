const buttons = document.querySelector(".box-switch");
const elements = document.querySelector(".theme");
const activeClass = "dark";


window.addEventListener("load", (event) => {
  localStorage.getItem("theme") && elements.classList.add(activeClass);
});

buttons.addEventListener("click", (event) => {
  elements.classList.toggle(activeClass);
  localStorage.getItem("theme")
    ? localStorage.removeItem("theme", activeClass)
    : localStorage.setItem("theme", activeClass);
});
// Анимация меню при различных расширениях экрана, при ширине больше 1500px
// меню открывается при наведении, при ширине 1499px меню открывается при клике
if (window.screen.width >= 1500) {
	jQuery(document).ready(function($){  
		$('li.menu-item-has-children').hover(
			function () {
					$('ul.sub-menu', this).stop().slideDown(400);
				}, 
			function () {
				$('ul.sub-menu', this).stop().slideUp(400);            
				}
			);
		});
}
if (window.screen.width <= 1499) {
	jQuery(document).ready(function () {
		jQuery('.uk-navbar > ul > li.menu-item-has-children > a').click(function () {
			jQuery('.uk-navbar > ul > li.menu-item-has-children  ul').slideUp();
			if (jQuery(this).next().is(":visible")) {
				jQuery(this).next().slideUp();
			} else {
				jQuery(this).next().slideToggle();
			}
			return false;
		});
	});
}
jQuery(function() {
	jQuery('.uk-navbar > ul > li.menu-item-has-children > a').on('click', function() {
			return false;
	});
});
// Появление логотипа про прокрутке страницы в меню
$(window).scroll(function(){
	if ($(this).scrollTop() > 110) {
			$('.menu').addClass('banner');
	} else {
			$('.menu').removeClass('banner');
	}
});
// Добавление класса open к иконке меню
var wrapperMenu = document.querySelector('.wrapper-menu');
wrapperMenu.addEventListener('click', function(){
	wrapperMenu.classList.toggle('open');  
});
// Печать страниц сайта
$(function($){
	$(".site-print").click(function(){
		window.print();
		return false;
	});
});

// Копирвание ссылки из адресной строки
$('.js-copy').on('click', function() {
  copyToClipboard( $(this).text() );
  ui_copyDone( this ); 
});
$('.js-copy-btn').each(function(index) {
  $(this).on('click', function() {    
    copyToClipboard( $('.js-copy-target').eq(index).text() );
    ui_copyDone( this );
  });  
});
function copyToClipboard(str) {
  var area = document.createElement('textarea');
  document.body.appendChild(area);
    area.value = str;
    area.select();
    document.execCommand("copy");
  document.body.removeChild(area);
}
function ui_copyDone(btn) {
  var contentSaved = btn.innerHTML;
  btn.innerHTML = '<span class="uk-margin-small-right" uk-icon="copy"></span>Скопировано';
  btn.classList.add('copied');
  setTimeout(function() {
    btn.innerHTML = contentSaved;
    btn.classList.remove('copied');
  }, 1500);
}