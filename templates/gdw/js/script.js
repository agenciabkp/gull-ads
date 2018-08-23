$(document).ready(function(){


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