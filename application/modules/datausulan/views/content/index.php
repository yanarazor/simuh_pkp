<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
<!-- sweet alert -->
<script src="<?php echo base_url(); ?>themes/admin/js/sweetalert.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/sweetalert.css">

<?php
$checkSegment = $this->uri->segment(4);
$areaUrl = SITE_AREA . '/content/datausulan';

$num_columns	= 7;
$can_delete	= $this->auth->has_permission('DataUsulan.Content.Delete');
$can_edit		= $this->auth->has_permission('DataUsulan.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>

<?php
$this->load->library('convert');
$convert = new convert();
?>


<div class="row">
	<div class="col-xs-12">
		<div class="box">
		<?php if ($this->auth->has_permission('Datausulan.Content.Create')) : ?>
		<div class="pull-right"><?php $this->load->view('_sub_nav');?> </div>
		<br><br>
        <?php endif; ?>
			<div class="box-header">
			   <h3 class="box-title">Data Usulan</h3>

            </div>
	<div class="box-body">
	<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<table id="" class='table table-striped table-responsive table-data display' width="100%" cellpadding="0">
			<thead style="background-color:#cc3333;font-size:;font-width:;color:#fff;">
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					<th><?php echo lang('datausulan_field_no_surat_usulan'); ?></th>
					<th><?php echo lang('datausulan_field_tgl_usulan'); ?></th>
					<th>Nilai Usulan</th>
					<th><?php echo lang('datausulan_field_kategori_usulan'); ?></th>
					<th><?php echo lang('datausulan_field_status'); ?></th>
					<th colspan="2" align="center">Surat</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('datausulan_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
					$this->load->model('barang/barang_model');
					$counttidakterverifikasi = $this->barang_model->countverfikasi($record->id);
					//echo $record->id." ".$counttidakterverifikasi;
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class='column-check'><input type='checkbox' name='checked[]' value='<?php echo $record->id; ?>' /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/content/datausulan/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->no_surat_usulan); ?></td>
				<?php else : ?>
					<td><?php e($record->no_surat_usulan); ?></td>
				<?php endif; ?>
			
					<td><?php echo $convert->fmtdate($record->tgl_usulan,"dd month yyyy")?></td>
					<td><?php echo $convert->ToRp($record->nilai_usulan)?></td>
					<td><?php e($record->kategori_usulan); ?></td>
					<td>
					
					<?php
							$status = "";
							if($record->status == "0")
								$status = "Oke";
							echo ($record->status =="") ? "<a href='".base_url()."index.php/admin/content/datausulan/verifikasi/".$record->id."''><span class='label label-warning'>Belum Verifikasi</span></a>":"";						
							echo ($record->status =="1") ? "<a href='".base_url()."index.php/admin/content/datausulan/verifikasi/".$record->id."''><span class='label label-success'>Terverifikasi</span></a>" : "";						
							echo ($record->status =="0") ? "<a href='".base_url()."index.php/admin/content/datausulan/verifikasi/".$record->id."''><span class='label label-danger'>Tidak Terverifikasi</span></a>":"";						
							if($record->status == "1")
								$status = "Tidak";
							
						//	if($current_user->nip == $record->verifikator_ketua){
						//		echo ($record->status_verifikasi !="0" and $record->status_verifikasi !="") ? "<a href='".base_url()."index.php/admin/content/logbook/verifikasi/".$record->id."''><span class='label label-success'>Sudah Verifikasi [".$status."]</span></a>" : "<a href='".base_url()."index.php/admin/content/logbook/verifikasi/".$record->id."''><span class='label label-warning'>Blm Verifikasi</span></a>";
						//	}
						?>
					</td>
					<td>
					<?php if($record->status =="1"){ ?>
						<a href="<?php base_url();?>datausulan/s_persetujuan/<?php echo $record->id;?>"><span class='label label-default'>Surat Persetujuan</span></a></br>
						<a href="<?php base_url();?>datausulan/l_persetujuan/<?php echo $record->id;?>"><span class='label label-info'>Lampiran</span></a>
					<?php } ?>
					</td>
					<td>
						<?php 
						//echo $counttidakterverifikasi ;
						if($record->status =="1" and $counttidakterverifikasi > 0){ ?>
						<a href="<?php base_url();?>datausulan/s_pengembalian/<?php echo $record->id;?>"><span class='label label-danger'>Surat Pengembalian</span></a></br>
						<a href="<?php base_url();?>datausulan/l_pengembalian/<?php echo $record->id;?>"><span class='label label-info'>Lampiran</span></a>
						<?php } ?>
					</td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('datausulan_records_empty'); ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php
    echo form_close();
    
    ?>

</div>
    	</div>
    </div>
</div>

<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
$(".table-data").DataTable({
ordering: true,
});
 
</script>