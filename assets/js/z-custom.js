$('#navbarCollapse ul').addClass('navbar-nav mr-auto');

$('.menu-item-has-children a:first-of-type').attr('data-toggle', 'dropdown');
$('ul.sub-menu').addClass('dropdown-menu');

$("ul.dropdown-menu li").on("click", function (e) {
    e.stopPropagation();
});



$(document).ready(function(){
	$('.why-container').slick({
		dots: true,
		infinite: true,
		speed: 500,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					infinite: true
				}
			}
		]
	});

	$('.navbar-toggler').on('click', function () {
		console.log('clicked!');
		$('.site-header').addClass('transparent menu-opened');
	});

	$('.product-gallery').slick({
		dots: true,
		infinite: true,
		speed: 200,
		autoplay: true,
		slidesToShow: 1,
		arrows: false,
		adaptiveHeight: true
	});

	$( window ).scroll(function() {
		var vertical_position = $('html').scrollTop();
		if (vertical_position >=1) {
			$('#masthead').addClass('transparent');
		}else{
			if (!$('.site-header').hasClass('menu-opened')) {
				$('#masthead').removeClass('transparent');
			} else{};
		};
	});

	$(function(){ 
	  var formSettings = {
	    singleError : function($field, rules){ 
	      $field.closest('.form-group').removeClass('valid').addClass('error');
	      $('.alert_fields').fadeIn();
	    },
	    singleSuccess : function($field, rules){ 
	      $field.closest('.form-group').removeClass('error').addClass('valid');
	      $('.alert_fields').fadeOut();
	    },
	    overallSuccess : function(){
	      var form      = $('#contactForm'),
	        nombre      = form.find( "input[name='nombre']").val(),
	        email		= form.find( "input[name='email']").val(),
	        telefono	= form.find( "input[name='telefono']").val(),
	        ciudad		= form.find( "input[name='ciudad']").val(),
	        estado		= form.find( "input[name='estado']").val(),
	        comentarios	= form.find( "textarea[name='comentarios']").val(),
	        action      = form.attr( "action"),
	        url         = action;

	      var posting = $.post(
	        url, {  
	        	nombre: nombre,
	        	email: email,
				telefono: telefono,
				estado: estado,
				comentarios: comentarios,
				ciudad: ciudad
				}
	      );
	      posting.done(function( data ){
	        $('#contactForm')[0].reset();
	        $('.email-sent-alert').fadeIn().delay(3000).fadeOut();
	      });
	    },
	    overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
	      autoDetect : true, debug : true
	    };
	  var $validate = $('#contactForm').validate(formSettings).data('validate');
	});
});