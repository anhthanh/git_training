
$(document).ready(function(){
	$(".tab1 .single-bottom").hide();
	$(".tab2 .single-bottom").hide();
	$(".tab3 .single-bottom").hide();
	$(".tab4 .single-bottom").hide();
	$(".tab5 .single-bottom").hide();
	
	$(".tab1 ul").click(function(){
		$(".tab1 .single-bottom").slideToggle(300);
		$(".tab2 .single-bottom").hide();
		$(".tab3 .single-bottom").hide();
		$(".tab4 .single-bottom").hide();
		$(".tab5 .single-bottom").hide();
	})
	$(".tab2 ul").click(function(){
		$(".tab2 .single-bottom").slideToggle(300);
		$(".tab1 .single-bottom").hide();
		$(".tab3 .single-bottom").hide();
		$(".tab4 .single-bottom").hide();
		$(".tab5 .single-bottom").hide();
	})
	$(".tab3 ul").click(function(){
		$(".tab3 .single-bottom").slideToggle(300);
		$(".tab4 .single-bottom").hide();
		$(".tab5 .single-bottom").hide();
		$(".tab2 .single-bottom").hide();
		$(".tab1 .single-bottom").hide();
	})
	$(".tab4 ul").click(function(){
		$(".tab4 .single-bottom").slideToggle(300);
		$(".tab5 .single-bottom").hide();
		$(".tab3 .single-bottom").hide();
		$(".tab2 .single-bottom").hide();
		$(".tab1 .single-bottom").hide();
	})	
	$(".tab5 ul").click(function(){
		$(".tab5 .single-bottom").slideToggle(300);
		$(".tab4 .single-bottom").hide();
		$(".tab3 .single-bottom").hide();
		$(".tab2 .single-bottom").hide();
		$(".tab1 .single-bottom").hide();
	})	
});
//--------------------------------------
$(window).load(function(){
 $( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 400000,
			values: [ 2500, 350000 ],
			slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
 });
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});
//-----------------------------------
$(document).ready(function(c) {
$('.close2').on('click', function(c){
        $('.cart-header2').fadeOut('slow', function(c){
    $('.cart-header2').remove();
});
});	  
});
//------------------------------------
 $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});