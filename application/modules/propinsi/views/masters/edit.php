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
<div class="admin-box box box-primary">
	<div class="box-body">
	<?php echo form_open($this->uri->uri_string(), ''); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('id') ? 'error' : ''; ?> col-sm-12">
				<?php echo form_label('Id'. lang('bf_form_label_required'), 'propinsi_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_id' type='text' class="form-control" name='propinsi_id' maxlength="11" value="<?php echo set_value('propinsi_id', isset($propinsi['id']) ? $propinsi['id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('prov') ? 'error' : ''; ?> col-sm-12">
				<?php echo form_label('Prov', 'propinsi_prov', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_prov' type='text' class="form-control" name='propinsi_prov' maxlength="100" value="<?php echo set_value('propinsi_prov', isset($propinsi['prov']) ? $propinsi['prov'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('prov'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('keterangan') ? 'error' : ''; ?> col-sm-12">
				<?php echo form_label('Keterangan', 'propinsi_keterangan', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_keterangan' type='text' class="form-control" name='propinsi_keterangan' maxlength="100" value="<?php echo set_value('propinsi_keterangan', isset($propinsi['keterangan']) ? $propinsi['keterangan'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('keterangan'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('map_id') ? 'error' : ''; ?> col-sm-12">
				<?php echo form_label('Map Id', 'propinsi_map_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='propinsi_map_id' type='text' class="form-control" name='propinsi_map_id' maxlength="11" value="<?php echo set_value('propinsi_map_id', isset($propinsi['map_id']) ? $propinsi['map_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('map_id'); ?></span>
				</div>
			</div>
			<div class="control-group <?php echo form_error('koordinat_y') ? 'error' : ''; ?> col-sm-6">
				<?php echo form_label('Long', 'koordinat_y', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='koordinat_y' type='text' class="form-control" name='koordinat_y' maxlength="11" value="<?php echo set_value('koordinat_y', isset($propinsi['koordinat_y']) ? $propinsi['koordinat_y'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('koordinat_y'); ?></span>
				</div>
			</div>
			<div class="control-group <?php echo form_error('koordinat_x') ? 'error' : ''; ?> col-sm-6">
				<?php echo form_label('lat', 'koordinat_x', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='koordinat_x' type='text' class="form-control" name='koordinat_x' maxlength="11" value="<?php echo set_value('koordinat_x', isset($propinsi['koordinat_x']) ? $propinsi['koordinat_x'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('koordinat_x'); ?></span>
				</div>
				
			</div>
			<div class="control-group <?php echo form_error('koordinat') ? 'error' : ''; ?> col-sm-12">
				<?php echo form_label('Koordinat Polygon', 'koordinat', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='koordinat' type='text' class="form-control" name='koordinat' value="<?php echo set_value('koordinat', isset($propinsi['koordinat']) ? $propinsi['koordinat'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('koordinat'); ?></span>
				</div>
				
			</div>
		</div>
        <div class="box-footer">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('propinsi_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/master/propinsi', lang('propinsi_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Propinsi.Master.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('propinsi_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('propinsi_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>