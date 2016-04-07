<?php
/**
 * WPML Persistence
 *
 * Ensures languages are persistent across a session and dont reset when a url doesnt include the language variable.
 *
 * Author: Nathan Rijksen
 * Website: http://naatan.com/
 * Project URL: https://raw.github.com/Naatan/WPML-Persistence/master/wpml-persistence.php
 */
class WPML_Persistence extends SitePressLanguageSwitcher
{
	
	/**
	 * Constructor
	 * 
	 * @returns	void					
	 */
	function __construct()
	{
		$this->register_hooks();
	}
	
	/**
	 * Register hooks
	 * 
	 * @returns	void							
	 */
	function register_hooks()
	{
		add_action('template_redirect', array($this, 'set_language_cookie'), 2);
		add_action('template_redirect', array($this, 'validate_page_language'), 3);
		add_filter('WPML_filter_link', array($this, 'filter_dropdown_links'), 99, 2 );
	}
	
	/**
	 * Filter the dropdown link to add a URL param to force a language switch
	 */
	function filter_dropdown_links( $url, $lang ) {
		return $url . '?lang=' . $lang['language_code'];
	}
	
	/**
	 * Validate if the current page requested is in the users selected language, and if not - redirect
	 * 
	 * @returns	void							
	 */
	function validate_page_language()
	{
		// Don't validate if we don't have a preferred language
		if ( ! isset($_COOKIE['_icl_current_language_persist']) )
			return;
		
		// Get preferred language and available langauges
		$lang 		= $_COOKIE['_icl_current_language_persist'];
		$languages 	= icl_get_languages('skip_missing=1');
		
		// If it's not available in the preferred language there's no point in validating
		if ( !isset( $languages[$lang] ) )
			return;
		
		// Get relevant URI's for validation
		$site_uri = preg_replace('/^.*?\/\/.*?(\/.*)$/','$1', site_url() ) . '/';
		$lang_uri = preg_replace('/^.*?\/\/.*?(\/.*)$/','$1', $languages[$lang]['url'] );
		$req_uri  = $_SERVER['REQUEST_URI'];
		
		// Check if we need to force the language uri
		$redirect = false;
		if ( stripos( $req_uri, $lang_uri ) === false )
			$redirect = true;
		
		// Check if request uri has the language uri
		if ( $req_uri == $site_uri && $lang_uri != $site_uri )
			$redirect = true;
			
		// If we need to redirect
		if ( $redirect ) {
			// Avoid conflict with RSS feeds
			if ( is_feed() )
				return;
				
			// Where to redirect
			$redirect_url = $languages[$lang]['url'];
				
			// Preserve URL parameters
			$parsed = parse_url( $req_uri );
			if ( isset( $parsed['query'] ) )
				$redirect_url .= '?' . $parsed['query'];
			
			// Redirect to language page
			wp_redirect( $redirect_url );
			exit;
		}
		
	}
	
	/**
	 * Set the persistent language cookie, which holds the users preferred language
	 * 
	 * @returns	void							
	 */
	function set_language_cookie()
	{
		// Only set the cookie if the ?lang parameter is used or the cookie has not been set yet
		if ( isset( $_COOKIE['_icl_current_language_persist'] ) && ! isset( $_GET['lang'] ) )
			return;
		
		// Get active language, GET param takes priority
		$lang = isset($_GET['lang']) ? $_GET['lang'] : ICL_LANGUAGE_CODE;
		
		// Cookie properties
		$cookie_domain 	= defined('COOKIE_DOMAIN') 	? COOKIE_DOMAIN : $_SERVER['HTTP_HOST'];
		$cookie_path 	= defined('COOKIEPATH') 		? COOKIEPATH 	: '/';
		
		// Set the cookie
		setcookie('_icl_current_language_persist', $lang, time()+86400, $cookie_path, $cookie_domain);
		$_COOKIE['_icl_current_language_persist'] = $lang;
	}
}
$wpml_persistence = new WPML_Persistence();