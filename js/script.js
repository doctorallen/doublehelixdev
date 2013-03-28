$(document).ready(function(){
//Fading for elements with the fade class
	$(function(){
		fadeElements( '.fade', 700, 1);
	});

	function fadeElements( e, s, o ){
		var $fade = $(e);
		$fade.each(function( i ){
			$(this).delay(i * s).fadeTo(s,o);
		});
	}

//Client Hover State
	$('.client').hover(
		function(){
			var client = $(this);
			client.find('.clients-header').stop(true,true).animate({opacity:1}, 400);
		},
		function(){
			var client = $(this);
			client.find('.clients-header').stop(true,true).animate({opacity:0}, 400);
		}
	).find('.clients-header').css('opacity',0);
//Navigation tab
	var pathname = window.location.pathname;
	pathname = pathname.split("/");
	pathname = pathname[1];
	if(pathname == ''){
		pathname = 'home';
	}
	$('.' + pathname + ' a').addClass('active');
});
//Google analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34816886-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

