$('#navbarCollapse ul').addClass('navbar-nav mr-auto');

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
		var vertical_position = $('body').scrollTop();
		if (vertical_position >=1) {
			$('#masthead').addClass('transparent');
		}else{
			$('#masthead').removeClass('transparent');
		};
	});
	

});