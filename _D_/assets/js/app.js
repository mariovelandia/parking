$('#search-icon').mouseover(function(){
	$(this).attr('src', 'assets/img/look-icon.png');
});
$('#search-icon').mouseout(function(){
	$(this).attr('src', 'assets/img/look-icon-white.png');
});

$('#adv-search').click(function(e){
	e.preventDefault();
	$('#advanced-search').slideToggle();
})

$('#login-link').click(function(e){
	e.preventDefault();
	$('#sign-out').fadeOut();
	$('#sign-in').fadeToggle('slow');
	$('#menu-links').hide();
	$('#menu-close').show();
});

$('#login-link-2').click(function(e){
	e.preventDefault();
	$('#sign-out').fadeOut();
	$('#sign-in').fadeToggle('slow');
	$('#menu-links').hide();
	$('#menu-close').show();
});

$('#signup-link').click(function(e){
	e.preventDefault();
	$('#sign-in').fadeOut();
	$('#sign-out').fadeToggle('slow');
	$('#menu-links').hide();
	$('#menu-close').show();
});

$('#signup-link-2').click(function(e){
	e.preventDefault();
	$('#sign-in').fadeOut();
	$('#sign-out').fadeToggle('slow');
	$('#menu-links').hide();
	$('#menu-close').show();
});

$('#menu-close').click(function(e){
	$(this).hide();
	$('#sign-out').fadeOut();
	$('#sign-in').fadeOut();
	$('#menu-links').show();
});

