/**
*	Parallel loading in sequence with Head JS - http://headjs.com/
*/
head.js(
	"/wp-content/themes/madico.com/js/cufon-yui.js",
	"/wp-content/themes/madico.com/js/fonts/Jenson_600.font.js",
	"/wp-content/themes/madico.com/js/fonts/caspari.js"
);

(function($){ 

	head.ready(function(){

		/** Comment validation */
		comment_form = $("#commentform");
		if( comment_form.length > 0 ) {
			head.js("http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js", function() {
				comment_form.validate();
			});
		}
		
		/** Cufon text replacement */
		if ( !jQuery.browser.msie && !jQuery.browser.version.substr(0,1)<7) {
			Cufon.replace('.main h1, .main h2, .jenson', { 
				hover: true, 
				fontFamily: 'jenson' 
			});
			Cufon.replace('.main h3, .main h4, .main h5, .main h6, .caspari', { 
				hover: true, 
				fontFamily: 'caspari'
			});
		}
		
		/** Automatic PDF icons */
		var pdf_links = $('a[href$=pdf]');
		if( pdf_links.length > 0 ) {
			pdf_links.addClass('pdf').attr('target', '_blank');
		}
		
		/** Automatic email links */
		address_fields = $('#contact-information address');
		if ( address_fields.length > 0 ){
			var email_pattern = /([A-Za-z0-9_\-.]+)\@([A-Za-z0-9_\-.]+)\.([A-Za-z][A-Za-z\-.]{2,5})/g;
			var regex = new RegExp(email_pattern);
			var email_replace = '<a href="mailto:$1@$2.$3">$1@$2.$3</a>';
			address_fields.each(function(index){
				var content = $(this).html();
				$(this).html( content.replace(email_pattern, email_replace) );
			});
		}
		
	});
})(jQuery);