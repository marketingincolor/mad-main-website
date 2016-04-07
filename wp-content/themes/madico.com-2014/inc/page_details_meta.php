<?php global $media_access; ?>
<div class="metabox-class-container">
	
	<p class="description">Add links to files, websites, and other pages throughout the website.</p>
	
	<div class="group">
	
		<?php $mb->the_field('title'); ?>
		<div class="field">
			<label>Callout Title</label>
			<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
		</div>
	
		<?php 
		/** Multiple field group */
		while( $mb->have_fields_and_multi('links') ):
		$mb->the_group_open();
		?>
	
		<div class="group-entry">
	
			<?php $mb->the_field('name'); ?>
			<div class="field">
				<label>Name</label>
				<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
			</div>
			
			<?php 
			$mb->the_field('internal_link');
			
			/** Pages hierarchy dropdown */
			$pages = wp_dropdown_pages(array(
				'post_type' => $post->post_type, 
				'name' => $mb->get_the_name(),
				'selected' => $mb->get_the_value(),
				'show_option_none' => __('Choose one&hellip;'), 
				'sort_column'=> 'menu_order, post_title', 
				'echo' => 0
			));

			if ( ! empty($pages) ):
			?>
			<div class="field">
				<label>Internal Link</label>
				<p><?php echo $pages; ?></p>
			</div>
			<?php endif; ?>
			
			<?php $mb->the_field('external_link'); ?>
			<div class="field">
				<label>External Link <span>(http://)</span></label>
				<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
			</div>
			
			<!-- 
			<?php 
			$mb->the_field('file');
			$media_access->setGroupName( 'file-n' . $mb->get_the_index() )->setInsertButtonLabel('Add As Link');
			?>
			<div class="field upload">
				<label>File</label>
				<?php  ?>
				<p>
					<?php 
					echo $media_access->getField(array(
						'name' => $mb->get_the_name(), 
						'value' => $mb->get_the_value() 
					));
					echo $media_access->getButton(); 
					?>
				</p>
			</div>
			-->
			
			<a href="#" class="dodelete button-secondary">Remove Link</a>
			
		</div><!--// end .group-entry -->
	
		<?php 
		$mb->the_group_close();
		endwhile;
		?>
	
	</div><!--// end .group -->
	
	<p class="add-field"><a href="#" class="docopy-links button-primary">Add Link</a></p>

</div>