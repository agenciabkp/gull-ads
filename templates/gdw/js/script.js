$(document).ready(function(){
	$('.gallery').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		prevArrow: ".gallery-prev",
		nextArrow: ".gallery-next",
		responsive: [
		    {
		      breakpoint: 1023,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true
		      }
		    },
		    {
		      breakpoint: 639,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
	  });

});

$(".nav-icon").click(function(){
	$("nav ul").toggleClass("on");

	$(this).children("span").toggleClass(function() {
	  if ( $( this ).is( ".icon-navicon" ) ) {
	    return "icon-minus";
	  } else {
	    return "icon-navicon";
	  }
	});
});

$(".ad-view").click(function(){
	var opt = $(this).attr("href");

	$(".ad-view").addClass("hollow");
	$(this).removeClass("hollow");

	if(!$(".map").hasClass("on") || opt == "photo"){
		$(".map").toggleClass("on");
	}

	return false;
});