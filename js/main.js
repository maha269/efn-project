/* =================================
------------------------------------
	Divisima | eCommerce Template
	Version: 1.0
 ------------------------------------
 ====================================*/


'use strict';

// var lastTarget = '';
// // console.log($(".scroll-section"));
// var scrollImages = document.querySelectorAll('.scroll-section');
// console.log('ssssssssssssssssss',scrollImages);
//
// for (var i = 0; i < scrollImages.length; i++) {
// 	scrollImages[i].addEventListener('click',function () {
// 		console.log('ssssssssssssssssssssssssssssssssss');
// 	})
// }

// $(".scroll-section").click(function () {
// 	console.log('iiiiiiiiiiiiiiiiiiiiiiiiiiin');
// 	var target = $(this).data('target');
//
// 	lastTarget||lastTarget.hide();
// 	$(target).show();
// 	lastTarget=$(target);
// });
$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(200).fadeOut("slow");

});
$(document).ready(function() {
    $(".navbar-toggler").click(function() {
		console.log('ddddddddddddddd');
		$('.links').show();
		$('.sub-menu').hide();
		$('.navbar-nav').removeClass('main-menu');
	});
	
	$(".drop").click(function() {
		$(this).children('.sub-menu').slideToggle();
	});
	$(".login-dropdown").click(function() {
		$('#login-dp').slideToggle();
	});
	

    $(window).resize(function() {
       if ($(window).width() > 768) {
          $('.links').show();
       } else {
          $('.links').hide();
       }
	});
	$(".dropdown").hover(
		function() {
		  $('.dropdown-menu', this).stop(true, true).slideDown("fast");
		  $(this).toggleClass('open');
		},
		function() {
		  $('.dropdown-menu', this).stop(true, true).slideUp("fast");
		  $(this).toggleClass('open');
		}
	  );
});

(function($) {
	/*------------------
		Navigation
	--------------------*/
	$('.main-menu').slicknav({
		prependTo:'.main-navbar .container',
		closedSymbol: '<i class="flaticon-right-arrow"></i>',
		openedSymbol: '<i class="flaticon-down-arrow"></i>'
	});



})(jQuery);

$('[data-fancybox="watermark"]').fancybox({
	protect    : true,
	slideClass : 'watermark',
	toolbar    : false,
	smallBtn   : false


});

// Preload watermark image
// Please, use your own image
(new Image()).src = "https://upload.wikimedia.org/wikipedia/commons/8/85/Nick_%28Logo%29.png";

