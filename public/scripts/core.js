$(document).ready(function(){

	$('#slider').css({'height':$(window).height()+"px",'width':$(window).width()+"px"});
	// more complex jMenu plugin called
	$("nav #menu").jMenu({
	  ulWidth : '124',
	  effects : {
	    effectTypeOpen : 'slide',
		effectTypeClose : 'slide'
	  },
	  animatedText : true
	});

	var Page = (function() {
		var $navArrows = $( '#nav-arrows' ),
			slitslider = $( '#slider' ).slitslider(),
			init = function() {
				initEvents();
			},
			initEvents = function() {
				// add navigation events
				$navArrows.children( ':last' ).on( 'click', function() {
					slitslider.next();
					return false;
				} );
				$navArrows.children( ':first' ).on( 'click', function() {
					slitslider.previous();
					return false;
				} );
			};
			return { init : init };
	})();
	Page.init();
	/**
	 * Notes: 
	 * 
	 * example how to add items:
	 */
	/*
	
	var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
	
	// call the plugin's add method
	ss.add($items);
	*/
});