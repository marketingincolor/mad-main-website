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

	</body>

</html>