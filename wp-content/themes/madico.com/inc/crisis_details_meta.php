<?php global $crisis_media_access, $crisis_details; ?>
<div class="metabox-class-container">
	
	<!--<a href="#" class="dodelete-links button-primary">Remove All</a>-->
	
	<div class="field">
		<label>Activate</label>
		<p>
			<?php $metabox->the_field('active'); ?>
			<span class="checkbox alert"><input type="checkbox" name="<?php $mb->the_name(); ?>" value="yes"<?php $mb->the_checkbox_state('yes'); ?>/> Yes</span>
			<span>By checking this box you will send out a company wide alert email to <strong>info@madico.com</strong>.</span>
		</p>
	</div>
	
	<div class="field">
		<label>Issue Date</label>
		<p>
			<?php $metabox->the_field('issue_date'); ?>
			<input type="text" name="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>">
			<span>Enter the date the crisis was issued</span>
		</p>
	</div>
	
	<div class="field">
		<label>Primary Address</label>
		<p>
			<?php $metabox->the_field('primary_address'); ?>
			<textarea name="<?php $metabox->the_name(); ?>" rows="4"><?php $metabox->the_value(); ?></textarea>
			<span>Enter in a main address for Madico</span>
		</p>
	</div>
	
	<div class="field">
		<label>Main Contact</label>
		<p>
			<?php $metabox->the_field('main_contact'); ?>
			<textarea name="<?php $metabox->the_name(); ?>" rows="4"><?php $metabox->the_value(); ?></textarea>
			<span>Enter name, phone, email</span>
		</p>
	</div>
	
	<h4>Related Links</h4>
	
	<p class="description">Add links to files, websites, and team members by entering in a <strong>Name</strong>, <strong>Address</strong>. Upload new documents using the "Add Media" box.</p>
	
	<div class="group">
	
		<?php 
		/** Multiple field group */
		while( $crisis_details->have_fields_and_multi('links') ):
		$crisis_details->the_group_open();
		?>
	
		<div class="group-entry">
	
			<?php $crisis_details->the_field('title'); ?>
			<div class="field">
				<label>Name</label>
				<p><input type="text" name="<?php $crisis_details->the_name(); ?>" value="<?php $crisis_details->the_value(); ?>" /></p>
			</div>
			
			<div class="field upload">
				<label>Link/File <span>(http://)</span></label>
				<?php 
				$crisis_details->the_field('file');
				$crisis_media_access->setGroupName( 'file-n' . $crisis_details->get_the_index() )->setInsertButtonLabel('Add As Link')->setTab('type');
				?>
				<p>
					<?php 
					echo $crisis_media_access->getField( array('name' => $crisis_details->get_the_name(), 'value' => $crisis_details->get_the_value() ) );
					echo $crisis_media_access->getButton(); 
					?>
				</p>
			</div>
			
			<p><a href="#" class="dodelete button-primary">Remove Link</a></p>
			
		</div><!--// end .group-entry -->
	
		<?php 
		$crisis_details->the_group_close();
		endwhile;
		?>
	
	</div><!--// end .group -->
	
	<p class="add-field"><a href="#" class="docopy-links button-primary">Add Link</a></p>

</div>

