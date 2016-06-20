<?php
global $section;
//$terms_conditions = ( $section == 'window-film' ) ? get_page_link(4683) : get_stylesheet_directory_uri() . '/media/Madico-Terms-and-Conditions.pdf';
if ( $section == 'window-film' ) {
    $terms_conditions = get_page_link(4683);
} elseif ($section == 'specialty-film') {
    $terms_conditions = get_page_link(9731);
} elseif ($section == 'pv-backsheets') {
    $terms_conditions = get_page_link(9733);
} else {
    //$terms_conditions = get_stylesheet_directory_uri() . '/media/Madico-Terms-and-Conditions.pdf';
    $terms_conditions = get_page_link(9729);
}

?>
	<div id="footer">
		<div class="container">
			<div class="links clearfix">
				<?php wp_nav_menu(array("depth" => 1, 'menu_class' => 'menu clearfix')); ?>
				<p class="copyright">
					<?php echo __('Copyright', 'madicotheme') . ' &copy; ' . date("Y") . ' Madico, Inc.'; ?>
					<!--<a href="<?php echo $terms_conditions; ?>"><?php _e('Terms &amp; Conditions', 'madicotheme'); ?></a>-->
					<?php if ( $section == 'window-film' ): ?>
					<!--<a href="<?php echo get_page_link(6393); ?>"><?php _e('Privacy Policy', 'madicotheme'); ?></a>-->
					<?php endif; ?>
				</p>
			</div>
			<div class="icons">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logos.png" alt="Madico is Intertek &amp; ANAB Accredited" />
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/global.js"></script>
<script type="text/javascript">
adroll_adv_id = "L2B2VNCRHZDNPOKZWSZFWQ";
adroll_pix_id = "JJLCAZAM25HUPALQ5DOR3G";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KQ2BB3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KQ2BB3');</script>
<!-- End Google Tag Manager -->
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vimeo.ga.js"></script>
	</body>

</html>
