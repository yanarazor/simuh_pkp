
<link href="<?php echo base_url() ?>assets/css/custom_inputs.css" rel="stylesheet" type="text/css" />



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h3>
               Ubah&nbsp;<?php echo lang('datausulan_area_title'); ?>
            </h3>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="body card-underline">
        <?php $this->load->view('_sub_nav');?>            
    <br><br><br>


<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('datausulan_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($datausulan->id) ? $datausulan->id : '';

?>
<div class='admin-box'>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            
     		<div class="control-group <?php echo form_error('kode_eselon') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kode_eselon') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
					<span class="custom-dropdown small">
                	<select name="kode_eselon" id="kode_eselon" class="span6 chosen-select-deselect">
						<option value="">-- Pilih Kode Eselon --</option>
						<?php if (isset($eseloni) && is_array($eseloni) && count($eseloni)):?>
						<?php foreach($eseloni as $eselonis):?>
							<option value="<?php echo $eselonis->kode_eselon?>" <?php if(isset($datausulan->kode_eselon))  echo  ($eselonis->kode_eselon==$datausulan->kode_eselon) ? "selected" : ""; ?>><?php echo $eselonis->nama_eselon; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
					</span>
					<span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('kode_satker') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kode_satker') . lang('bf_form_label_required'), 'kode_satker', array('class' => 'control-label')); ?>
				<div class='controls'>
				<span class="custom-dropdown small">
                	<select name="kode_satker" id="kode_satker" class="span6 chosen-select-deselect">
						<option value="">-- Pilih Kode Satker --</option>
						<?php if (isset($satkeri) && is_array($satkeri) && count($satkeri)):?>
						<?php foreach($satkeri as $satkeris):?>
							<option value="<?php echo $satkeris->kode_satker?>" <?php if(isset($datausulan->kode_satker))  echo  ($satkeris->kode_satker==$datausulan->kode_satker) ? "selected" : ""; ?>><?php echo $satkeris->nama_satker; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
					</span>
					<span class='help-inline'><?php echo form_error('kode_satker'); ?></span>
				</div>
			</div>

            <div class="control-group<?php echo form_error('no_surat_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_no_surat_usulan') . lang('bf_form_label_required'), 'no_surat_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css" id='no_surat_usulan' type='text' required='required' name='no_surat_usulan' maxlength='255' value="<?php echo set_value('no_surat_usulan', isset($datausulan->no_surat_usulan) ? $datausulan->no_surat_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_usulan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('tgl_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_tgl_usulan') . lang('bf_form_label_required'), 'tgl_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css" id='tgl_usulan' type='text' required='required' name='tgl_usulan'  value="<?php echo set_value('tgl_usulan', isset($datausulan->tgl_usulan) ? $datausulan->tgl_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_usulan'); ?></span>
                </div>
            </div>



	 <div class="control-group<?php echo form_error('nilai_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_nilai_usulan') . lang('bf_form_label_required'), 'nilai_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css" id='nilai_usulan' type='text' required='required' name='nilai_usulan' maxlength='255' value="<?php echo set_value('nilai_usulan', isset($datausulan->nilai_usulan) ? $datausulan->nilai_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_usulan'); ?></span>
                </div>
            </div>
			
			<div class="control-group <?php echo form_error('kategori_usulan') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kategori_usulan') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
					<span class="custom-dropdown small">
                	<select name="kategori_usulan" id="kategori_usulan" class="span6 chosen-select-deselect">
						<option value="">-- Pilih Kategori Usulan --</option>
						<?php if (isset($KategoriUsulani) && is_array($KategoriUsulani) && count($KategoriUsulani)):?>
						<?php foreach($KategoriUsulani as $KategoriUsulanis):?>
							<option value="<?php echo $KategoriUsulanis->value_pilihan?>" <?php if(isset($datausulan->kategori_usulan))  echo  ($KategoriUsulanis->value_pilihan==$datausulan->kategori_usulan) ? "selected" : ""; ?>><?php echo $KategoriUsulanis->label_pilihan; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
					</span>
					<span class='help-inline'><?php echo form_error('kategori_usulan'); ?></span>
				</div>
			</div>
			
			
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> class='btn btn-primary' value="<?php echo lang('datausulan_action_edit'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/datausulan', lang('datausulan_cancel'), 'class="btn btn-warning"'); ?>
            
            <?php if ($this->auth->has_permission('DataUsulan.Content.Delete') and $datausulan->status != "1") : ?>
                <?php echo lang('bf_or'); ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('datausulan_delete_confirm'))); ?>');">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('datausulan_delete_record'); ?>
                </button>
            <?php endif; ?>
        </fieldset>
    <?php echo form_close(); ?>
</div>

    </div>
    </div>   
    </div>
    </div>
   
</section>
 
</script>