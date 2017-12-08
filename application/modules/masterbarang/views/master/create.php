<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('masterbarang_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($masterbarang->id) ? $masterbarang->id : '';

?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <?php if ($this->auth->has_permission('Masterbarang.Master.Create')) : ?>
        <div class="pull-right"><?php $this->load->view('_sub_nav');?> </div>
        <br><br>
        <?php endif; ?>
            <div class="box-header">
                <h3>
                    <?php echo lang('masterbarang_area_title'); ?>
                </h3>
            </div> 
    <div class="box-body" style="padding: 5px;padding-left: 30px;">

    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('kd_barang') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_kd_barang') . lang('bf_form_label_required'), 'kd_barang', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='kd_barang' type='text' required='required' name='kd_barang' maxlength='255' value="<?php echo set_value('kd_barang', isset($masterbarang->kd_barang) ? $masterbarang->kd_barang : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('kd_barang'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nm_barang') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_nm_barang') . lang('bf_form_label_required'), 'nm_barang', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nm_barang' type='text' required='required' name='nm_barang' maxlength='255' value="<?php echo set_value('nm_barang', isset($masterbarang->nm_barang) ? $masterbarang->nm_barang : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nm_barang'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('type') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_type'), 'type', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='type' type='text' name='type' maxlength='255' value="<?php echo set_value('type', isset($masterbarang->type) ? $masterbarang->type : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('type'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('Spesifikasi') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_Spesifikasi'), 'Spesifikasi', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <?php echo form_textarea(array('name' => 'Spesifikasi', 'id' => 'Spesifikasi', 'rows' => '5', 'cols' => '80', 'value' => set_value('Spesifikasi', isset($masterbarang->Spesifikasi) ? $masterbarang->Spesifikasi : ''))); ?>
                    <span class='help-inline'><?php echo form_error('Spesifikasi'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('stok') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_stok'), 'stok', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='stok' type='text' name='stok' maxlength='5' value="<?php echo set_value('stok', isset($masterbarang->stok) ? $masterbarang->stok : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('stok'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('satuan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_satuan'), 'satuan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='satuan' type='text' name='satuan' maxlength='50' value="<?php echo set_value('satuan', isset($masterbarang->satuan) ? $masterbarang->satuan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('satuan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('keterangan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_keterangan'), 'keterangan', array('class' => 'control-label')); ?>
				 <div class='controls'>
                    <?php echo form_textarea(array('name' => 'keterangan', 'id' => 'keterangan', 'rows' => '5', 'cols' => '80', 'value' => set_value('keterangan', isset($masterbarang->keterangan) ? $masterbarang->keterangan : ''))); ?>
                    <span class='help-inline'><?php echo form_error('keterangan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('kd_kategori') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_kd_kategori'), 'kd_kategori', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='kd_kategori' type='text' name='kd_kategori' maxlength='50' value="<?php echo set_value('kd_kategori', isset($masterbarang->kd_kategori) ? $masterbarang->kd_kategori : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('kd_kategori'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('tahun') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_tahun'), 'tahun', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='tahun' type='text' name='tahun' maxlength='4' value="<?php echo set_value('tahun', isset($masterbarang->tahun) ? $masterbarang->tahun : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tahun'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('aktif') ? ' error' : ''; ?>">
                <?php echo form_label(lang('masterbarang_field_aktif'), '', array('class' => 'control-label', 'id' => 'aktif_label')); ?>
                <div class='controls' aria-labelled-by='aktif_label'>
                    <label class='radio' for='aktif_option1'>
                        <input id='aktif_option1' name='aktif' type='radio' value='option1' <?php echo set_radio('aktif', 'option1', isset($masterbarang->aktif) && $masterbarang->aktif == 'option1'); ?> />
                       Ya
                    </label>
                    <label class='radio' for='aktif_option2'>
                        <input id='aktif_option2' name='aktif' type='radio' value='option2' <?php echo set_radio('aktif', 'option2', isset($masterbarang->aktif) && $masterbarang->aktif == 'option2'); ?> />
                        Tidak
                    </label>
                    <span class='help-inline'><?php echo form_error('aktif'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('masterbarang_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/master/masterbarang', lang('masterbarang_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>
</div>
</div>
</div>