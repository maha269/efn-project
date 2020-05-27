/* =================================
------------------------------------
	Divisima | eCommerce Template
	Version: 1.0
 ------------------------------------
 ====================================*/


'use strict';


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
