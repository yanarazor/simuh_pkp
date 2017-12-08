<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('pilihan_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($pilihan->id) ? $pilihan->id : '';

?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <?php  if ($this->auth->has_permission('Pilihan.Master.Create')) : ?>
        <div class="pull-right"><?php  $this->load->view('_sub_nav');?> </div>
        <br><br>
        <?php  endif; ?>
            <div class="box-header">
                <h3>
                    <?php echo lang('pilihan_area_title'); ?>
                </h3>
            </div> 
    <div class="box-body" style="padding: 5px;padding-left: 30px;">
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('jenis_pilihan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('pilihan_field_jenis_pilihan') . lang('bf_form_label_required'), 'jenis_pilihan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='jenis_pilihan' type='text' required='required' name='jenis_pilihan' maxlength='100' value="<?php echo set_value('jenis_pilihan', isset($pilihan->jenis_pilihan) ? $pilihan->jenis_pilihan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('jenis_pilihan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nama_pilihan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('pilihan_field_nama_pilihan') . lang('bf_form_label_required'), 'nama_pilihan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nama_pilihan' type='text' required='required' name='nama_pilihan' maxlength='150' value="<?php echo set_value('nama_pilihan', isset($pilihan->nama_pilihan) ? $pilihan->nama_pilihan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nama_pilihan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('value_pilihan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('pilihan_field_value_pilihan') . lang('bf_form_label_required'), 'value_pilihan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='value_pilihan' type='text' required='required' name='value_pilihan' maxlength='150' value="<?php echo set_value('value_pilihan', isset($pilihan->value_pilihan) ? $pilihan->value_pilihan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('value_pilihan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('label_pilihan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('pilihan_field_label_pilihan') . lang('bf_form_label_required'), 'label_pilihan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='label_pilihan' type='text' required='required' name='label_pilihan' maxlength='255' value="<?php echo set_value('label_pilihan', isset($pilihan->label_pilihan) ? $pilihan->label_pilihan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('label_pilihan'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('pilihan_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/master/pilihan', lang('pilihan_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>
</div>
</div>
</div>