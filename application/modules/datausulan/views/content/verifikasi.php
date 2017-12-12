<?php
  $this->load->library('convert');
  $convert = new convert();
?>
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
			<div class="control-group <?php echo form_error('kode_eselon') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kode_eselon') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
                	<select readonly name="kode_eselon" id="kode_eselon" class="form-control chosen-select-deselect">
						<option value="">-- Pilih Kode Eselon --</option>
						<?php if (isset($eseloni) && is_array($eseloni) && count($eseloni)):?>
						<?php foreach($eseloni as $eselonis):?>
							<option value="<?php echo $eselonis->kode_eselon?>" <?php if(isset($datausulan->kode_eselon))  echo  ($eselonis->kode_eselon==$datausulan->kode_eselon) ? "selected" : ""; ?>><?php echo $eselonis->nama_eselon; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
					<span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('kode_satker') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kode_satker') . lang('bf_form_label_required'), 'kode_satker', array('class' => 'control-label')); ?>
				<div class='controls'>
                	<select readonly name="kode_satker" id="kode_satker" class="form-control chosen-select-deselect">
						<option value="">-- Pilih Kode Satker --</option>
						<?php if (isset($satkeri) && is_array($satkeri) && count($satkeri)):?>
						<?php foreach($satkeri as $satkeris):?>
							<option value="<?php echo $satkeris->kode_satker?>" <?php if(isset($datausulan->kode_satker))  echo  ($satkeris->kode_satker==$datausulan->kode_satker) ? "selected" : ""; ?>><?php echo $satkeris->nama_satker; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
					<span class='help-inline'><?php echo form_error('kode_satker'); ?></span>
				</div>
			</div>


            <div class="control-group<?php echo form_error('no_surat_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_no_surat_usulan') . lang('bf_form_label_required'), 'no_surat_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input readonly  id='no_surat_usulan' class="form-control" type='text' required='required' name='no_surat_usulan' maxlength='255' value="<?php echo set_value('no_surat_usulan', isset($datausulan->no_surat_usulan) ? $datausulan->no_surat_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_usulan'); ?></span>
                </div>
            </div>


            <div class="control-group<?php echo form_error('tgl_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_tgl_usulan') . lang('bf_form_label_required'), 'tgl_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input readonly  id='tgl_usulan' type='text' class="form-control" required='required' name='tgl_usulan'  value="<?php echo set_value('tgl_usulan', isset($datausulan->tgl_usulan) ? $datausulan->tgl_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_usulan'); ?></span>
                </div>
            </div>

			<div class="control-group<?php echo form_error('nilai_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_nilai_usulan') . lang('bf_form_label_required'), 'nilai_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input readonly  id='nilai_usulan' type='text' class="form-control" required='required' name='nilai_usulan' maxlength='255' value="<?php echo set_value('nilai_usulan', isset($datausulan->nilai_usulan) ? $datausulan->nilai_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_usulan'); ?></span>
                </div>
            </div>
			
			<div class="control-group <?php echo form_error('kategori_usulan') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kategori_usulan') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
                	<select readonly name="kategori_usulan" id="kategori_usulan" class="form-control chosen-select-deselect">
						<option value="">-- Pilih Kategori Usulan --</option>
						<?php if (isset($KategoriUsulani) && is_array($KategoriUsulani) && count($KategoriUsulani)):?>
						<?php foreach($KategoriUsulani as $KategoriUsulanis):?>
							<option value="<?php echo $KategoriUsulanis->value_pilihan?>" <?php if(isset($datausulan->kategori_usulan))  echo  ($KategoriUsulanis->value_pilihan==$datausulan->kategori_usulan) ? "selected" : ""; ?>><?php echo $KategoriUsulanis->label_pilihan; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
					<span class='help-inline'><?php echo form_error('kategori_usulan'); ?></span>
				</div>
			</div>
			
			
	   <div class="control-group<?php echo form_error('status') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_status'), 'status', array('class' => 'control-label')); ?>
                <div class='controls'>
                	<select name="status"  id="status" class="chosen-select-deselect form-control">
						<option value=" ">-- Pilih status --</option>
						<option value="0" <?php echo $datausulan->status == "0" ? "selected" : ""; ?> >-- Tidak Terverifikasi--</option>
						<option value="1" <?php echo $datausulan->status == "1" ? "selected" : ""; ?> >-- Terverifikasi --</option>
					</select>
                    <span class='help-inline'><?php echo form_error('status'); ?></span>
                </div>
            </div>

			<div class='table-responsive'>
			<table class='table table-bordered'>
			<thead>	
				<tr>
					<th rowspan="2">KODE BARANG</th>
					<th rowspan="2">NAMA</th>
					<th rowspan="2">MEREK</th>
					<th rowspan="2">NUP</th>
					<th rowspan="2">TAHUN</th>
					<th colspan="8">USULAN HIBAH</th>
					<th colspan="9">CHECK LIST DOKUMEN PENDUKUNG</th>
					<th colspan="8">KELENGKAPAN DOKUMEN USULAN HIBAH</th>
					<th rowspan="2">KETERANGAN</th>
				</tr>
				<tr>
					 
					<th colspan="2">Luas</th>
					<th colspan="2">Jumlah</th>
					<th>Harga Satuan</th>
					<th>Nilai Perolehan</th>
					<th>Nilai Buku</th>
					<th>Kondisi</th>
					
					<th>Sertifikat</th>
					<th>IMB</th>
					<th>STNK</th>
					<th>BPKB</th>
					<th>KIB</th>
					<th>BAST</th>
					<th>Kontrak</th>
					<th>DIPA</th>
					<th>Foto</th>
					<th>Lainnya</th>
					<th>SPTJMTB</th>
					<th>DATA CALON PENERIMA HIBAH</th>
					<th>KESEDIAAN MENGHIBAHKAN</th>
					<th>KESEDIAAN MENERIMA HIBAH</th>
					<th>SK TIM INTERNAL</th>
					<th>LAPORAN TIM INTERNAL</th>
					<th>BA HASIL PENELITIAN</th>
				</tr>
			</thead>
			<?php
			$has_records = isset($databarangs) && is_array($databarangs) && count($databarangs);
			?>
			<tbody>
				<?php
				$jmlhargasatuan = 0;
				$jmlnilaiperolehan = 0;
				$jmlnilaibuku = 0;
				$has_records	= isset($databarangs) && is_array($databarangs) && count($databarangs);
				if ($has_records) :
					foreach ($databarangs as $record) :
					 
				?>
				<tr>
					<td><?php e($record->kode_barang); ?></td>
					<td><?php e($record->nama_barang); ?></td>
					<td><?php e($record->merek); ?></td>
					<td><?php e($record->nup); ?></td>
					<td><?php e($record->tahun_perolehan); ?></td>
					<td><?php e($record->luar); ?></td>
					<td><?php e($record->satuan_luas); ?></td>
					<td><?php e($record->jumlah); ?></td>
					<td><?php e($record->satuan_jumlah); ?></td>
					<td><?php 
					$jmlhargasatuan = $jmlhargasatuan + $record->harga_satuan;
					e($convert->ToRp($record->harga_satuan)); ?></td>
					<td>
					<?php 
					$jmlnilaiperolehan = $jmlnilaiperolehan + $record->nilai_perolehan;
					e($convert->ToRp($record->nilai_perolehan)); ?></td>
					<td>
					<?php 
						$jmlnilaibuku = $jmlnilaibuku + $record->nilai_buku;
						e($convert->ToRp($record->nilai_buku)); 
					?>
					</td>
					<td><?php e($record->kondisi); ?></td>
					
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='sertifikat' name='sertifikat' kolom='sertifikat'  kode="<?php e($record->id); ?>" class="chktatus"  value='1' <?php echo set_checkbox('sertifikat', 1, isset($record->sertifikat) && $record->sertifikat == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/sertifikat" class="show-modal" tooltip="Upload Sertifikat">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php if($record->sertifikat != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->sertifikat; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='imb' name='imb' kolom='imb'  kode="<?php e($record->id); ?>" class="chktatus"  value='1' <?php echo set_checkbox('imb', 1, isset($record->imb) && $record->imb == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/imb" class="show-modal" tooltip="Upload IMB">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->imb != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->imb; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='stnk' name='stnk' kolom='stnk'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('stnk', 1, isset($record->stnk) && $record->stnk == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/stnk" class="show-modal" tooltip="Upload STNK">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->stnk != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->stnk; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='bpkb' name='bpkb' kolom='bpkb'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('bpkb', 1, isset($record->bpkb) && $record->bpkb == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/bpkb" class="show-modal" tooltip="Upload BPKB">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->bpkb != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->bpkb; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>				
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='kib' name='kib' kolom='kib'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('kib', 1, isset($record->kib) && $record->kib == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/kib" class="show-modal" tooltip="Upload KIB">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->kib != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->kib; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='bast' name='bast' kolom='bast' kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('bast', 1, isset($record->bast) && $record->bast == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/bast" class="show-modal" tooltip="Upload BAST">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->bast != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->bast; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='kontrak' name='kontrak' kolom='kontrak'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('kontrak', 1, isset($record->kontrak) && $record->kontrak == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/kontrak" class="show-modal" tooltip="Upload Kontrak">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->kontrak != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->kontrak; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='dipa' name='dipa' kolom='dipa'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('dipa', 1, isset($record->dipa) && $record->dipa == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/dipa" class="show-modal" tooltip="Upload DIPA">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->dipa != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->dipa; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='foto' name='foto' kolom='foto'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('foto', 1, isset($record->foto) && $record->foto == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/foto" class="show-modal" tooltip="Upload Foto">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->foto != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->foto; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='lainnya' name='lainnya' kolom='lainnya'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('lainnya', 1, isset($record->lainnya) && $record->lainnya == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/lainnya" class="show-modal" tooltip="Upload Lainnya">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->lainnya != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->lainnya; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='sptjmtb' name='sptjmtb' kolom='sptjmtb'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('sptjmtb', 1, isset($record->sptjmtb) && $record->sptjmtb == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/sptjmtb" class="show-modal" tooltip="Upload Sptjmtb">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->sptjmtb != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->sptjmtb; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox'<?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='calon_penerima_hibah' name='calon_penerima_hibah' kolom='calon_penerima_hibah'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('calon_penerima_hibah', 1, isset($record->calon_penerima_hibah) && $record->calon_penerima_hibah == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/calon_penerima_hibah" class="show-modal" tooltip="Upload calon penerimahibah">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->calon_penerima_hibah != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->calon_penerima_hibah; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='kesediaan_hibah' name='kesediaan_hibah' kolom='kesediaan_hibah'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('kesediaanhibah', 1, isset($record->kesediaanhibah) && $record->kesediaanhibah == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/kesediaan_hibah" class="show-modal" tooltip="Upload kesediaan hibah">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->kesediaan_hibah != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->kesediaan_hibah; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='kesediaan_terima_hibah' name='kesediaan_terima_hibah' kolom='kesediaan_terima_hibah'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('kesediaanterimahibah', 1, isset($record->kesediaanterimahibah) && $record->kesediaanterimahibah == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/kesediaan_terima_hibah" class="show-modal" tooltip="Upload Terima hibah">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->kesediaan_terima_hibah != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->kesediaan_terima_hibah; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='sktiminternal' name='sktiminternal' kolom='sktiminternal'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('sktiminternal', 1, isset($record->sktiminternal) && $record->sktiminternal == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/sktiminternal" class="show-modal" tooltip="Upload sk tim internal">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->sktiminternal != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->sktiminternal; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='laporantiminternal' name='laporantiminternal' kolom='laporantiminternal'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('laporantiminternal', 1, isset($record->laporantiminternal) && $record->laporantiminternal == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/laporantiminternal" class="show-modal" tooltip="Upload laporant Tim internal">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->laporantiminternal != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->laporantiminternal; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					
					<td>
						<!--<input type='checkbox' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id='bahasilpenelitian' name='bahasilpenelitian' kolom='bahasilpenelitian'  kode="<?php e($record->id); ?>" class="chktatus" value='1' <?php echo set_checkbox('bahasilpenelitian', 1, isset($record->bahasilpenelitian) && $record->bahasilpenelitian == 1); ?> />-->
						<a href="<?php echo base_url(); ?>index.php/admin/content/datausulan/uploadbukti/<?php e($record->id); ?>/bahasilpenelitian" class="show-modal" tooltip="Upload ba hasil penelitian">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-upload fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						<?php if($record->bahasilpenelitian != ""){ ?>
						 <a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $record->bahasilpenelitian; ?>" target="_blank">
							<span class='fa-stack warning'>
								<i class='fa fa-square fa-stack-2x'></i>
							 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
						 	</span>
						 </a>
						 <?php } ?>
					</td>
					<td>
					
					<select name="statuss" <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> id="statuss" kode="<?php e($record->id); ?>" class="slcstatus" >
						<option value="">-- Pilih Keterangan --</option>
						<option value="0" <?php echo $record->status_barang == "0" ? "selected" : ""; ?> >-- Tidak DiSetujui--</option>
						<option value="1" <?php echo $record->status_barang == "1" ? "selected" : ""; ?>>-- DiSetujui --</option>
					</select>
					 <input id='keterangan_detail' type='text' <?php echo $datausulan->status == "1" ? "disabled" : ""; ?> name='keterangan_detail' class="ketdetil"  maxlength='10000' kolom='keterangan_detail' kode="<?php e($record->id); ?>" value="<?php echo set_value('keterangan', isset($record->keterangan) ? $record->keterangan : ''); ?>" />
					</td>
				</tr>
				<?php
					endforeach;
					 if ($has_records) : ?>
					  <tfoot>
				 		<td colspan="9" align="right">Jumlah </td>
				 		<td><?php echo $convert->ToRp($jmlhargasatuan) ; ?> </td>
				 		<td><?php echo $convert->ToRp($jmlnilaiperolehan) ; ?> </td>
				 		<td><?php echo $convert->ToRp($jmlnilaibuku) ; ?> </td>
				 		<td colspan="20"></td>
					  </tfoot>
					  <?php endif; ?>
				<?php
				else:
				?>
				<tr>
					<td colspan='29'>Belum ada data</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		</div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="Simpan" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/datausulan', 'Kembali', 'class="btn btn-warning"'); ?>
        </fieldset>
    <?php echo form_close(); ?>

<script type="text/javascript">
   $(".chktatus").click( function(){
   		var kode = $(this).attr("kode");
   		var kolom = $(this).attr("kolom");
   		var valchecked = "";
	  if( $(this).is(':checked') )
	  { 
	  	valchecked = "1";
	  }else{
	  	valchecked = "0";
	  }
	  //alert("<?php echo base_url() ?>index.php/admin/content/datausulan/setstatusverkolom=?"+kolom+"&id="+kode+"&val="+valchecked);
	  var json_url = "<?php echo base_url() ?>index.php/admin/content/datausulan/setstatusver";
	  $.ajax({    
		 type: "POST",
		 url: json_url,
		 data: "kolom="+kolom+"&id="+kode+"&val="+valchecked,
		 success: function(data){ 
			  //alert(data);
		 }});
   });
    $(".slcstatus").change( function(){
   		var kode = $(this).attr("kode");
   		var kolom = $(this).attr("kolom");
   		var valchecked = this.value;
   		//alert(valchecked);
   		//return false;
	  //alert("<?php echo base_url() ?>index.php/admin/content/datausulan/setstatusverkolom=?"+kolom+"&id="+kode+"&val="+valchecked);
	  var json_url = "<?php echo base_url() ?>index.php/admin/content/datausulan/setstatusbarang";
	  $.ajax({    
		 type: "POST",
		 url: json_url,
		 data: "kolom="+kolom+"&id="+kode+"&val="+valchecked,
		 success: function(data){ 
			  //alert(data);
		 }});
   });
    $(".ketdetil").change( function(){
   		var kode = $(this).attr("kode");
   		var kolom = $(this).attr("kolom");
   		var valchecked = this.value;
   		//alert(valchecked);
   		//return false;
	  //alert("<?php echo base_url() ?>index.php/admin/content/datausulan/setstatusverkolom=?"+kolom+"&id="+kode+"&val="+valchecked);
	  var json_url = "<?php echo base_url() ?>index.php/admin/content/datausulan/setketeranganbarang";
	  $.ajax({    
		 type: "POST",
		 url: json_url,
		 data: "kolom="+kolom+"&id="+kode+"&val="+valchecked,
		 success: function(data){ 
			  //alert(data);
		 }});
   });
   
</script>

    </div>
    </div>  
   

