<div class="metabox-class-container">
	
	<div class="field">
		<label>Position</label>
		<p>
			<?php $metabox->the_field('position'); ?>
			<input type="text" name="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>">
			<span>What position does this person hold at Madico?</span>
		</p>
	</div>
	
	<div class="field">
		<label>Email</label>
		<p>
			<?php $metabox->the_field('email'); ?>
			<input type="text" name="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>">
		</p>
	</div>

</div>