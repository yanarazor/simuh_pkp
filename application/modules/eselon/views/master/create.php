<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('eselon_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($eselon->id) ? $eselon->id : '';

?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <?php if ($this->auth->has_permission('Eselon.Master.Create')) : ?>
        <div class="pull-right"><?php $this->load->view('_sub_nav');?> </div>
        <br><br>
        <?php endif; ?>
            <div class="box-header">
                <h3>
                    <?php echo lang('eselon_area_title'); ?>
                </h3>
            </div> 
    <div class="box-body" style="padding: 5px;padding-left: 30px;">
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('kode_eselon') ? ' error' : ''; ?>">
                <?php echo form_label(lang('eselon_field_kode_eselon') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='kode_eselon' type='text' required='required' name='kode_eselon' maxlength='25' value="<?php echo set_value('kode_eselon', isset($eselon->kode_eselon) ? $eselon->kode_eselon : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nama_eselon') ? ' error' : ''; ?>">
                <?php echo form_label(lang('eselon_field_nama_eselon') . lang('bf_form_label_required'), 'nama_eselon', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nama_eselon' type='text' required='required' name='nama_eselon' maxlength='100' value="<?php echo set_value('nama_eselon', isset($eselon->nama_eselon) ? $eselon->nama_eselon : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nama_eselon'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('eselon_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/master/eselon', lang('eselon_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>
</div>
</div>
</div>