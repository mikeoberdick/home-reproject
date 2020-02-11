jQuery(function($){

/////////////////  NO FOLLOW ON STAGING  \\\\\\\\\\\\\\\\\

$(document).ready(function() {
	if ( window.location.href.indexOf("captchaintherye.com") > -1 ) {
		console.log('on captcha');
    } else if ( window.location.href.indexOf(".d4tw") > -1) {
		console.log('on d4tw');
		//alert('NEED TO UPDATE WP CONFIG FILE DB SETTINGS');
    	}
	else {
    	alert('NEED TO REMOVE NOINDEX FROM HEADER & THIS LINE FROM JS');
    }
});

/////////////////  SET HEADER HEIGHT FOR FIXED HEADER  \\\\\\\\\\\\\\\\\
var height = $('#headerWrapper').height();
$('#headerWrapper').css('height', height);
$('.page-wrapper').css('padding-top', height);

/////////////////  SET FLIP CARDS TO BE SAME HEIGHT  \\\\\\\\\\\\\\\\\
$(document).ready(function() {
	front = Math.max.apply(null, $("#process .front").map(function ()
	{
    	return $(this).outerHeight();
	}).get());

	back = Math.max.apply(null, $("#process .back").map(function ()
	{
    	return $(this).outerHeight();
	}).get());

	height = Math.max(front, back);
	$('#process .front').height(height);
	$('#process .back').height(height);
	
});

/////////////////  PUSH DOWN FOOTER  \\\\\\\\\\\\\\\\\
$(document).ready(function() {
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');
});

//end of file
});