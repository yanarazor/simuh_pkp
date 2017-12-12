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

if (isset($kabupaten))
{
	$kabupaten = (array) $kabupaten;
}
$id = isset($kabupaten['kode']) ? $kabupaten['kode'] : '';

?>
<div class="admin-box">
	<h3>kabupaten</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('id') ? 'error' : ''; ?>">
				<?php echo form_label('Id'. lang('bf_form_label_required'), 'kabupaten_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kabupaten_id' type='text' name='kabupaten_id' maxlength="11" value="<?php echo set_value('kabupaten_id', isset($kabupaten['id']) ? $kabupaten['id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('kab') ? 'error' : ''; ?>">
				<?php echo form_label('Kab'. lang('bf_form_label_required'), 'kabupaten_kab', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kabupaten_kab' type='text' name='kabupaten_kab' maxlength="100" value="<?php echo set_value('kabupaten_kab', isset($kabupaten['kab']) ? $kabupaten['kab'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('kab'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('keterangan') ? 'error' : ''; ?>">
				<?php echo form_label('Keterangan', 'kabupaten_keterangan', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kabupaten_keterangan' type='text' name='kabupaten_keterangan' maxlength="100" value="<?php echo set_value('kabupaten_keterangan', isset($kabupaten['keterangan']) ? $kabupaten['keterangan'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('keterangan'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('id_provinsi') ? 'error' : ''; ?>">
				<?php echo form_label('Provinsi'. lang('bf_form_label_required'), 'kabupaten_id_provinsi', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='kabupaten_id_provinsi' type='text' name='kabupaten_id_provinsi' maxlength="11" value="<?php echo set_value('kabupaten_id_provinsi', isset($kabupaten['id_provinsi']) ? $kabupaten['id_provinsi'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('id_provinsi'); ?></span>
				</div>
			</div> 

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('kabupaten_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/masters/kabupaten', lang('kabupaten_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>