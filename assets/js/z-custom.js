$('#navbarCollapse ul').addClass('navbar-nav mr-auto');

$(document).ready(function(){
	$('.why-container').slick({
		dots: true,
		infinite: false,
		speed: 300,
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



	$( window ).scroll(function() {
		var vertical_position = $('body').scrollTop();
		console.log(vertical_position);
		if (vertical_position >=1) {
			$('#masthead').addClass('transparent');
		}else{
			$('#masthead').removeClass('transparent');
		};
	});
	

});