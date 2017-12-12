  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datepicker/datepicker3.css">
<link href="<?php echo base_url() ?>assets/css/custom_inputs.css" rel="stylesheet" type="text/css" />
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
<div class="box box-warning">
<div class="box-body">
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            
     		<div class="control-group <?php echo form_error('kode_eselon') ? 'error' : ''; ?> col-sm-12">
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
			<div class="control-group <?php echo form_error('kode_eselon') ? 'error' : ''; ?> col-sm-12">
                <?php echo form_label("Provinsi" . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <span class="custom-dropdown small">
                    <select name="provinsi" id="provinsi" class="form-control chosen-select-deselect">
                        <option value="">-- Pilih Provinsi --</option>
                        <?php if (isset($provinsis) && is_array($provinsis) && count($provinsis)):?>
                        <?php foreach($provinsis as $record):?>
                            <option value="<?php echo $record->id?>" <?php if(isset($datausulan->provinsi))  echo  ($record->id==$datausulan->provinsi) ? "selected" : ""; ?>><?php echo $record->prov; ?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                    </select>
                    </span>
                    <span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
                </div>
            </div>
            <div class="control-group <?php echo form_error('kabupaten') ? 'error' : ''; ?> col-sm-12">
                <?php echo form_label("Kabupaten" . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <span class="custom-dropdown small">
                    <select name="kabupaten" id="ID_KAB" class="form-control chosen-select-deselect">
                        <option value="">-- Pilih Provinsi --</option>
                        <?php if (isset($kabupatens) && is_array($kabupatens) && count($kabupatens)):?>
                        <?php foreach($kabupatens as $record):?>
                            <option value="<?php echo $record->kdkabkota?>" <?php if(isset($datausulan->kabupaten))  echo  ($record->kdkabkota==$datausulan->kabupaten) ? "selected" : ""; ?>><?php echo $record->nmkabkota; ?></option>
                            <?php endforeach;?>
                        <?php endif;?>
                    </select>
                    </span>
                    <span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
                </div>
            </div>
			<div class="control-group <?php echo form_error('kode_satker') ? 'error' : ''; ?> col-sm-12">
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
            <div class="control-group<?php echo form_error('dinas') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Dinas" . lang('bf_form_label_required'), 'dinas', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='dinas' type='text' required='required' name='dinas' maxlength='255' value="<?php echo set_value('dinas', isset($datausulan->dinas) ? $datausulan->dinas : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('dinas'); ?></span>
                </div>
            </div>
             <div class="control-group<?php echo form_error('penerima_bantuan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Penerima Bantuan" . lang('bf_form_label_required'), 'penerima_bantuan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='penerima_bantuan' type='text' required='required' name='penerima_bantuan' maxlength='255' value="<?php echo set_value('penerima_bantuan', isset($datausulan->penerima_bantuan) ? $datausulan->penerima_bantuan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('penerima_bantuan'); ?></span>
                </div>
            </div>
             <div class="control-group<?php echo form_error('kegiatan_bantuan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Kegiatan Bantuan" . lang('bf_form_label_required'), 'kegiatan_bantuan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='kegiatan_bantuan' type='text' required='required' name='kegiatan_bantuan' maxlength='255' value="<?php echo set_value('kegiatan_bantuan', isset($datausulan->kegiatan_bantuan) ? $datausulan->kegiatan_bantuan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('kegiatan_bantuan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('no_surat_usulan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label(lang('datausulan_field_no_surat_usulan') . lang('bf_form_label_required'), 'no_surat_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='no_surat_usulan' type='text' required='required' name='no_surat_usulan' maxlength='255' value="<?php echo set_value('no_surat_usulan', isset($datausulan->no_surat_usulan) ? $datausulan->no_surat_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_usulan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('tgl_usulan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label(lang('datausulan_field_tgl_usulan') . lang('bf_form_label_required'), 'tgl_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css datepicker" id='tgl_usulan' type='text' required='required' name='tgl_usulan'  value="<?php echo set_value('tgl_usulan', isset($datausulan->tgl_usulan) ? $datausulan->tgl_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_usulan'); ?></span>
                </div>
            </div>



	       <div class="control-group<?php echo form_error('nilai_usulan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label(lang('datausulan_field_nilai_usulan') . lang('bf_form_label_required'), 'nilai_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css" id='nilai_usulan' type='text' required='required' name='nilai_usulan' maxlength='255' value="<?php echo set_value('nilai_usulan', isset($datausulan->nilai_usulan) ? $datausulan->nilai_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_usulan'); ?></span>
                </div>
            </div>
			
			<div class="control-group <?php echo form_error('kategori_usulan') ? 'error' : ''; ?> col-sm-12">
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
        <fieldset>
            <legend>Barang</legend>
            <div class="control-group<?php echo form_error('nama_barang') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Nama Barang" . lang('bf_form_label_required'), 'nama_barang', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='id_barang' type='hidden' name='id_barang' maxlength='255' value="<?php echo set_value('id_barang', isset($detilbarangs->id) ? $detilbarangs->id : ''); ?>" />
                    <input class="form-control" id='nama_barang' type='text' required='required' name='nama_barang' maxlength='255' value="<?php echo set_value('nama_barang', isset($detilbarangs->nama_barang) ? $detilbarangs->nama_barang : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nama_barang'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('merek') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Merek", 'merek', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='merek' type='text' name='merek' maxlength='255' value="<?php echo set_value('merek', isset($detilbarangs->merek) ? $detilbarangs->merek : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('merek'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('nup') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("NUP" , 'nup', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='nup' type='text' name='nup' maxlength='255' value="<?php echo set_value('nup', isset($detilbarangs->nup) ? $detilbarangs->nup : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nup'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('tahun_perolehan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Tahun", 'tahun_perolehan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='tahun_perolehan' type='text' name='tahun_perolehan' maxlength='255' value="<?php echo set_value('tahun_perolehan', isset($detilbarangs->tahun_perolehan) ? $detilbarangs->tahun_perolehan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tahun_perolehan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('jumlah') ? ' error' : ''; ?> col-sm-6">
                <?php echo form_label("Jumlah" , 'jumlah', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='jumlah' type='text' name='jumlah' maxlength='255' value="<?php echo set_value('jumlah', isset($detilbarangs->jumlah) ? $detilbarangs->jumlah : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('jumlah'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('satuan_jumlah') ? ' error' : ''; ?> col-sm-6">
                <?php echo form_label("Satuan Jumlah", 'satuan_jumlah', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='satuan_jumlah' type='text' name='satuan_jumlah' maxlength='255' value="<?php echo set_value('satuan_jumlah', isset($detilbarangs->satuan_jumlah) ? $detilbarangs->satuan_jumlah : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('satuan_jumlah'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('harga_satuan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Harga Satuan" , 'harga_satuan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='harga_satuan' type='text' name='harga_satuan' maxlength='255' value="<?php echo set_value('harga_satuan', isset($detilbarangs->harga_satuan) ? $detilbarangs->harga_satuan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('harga_satuan'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('nilai_perolehan') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Nilai Perolehan", 'nilai_perolehan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='nilai_perolehan' type='text' name='nilai_perolehan' maxlength='255' value="<?php echo set_value('nilai_perolehan', isset($detilbarangs->nilai_perolehan) ? $detilbarangs->nilai_perolehan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_perolehan'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('nilai_buku') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Nilai Buku", 'nilai_buku', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='nilai_buku' type='text' name='nilai_buku' maxlength='255' value="<?php echo set_value('nilai_buku', isset($detilbarangs->nilai_buku) ? $detilbarangs->nilai_buku : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_buku'); ?></span>
                </div>
            </div>
            <div class="control-group<?php echo form_error('kondisi') ? ' error' : ''; ?> col-sm-12">
                <?php echo form_label("Kondisi", 'kondisi', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="form-control" id='kondisi' type='text' name='kondisi' maxlength='255' value="<?php echo set_value('kondisi', isset($detilbarangs->kondisi) ? $detilbarangs->kondisi : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('kondisi'); ?></span>
                </div>
            </div>

        </fieldset>
        </div>
        <div class='box-footer'>
            <input type='submit' name='save' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> class='btn btn-primary' value="<?php echo lang('datausulan_action_edit'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/datausulan', lang('datausulan_cancel'), 'class="btn btn-warning"'); ?>
            
            <?php if ($this->auth->has_permission('DataUsulan.Content.Delete') and $datausulan->status != "1") : ?>
                <?php echo lang('bf_or'); ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('datausulan_delete_confirm'))); ?>');">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('datausulan_delete_record'); ?>
                </button>
            <?php endif; ?>
        </div>
    <?php echo form_close(); ?>
</div>

<script src="<?php echo base_url(); ?>themes/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true,format: 'yyyy-mm-dd'
    });

    $("#provinsi").change(function(){
            var id_provinsi = $("#provinsi").val();
            $("#ID_KAB").empty().append("<option>loading...</option>"); //show loading...
            var json_url = "<?php echo base_url(); ?>index.php/admin/masters/kabupaten/getbyprovinsiterpilih?id_provinsi=" + encodeURIComponent(id_provinsi);
            $.getJSON(json_url,function(data){
                $("#ID_KAB").empty(); 
                if(data==""){
                    $("#ID_KAB").append("<option value=\"\">Pilih Kabupaten </option>");
                }
                else{
                    $("#ID_KAB").append("<option value=\"\">-- Pilih Kabupaten --</option>");
                    for(i=0; i<data.id.length; i++){
                        $("#ID_KAB").append("<option value=\"" + data.id[i]  + "\">" + data.kab[i] +"</option>");
                    }
                }
            });
            return false;
        }); 
</script>