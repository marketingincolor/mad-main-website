(function($) {
$(function() {

	var scrollPane = $( "#timeline-holder" ),
		scrollContent = $( "#interactive" ),
		zoom = 100;

	var widthmax 	= 894,
		scrollwidth = 730;
	
	var scrollbar = $( "#scroller" ).slider({
		slide: function( event, ui ) {
			scrollit(ui.value);
		}
	});
	function scrollit( value, animate) {
		var	percent = zoom / 100;
		var	left 	= value * -percent,
			margin 	= widthmax * ( value / 100 );
		
		if(value >= 66) {
			$('#legend.not-flipped').removeClass('not-flipped').addClass('flipped');
		} else {
			$('#legend.flipped').removeClass('flipped').addClass('not-flipped');
		}
		if( animate ) {
			$( "#interactive" ).stop(true,true)
				.animate({ 
					'left'  : left + '%', 
					'margin-left':margin+'px' 
				}, 300 );
		} else {
			$( "#interactive" ).css({ 'left'  : left + '%', 'margin-left':margin+'px' });
		}
	}
	
	$('#zoom .zoombtn').click(function() {
		$('#zoom .active').removeClass('active');
		$(this).addClass('active');
		
		zoom = $(this).attr('rel');
		
		var percent  = zoom / 100;
		var	width 	 = widthmax * percent,
			left 	 = ( ( 1 - percent ) * 100 / 2 );
			
		$('#legend .clicked').hide().removeClass('clicked');
		if(zoom == 100) {
			$('#xlabels .zoom2, #xlabels .zoom3').stop(true,true).animate({width:'0'}, 300);
			$('.default', '#legend').show();
			$('#legend .default').removeClass('removed');
			$('#legend.flipped').removeClass('flipped').addClass('not-flipped');
		}
		if(zoom == 200) {
			$('#xlabels .zoom3').stop(true,true).animate({width:'0'}, 300);
			$('#xlabels .zoom2').stop(true,true).animate({width:'149px'}, 300);
			$('.default', '#legend').addClass('removed');
		}
		if(zoom == 400) {
			$('#xlabels .zoom2, #xlabels .zoom3').stop(true,true).animate({width:'149px'}, 300);
			$('.default', '#legend').addClass('removed');
		}
		
		//Show or hide the scroller & labels depending on zoom
		if( percent > 1 && hidescroll ) {
				$('#scroller').find('.ui-slider-handle').stop(true,true).fadeIn(400);
				hidescroll = false;
		}
		if( percent <= 1 && !hidescroll ) {
				$('#scroller').find('.ui-slider-handle').stop(true,true).fadeOut(400);
				hidescroll = true;
		}
		
		//now resize the scroller
		if( percent < 1 )
			percent = 1;
		scrollbar.find( ".ui-slider-handle" ).css({
			width: scrollwidth / percent,
			"margin-left": -scrollwidth / percent / 2
		});
		handleHelper.css('width',scrollwidth - (scrollwidth / percent) );
		
		
		$( "#interactive, #timeline, #timeline-events" ).stop(true,true)
			.animate({
				width: width + 'px'
			}, 300 );
			
		//now trigger a scroll
		scrollit($( "#scroller" ).slider( "value" ), true);
		
		if(zoom == 100) { // reset flip for zoom 1
			$('#legend.flipped').removeClass('flipped').addClass('not-flipped');
		}
	});
	
	
	// Set up scrollbar
	var handleHelper = scrollbar.find( ".ui-slider-handle" )
	.mousedown(function() {
			$('#scroller').width( handleHelper.width() );
		})
		.mouseup(function() {
			$('#scroller').width( "100%" );
		})
	.append( "<span class='ui-icon ui-icon-grip-dotted-vertical'></span>" )
	.wrap( "<div class='ui-handle-helper-parent'></div>" ).parent();
	function sizeScrollbar() {
		scrollbar.find( ".ui-slider-handle" ).css({
			width: widthmax,
			"margin-left": -widthmax / 2
		});
		$( "#scroller" ).slider( "value", 50 );
		handleHelper.css('width','0%');
		$( "#scroller" ).slider( "value", 25 );
	}
	var hidescroll = true;
	$('#scroller .ui-slider-handle').fadeOut(0);
	
	setTimeout( sizeScrollbar, 10 );//safari wants a timeout
	
	
	// Show details for clicked events.
	$('#timeline-events .event a.top').hover(function() {
		var rel 	= $(this).attr("rel");
		var target 	= $('#legend #'+rel);
		
		if(target.hasClass('clicked'))
			return false;
		
		target.addClass('active').stop(true,true).fadeIn(300);
		$('#legend .default, #legend .clicked').stop(true,true).fadeOut(300);
		return false;
	}, function() {
		var rel 	= $(this).attr("rel");
		var target 	= $('#legend #'+rel);
		
		if(target.hasClass('clicked'))
			return false;
		
		target.removeClass('active').stop(true,true).fadeOut(300);
		$('#legend .clicked, #legend .default:not(.removed)').stop(true,true).fadeIn(300);
	});
	$('#timeline-events .event a.top').click(function() {
		var rel 	= $(this).attr("rel");
		var target 	= $('#legend #'+rel);
		
		$('#legend .clicked').removeClass('clicked');
		target.addClass('clicked');
		$('#legend .default').addClass('removed');
		
		return false;
	});
	
	// Remove Loading screen
	setTimeout( fadeLoader, 500 );
	
	function fadeLoader() {
		$('#loading-wrapper').fadeOut(1700);
		setTimeout( removeLoader, 1700 );
	}
	function removeLoader() {
		$('#loading-wrapper').remove();
	}
	
});
})(jQuery);