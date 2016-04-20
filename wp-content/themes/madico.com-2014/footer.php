<?php
global $section;
$terms_conditions = ( $section == 'window-film' ) ? get_page_link(4683) : get_stylesheet_directory_uri() . '/media/Madico-Terms-and-Conditions.pdf';
?>
	<div id="footer">
		<div class="container">
			<div class="links clearfix">
				<?php _madico_footer_menu(); ?>
				<p class="copyright">
					<?php echo __('Copyright', 'madicotheme') . ' &copy; ' . date("Y") . ' Madico, Inc.'; ?>
					<a href="<?php echo $terms_conditions; ?>"><?php _e('Terms &amp; Conditions', 'madicotheme'); ?></a>
					<?php if ( $section == 'window-film' ): ?>
					<a href="<?php echo get_page_link(6393); ?>"><?php _e('Privacy Policy', 'madicotheme'); ?></a>
					<?php endif; ?>
				</p>
			</div>
			<div class="icons">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logos.gif" alt="Madico is Intertek &amp; ANAB Accredited" />
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PXJ38D"
	                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PXJ38D');</script>
	<!-- End Google Tag Manager -->
	</body>

</html>