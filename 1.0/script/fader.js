$(document).ready(function() {
/* nav bar */
	$('#nav div').hide();
	$('#page').fadeIn('normal');
		
	$('.navswitch').click(function() {
		var thisClass = this.className.slice(0,2);
		$('.tab').hide();
		$('.' + thisClass).fadeIn();
		return false;
	});

	$('#content').click(function() {
		$('.tab').hide();
	});	
/* comments */
	$('#comment-form ul li p').hide();
	$('#comment-form ul li p:last').slideDown();
	
	$('.commentmetadata').click(function() {
		$(this).next('p').slideToggle('slow');
		return false;
	});
	
	$('#comment-toggle').click(function() {
		$('#comment-form ul li p').slideToggle('slow');
		return false;
	});
	
	
		
});


