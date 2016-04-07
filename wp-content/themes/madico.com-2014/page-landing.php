<?php 
/**
 * Template Name: Landing
 *
 * Landing page template without a sidebar
 */

get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns">
		<div class="main">
			<?php the_post(); ?>
			<h1><?php the_title(); ?></h1>

			<div class="cms">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="sidebar">
			<?php 
			// Lintec Landing Page
			if( is_page('lantic-technologies-china') ) {
				?>
				<ul>
					<li>
						<h2>Get in Touch</h2>
						<div class="textwidget">
							<h3>USA</h3>
							<p>Phone: 1-302-657-0168<br />
							Fax: 1-302-657-0167<br />
							341 Wagon Wheel Lane, Hockessin, DE 19707<br />
							<a href="mailto:dyang@lantictech.com">dyang@lantictech.com</a></p>
							<hr />           
							<h3>China</h3>
							<p>Phone: 86-512-63004468<br />
							Mobile: 139-13063135<br />
							Fax: 86-512-63004478<br />
							<a href="mailto:china@lantictech.com">china@lantictech.com</a></p>
						</div>
					</li>
				</ul>
				<?php
			}
			?>
		</div>
	</div><!--// end #columns -->

</div>

</div>
</div>
</div>

<?php get_footer(); ?>