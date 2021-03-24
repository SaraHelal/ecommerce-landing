$(function (){

	'use strict';
	window.onscroll = function() {myFunction(x)};
(function() {
    $('footer').css('position', $(document).height() > $(window).height() ? "inherit" : "fixed");
})();

var x = window.matchMedia("(min-width: 991.98px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

	function myFunction(x) {
  if (x.matches) { // If media query matches
    	if(window.pageYOffset >= 188){
			$('.sticky-nav').css('display' ,'block');
		}
		else
		{
			$('.sticky-nav').css('display' ,'none');

		}
  } else {
  	
			$('.sticky-nav').css('display' ,'none');

		}
  
}


  	$('.product-slider >div:first-child').addClass('active');

	$('#slider, .carousel-item ').height($(window).height()/2);

	$(window).resize(function(){

		$('#slider , .carousel-item').height($(window).height()/2);

	});

$('.nav-right .search-icon a').click(function(e){
	 e.preventDefault();
	$('.modal-search').css('display','block');
});


$('.block-close').click(function(e){
	 e.preventDefault();
	 $('.modal-search input[type=text]').val('');
	$('.modal-search').css('display','none');
});

$('.brands-inner').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
    arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
});

//$('.brands .carousel-inner .carousel-item:first-child').addClass('active');


 /* (function autoSlider (){


	$('.product-slider div.active').each(function(){
		
		if (!$(this).is(':last-child')){
				console.log("not last ");

			$(this).delay(2000).animate({left: '100px', opacity: '0.4'}, function(){
				 
				$(this).css({ 'left' : 0, 'opacity' : 1 }).removeClass('active').next().addClass('active');
				console.log("yes");
				autoSlider();


			});

		}
		else{
				console.log(" last ");
				$(this).delay(2000).animate({left: '100px', opacity: '0.4'}, function(){
				$(this).css({ 'left' : 0, 'opacity' : 1 }).removeClass('active');
				$('.product-slider >div:first-child').addClass('active');
				autoSlider();
				});
		}

	}); 

}()); */


});
function sliderButton(arrowButton) {
	var sliderActive = $('.product-slider div.active');
	console.log("clicked");
	console.log(arrowButton);
	if(arrowButton=='next'){
	if (!(sliderActive.is(':last-child'))){
		console.log("not last ");

		sliderActive.animate({right: '100px', opacity: '0.4'}, function(){
			sliderActive.css({ 'right' : 0, 'opacity' : 1 }).removeClass('active').next().addClass('active');
			console.log("next");
			});
	}



	
	else{
		console.log(" last ");
		sliderActive.animate({right: '100px', opacity: '0.4'}, function(){
			sliderActive.css({ 'right' : 0, 'opacity' : 1 }).removeClass('active');
			$('.product-slider >div:first-child').addClass('active');
		});
	} 

	}


	else
	{
	if ((sliderActive.is(':first-child'))){
		console.log("not last ");
sliderActive.animate({left: '100px', opacity: '0.4'}, function(){
			sliderActive.css({ 'left' : 0, 'opacity' : 1 }).removeClass('active');
			$('.product-slider >div:last-child').addClass('active');
		});

	}



	
	else{
		console.log(" last ");
			sliderActive.animate({left: '100px', opacity: '0.4'}, function(){
			sliderActive.css({ 'left' : 0, 'opacity' : 1 }).removeClass('active').prev().addClass('active');
			console.log("prev");
			});
	} 


	}

}



