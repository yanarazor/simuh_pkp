<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('satker_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($satker->id) ? $satker->id : '';

?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <?php  if ($this->auth->has_permission('Satker.Master.Create')) : ?>
        <div class="pull-right"><?php  $this->load->view('_sub_nav');?> </div>
        <br><br>
        <?php  endif; ?>
            <div class="box-header">
                <h3>
                    <?php echo lang('satker_area_title'); ?>
                </h3>
            </div> 
    <div class="box-body" style="padding: 5px;padding-left: 30px;">
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
			
	<div class="control-group<?php echo form_error('kode_eselon') ? ' error' : ''; ?>">
                <?php echo form_label(lang('satker_field_kode_eselon'), 'satker_field_kode_eselon', array('class' => 'control-label')); ?>
                <div class='controls'>
                	<select name="kode_eselon" id="kode_eselon" class="chosen-select-deselect span5">
						<option value="">-- Pilih Eselon I --</option>
						<?php if (isset($eselonI) && is_array($eselonI) && count($eselonI)):?>
						<?php foreach($eselonI as $eselonIs):?>
							<option value="<?php echo $eselonIs->kode_eselon?>" <?php if(isset($satker))  echo  ($eselonIs->kode_eselon==$satker) ? "selected" : ""; ?>><?php echo $eselonIs->nama_eselon; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
                    <span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('kode_satker') ? ' error' : ''; ?>">
                <?php echo form_label(lang('satker_field_kode_satker') . lang('bf_form_label_required'), 'kode_satker', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='kode_satker' type='text' required='required' name='kode_satker' maxlength='25' value="<?php echo set_value('kode_satker', isset($satker->kode_satker) ? $satker->kode_satker : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('kode_satker'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nama_satker') ? ' error' : ''; ?>">
                <?php echo form_label(lang('satker_field_nama_satker') . lang('bf_form_label_required'), 'nama_satker', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nama_satker' type='text' required='required' name='nama_satker' maxlength='150' value="<?php echo set_value('nama_satker', isset($satker->nama_satker) ? $satker->nama_satker : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nama_satker'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('satker_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/master/satker', lang('satker_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>
</div>
</div>
</div>