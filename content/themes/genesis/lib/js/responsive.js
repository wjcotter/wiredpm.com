jQuery(document).ready(function($) {

	$('#mobile-menu').prepend('<div class="menu-trigger">Menu</div>');

	$("#mobile-menu li:has(ul)").each(function(){
		$(this).find(">a").addClass("with-ul");
	});
   
	$('#mobile-menu a.with-ul').after('<a class="trigger" href="#"></a>');

	$('#mobile-menu ul.menu-mobile').hide();
	
	$('#mobile-menu .menu-trigger').click(function() {
		$(this).next().slideToggle('normal');
		$(this).toggleClass('open');
	});
	
	$('#mobile-menu ul.sub-menu').hide(); 

	$('#mobile-menu .trigger').click(function() {
		$(this).next().slideToggle('normal');
		$(this).toggleClass('open');
	});

});