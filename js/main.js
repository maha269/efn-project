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
	jQuery(".loader").fadeOut("slow");
	$("#preloder").delay(200).fadeOut("slow");

});
$('.custom-checkbox').change(function(){
	var ischecked= $(this).is(':checked');
	if(!ischecked){
		$(this).parents(".single-dish-wrapper:first").css('background-color','#FFFFFF');
	}else{
		// $(this).parents(".single-dish-wrapper:first").css('background-color','rgba(160, 219, 160,0.7)');
		$(this).parents(".single-dish-wrapper:first").css('background-color','#e0e0e0');
	}
});
$('.plus-weight').click(function(){
	var meal = $(this).data().meal;
	var dishSource = $(this).data().msource;
	var countEl = $("#count_"+ dishSource +"_" + meal);
	var count = parseInt($("#count_" + dishSource +"_" + meal).val());
	count += 50;
	$("#count_" + dishSource +"_" + meal).val(count);
});
$('.minus-weight').click(function(){
	var meal = $(this).data().meal;
	var dishSource = $(this).data().msource;
	var countEl = $("#count_"+ dishSource +"_" + meal);
	var count = parseInt($("#count_" + dishSource +"_" + meal).val());
	if (count > 50) {
		count -= 50;
		$("#count_" + dishSource + "_" + meal).val(count);
	}
});
$('.plus-quantity').click(function(){
	var meal = $(this).data().meal;
	var dishSource = $(this).data().msource;
	var countEl = $("#count_"+ dishSource +"_" + meal);
	var count = parseInt($("#count_" + dishSource +"_" + meal).val());
	count += 1;
	$("#count_" + dishSource +"_" + meal).val(count);
});
$('.minus-quantity').click(function(){
	var meal = $(this).data().meal;
	var dishSource = $(this).data().msource;
	var countEl = $("#count_"+ dishSource +"_" + meal);
	var count = parseInt($("#count_" + dishSource +"_" + meal).val());
	if (count > 1) {
		count -= 1;
		$("#count_" + dishSource + "_" + meal).val(count);
	}
});

$(document).ready(function () {


	/* show lightbox when clicking a thumbnail */
	$('a.thumb').click(function (event) {
		event.preventDefault();
		var content = $('.modal-body');
		content.empty();
		var title = $(this).children('.content-title').text();
		$('.modal-title').html(title);
		// content.html($(this).html());
		$(".modal-profile").modal({show: true});
	});

	// change content of modal body after click on source
	$('.source-tab ').click(function (event) {
		// event.preventDefault();
		$('.source-tab').removeClass('active');
		$(this).addClass('active');

	});

});

function allowDrop(ev) {
	/* The default handling is to not allow dropping elements. */
	/* Here we allow it by preventing the default behaviour. */
	ev.preventDefault();
}

function drag(ev) {
	/* Here is specified what should be dragged. */
	/* This data will be dropped at the place where the mouse button is released */
	/* Here, we want to drag the element itself, so we set it's ID. */
	ev.dataTransfer.setData("text/html", ev.target.id);
}

function drop(ev) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text/html");
	/* If you use DOM manipulation functions, their default behaviour it not to
       copy but to alter and move elements. By appending a ".cloneNode(true)",
       you will not move the original element, but create a copy. */
	var nodeCopy = document.getElementById(data).cloneNode(true);
	nodeCopy.id = "newId"; /* We cannot use the same ID */
	ev.target.appendChild(nodeCopy);
}

$(document).ready(function() {
    $(".navbar-toggler").click(function() {
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

(new Image()).src = "https://upload.wikimedia.org/wikipedia/commons/8/85/Nick_%28Logo%29.png";
