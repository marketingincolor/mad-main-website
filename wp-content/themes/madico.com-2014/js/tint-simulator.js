(function($) {

// Globals
var ResetProducts, ResetShades;
var transitionTime = 200;

/**
 * Generate dropdown filters
 *
 * Use a modular Handlebars template to load the data from JSON file
 */

// Storage arrays
var Products = [];
var Shades = [];

// Import JSON
$.getJSON('/wp-content/themes/madico.com/js/tint-simulator-data.json', function(data) {
	
	// Create dropdown data
	var dropdowns = [
		{ filter: "Brand", items: [{
			"label": "All",
			"value": "all"
		}] },
		{ filter: "Product", items: [] },
		{ filter: "Shade", items: [] },
	];
	
	// Fill fields values
	$.each(data.tints, function(key, val) {
		
		// Store brand items
		var brand_id = val.brand.toLowerCase();
		dropdowns[0].items.push({
			"label": val.brand,
			"value": brand_id,
			'class' : ''
		});
		
		// Work with product data
		$.each( val.products, function(key, val) {
		
			var product_id = val.name.toLowerCase().replace( " ", "-" );
			
			// Store products
			dropdowns[1].items.push({
				'label' : val.name,
				'value' : product_id,
				'class' : brand_id
			});
			
			// Store shades
			$.each( val.shades, function(key, val) {
				dropdowns[2].items.push({
					'label' : val.id,
					'value' : val.color,
					'class' : product_id
				});
			} );
			
		} );
	});
	
	// Output dropdown fields using JS templates
	var source	 = $("#dropdown-filter").html();
	$.each(dropdowns, function(key, val) {
		
		var template = Handlebars.compile(source);
		var html	 = template(dropdowns[key]);
		var selector = '#dropdown-' + val.filter.toLowerCase().replace( " ", "-" );
		
		$(selector).html(html);
	});
	
	// Store original <option>'s
	ResetProducts = $('#Product' ).html();
	ResetShades = $('#Shade' ).html();
   
   // Select the default tint to show
   selectOption('#Brand', 'Madico');
   selectOption('#Product', 'Charcool');
   selectOption('#Shade', '35 PS SR');
   
   // Trigger change event to update display
   $('.simulator .loading').delay( transitionTime * 3 ).fadeOut(transitionTime);

});


/**
 * Update Selected Dropdown Option
 */
function selectOption( dropdownSelector, text ) {
   $(dropdownSelector + ' option:selected').prop('selected', false);
   $(dropdownSelector + ' option').filter(function() { 
      return ( $(this).text() == text );
   }).prop('selected', true);
   $(dropdownSelector).trigger('change');
}


/**
 * Selective Options
 *
 * Display specific dropdown values based on previous selections
 */

// Change event function
function updateDropdowns() {

	// Vars
	var value = $(this).val();
	var id = $(this).attr('id');
	var className = value.toLowerCase().replace( " ", "-" );
	
	// Brand dropdown
	if ( id == 'Brand' ) {
		$('#Product').html( ResetProducts );
		if ( value != 'all' ) {
			$('#Product option' ).filter(':not(.' + className + ')').remove();
		}
		$('#Product').trigger('change');
	}
	
	// Brand dropdown
	else if ( id == 'Product' ) {
		$('#Shade').html( ResetShades );
		$('#Shade option' ).filter(':not(.' + className + ')').remove();
		$('#Shade').trigger('change');
	}
	
	// Brand dropdown
	else if ( id == 'Shade' ) {
	
		var label = $('option[value="' + value + '"]', this).text();
		var num = parseInt( label.replace( /^\D+/g, '') );
		var transparency = '.' + (100 - num);

		// Switch tint color
		$('.sedan .tint').animate({
			backgroundColor: value,
			opacity: transparency
		}, transitionTime);
		
		// Update primary title
		var brand = $('#Product option[value="' + $('#Product').val() + '"]').attr('class');
		var brand = brand.replace( "-", " " );
		var brand = ucwords(brand);
		var brand = brand.replace( " ", "-" );
		
		var product = $('#Product').val();
		var product = product.replace( "-", " " );
		var product = ucwords(product);
		
		var shade = $('#Shade option[value="' + value + '"]').text();
		var title = brand + ' ' + product + ' ' + shade;
		
		// Crossfade title effect
		var title_selector = $('.primary h2');
		var clone = title_selector.clone();
		clone.css('position', 'absolute');
		clone.css('top', '0');
		clone.css('width', '100%');
		$('.primary').prepend(clone);
		
		title_selector.hide();
		title_selector.text( title );
		
		clone.fadeOut(transitionTime, function(){
			clone.remove();
		});
		title_selector.fadeIn(transitionTime);
	}
}
 
// Initialize dropdown functions
$('.filter-control select').live('change', updateDropdowns);

})(jQuery);

/**
 * Helper Functions
 */

// PHP ucwords() equivalent
function ucwords(str) {
	return (str + '').replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function ($1) {
		return $1.toUpperCase();
	});
}









































