<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Please fix the following errors:</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

if (isset($propinsi))
{
	$propinsi = (array) $propinsi;
}
$id = isset($propinsi['kode']) ? $propinsi['kode'] : '';

?>
<div class="admin-box">
	<h3>Propinsi</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('id') ? 'error' : ''; ?>">
				<?php echo form_label('Id'. lang('bf_form_label_required'), 'propinsi_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_id' type='text' name='propinsi_id' maxlength="11" value="<?php echo set_value('propinsi_id', isset($propinsi['id']) ? $propinsi['id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('prov') ? 'error' : ''; ?>">
				<?php echo form_label('Prov', 'propinsi_prov', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_prov' type='text' name='propinsi_prov' maxlength="100" value="<?php echo set_value('propinsi_prov', isset($propinsi['prov']) ? $propinsi['prov'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('prov'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('keterangan') ? 'error' : ''; ?>">
				<?php echo form_label('Keterangan', 'propinsi_keterangan', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_keterangan' type='text' name='propinsi_keterangan' maxlength="100" value="<?php echo set_value('propinsi_keterangan', isset($propinsi['keterangan']) ? $propinsi['keterangan'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('keterangan'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('map_id') ? 'error' : ''; ?>">
				<?php echo form_label('Map Id', 'propinsi_map_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_map_id' type='text' name='propinsi_map_id' maxlength="11" value="<?php echo set_value('propinsi_map_id', isset($propinsi['map_id']) ? $propinsi['map_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('map_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('created_by') ? 'error' : ''; ?>">
				<?php echo form_label('Created By', 'propinsi_created_by', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_created_by' type='text' name='propinsi_created_by' maxlength="11" value="<?php echo set_value('propinsi_created_by', isset($propinsi['created_by']) ? $propinsi['created_by'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('created_by'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('date_created') ? 'error' : ''; ?>">
				<?php echo form_label('Date Created', 'propinsi_date_created', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_date_created' type='text' name='propinsi_date_created' maxlength="1" value="<?php echo set_value('propinsi_date_created', isset($propinsi['date_created']) ? $propinsi['date_created'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('date_created'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('updated_by') ? 'error' : ''; ?>">
				<?php echo form_label('Updated By', 'propinsi_updated_by', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_updated_by' type='text' name='propinsi_updated_by' maxlength="11" value="<?php echo set_value('propinsi_updated_by', isset($propinsi['updated_by']) ? $propinsi['updated_by'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('updated_by'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('last_updated') ? 'error' : ''; ?>">
				<?php echo form_label('Last Updated', 'propinsi_last_updated', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_last_updated' type='text' name='propinsi_last_updated' maxlength="11" value="<?php echo set_value('propinsi_last_updated', isset($propinsi['last_updated']) ? $propinsi['last_updated'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('last_updated'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('propinsi_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/master/propinsi', lang('propinsi_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>