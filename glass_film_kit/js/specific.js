$(document).ready(function() {
	
	var $i = null;
	var $f = null; 
	var $activeb1 = '3';
	var $activeb2 = '0';
	
	$('li.stage1 .wrap').click(function() {
		$i = $(this).find('img').attr('class');
		$('li').animate({left:'-=676'});
		$('.b1, .b2, .b3').removeClass('current');
		$('.b2').addClass('current');
		$('.b2').css('display', 'inline');
		$activeb1 = '0';
	});
	
	$('li.stage2 img').click(function() {
		$f = $(this).attr('class');
		$('li.stage3 img').attr('src', 'images/' + $i + $f + '.jpg');
		$('li').animate({left:'-=676'});
		$('.b1, .b2, .b3').removeClass('current');			
		$('.b3').addClass('current');
		$('.b3').css('display', 'inline');
		$activeb1 = '1';
		$activeb2 = '1';
	});
	
	$('.b2').click(function() {
		if($activeb2 == '1') {
    		$('li').animate({left:'+=676'});
    		$('.b1, .b2, .b3').removeClass('current');
    		$(this).addClass('current');
    		$('.b3').css('display', 'none');
    		$activeb1 = '0';
    		$activeb2 = '0';
		}
	});
	
	$('.b1').click(function() {
		if($activeb1 == '1') {
    		$('li').animate({left:'+=1352'});
    		$('.b1, .b2, .b3').removeClass('current');
    		$(this).addClass('current');
    		$('.b2, .b3').css('display', 'none');
    		$activeb2 = '0';
    		$activeb1 = '3';
		} else if($activeb1 == '0') {
			$('li').animate({left:'+=676'});
    		$('.b1, .b2, .b3').removeClass('current');
    		$(this).addClass('current');
    		$('.b2, .b3').css('display', 'none');
    		$activeb1 = '3';
		}
	});
	
});