<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
<?php

$num_columns	= 10;
$can_delete	= $this->auth->has_permission('Masterbarang.Master.Delete');
$can_edit		= $this->auth->has_permission('Masterbarang.Master.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
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
	<div class="box-body">
<!--
<form action="<?php $this->uri->uri_string() ?>" method="get" accept-charset="utf-8">
	 <table>
		<tr>
			<td>Kode/Nama Barang</td>
		</tr>
		<tr>
			<td>
				<input id='title' type='text' name='title' maxlength="255" value="<?php echo isset($title)? $title : "";?>" />
			</td>  
		
			<td valign="top">
				 <input type="submit" name="Act" class="btn btn-primary" value="Cari "  />
			</td> 
		</tr>
        </table>
    </form>
-->	
	<div class="alert alert-block alert-warning fade in ">
      <a class="close" data-dismiss="alert">&times;</a>
       Jumlah :  <?php echo isset($total) ? $total : '0'; ?> &nbsp; Data Barang
    </div>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class='table table-data table-striped'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					
					<th><?php echo lang('masterbarang_field_kd_barang'); ?></th>
					<th><?php echo lang('masterbarang_field_nm_barang'); ?></th>
					<th><?php echo lang('masterbarang_field_type'); ?></th>
					<th><?php echo lang('masterbarang_field_Spesifikasi'); ?></th>
					<th><?php echo lang('masterbarang_field_stok'); ?></th>
					<th><?php echo lang('masterbarang_field_satuan'); ?></th>
					<th><?php echo lang('masterbarang_field_keterangan'); ?></th>
					<th><?php echo lang('masterbarang_field_kd_kategori'); ?></th>
					<th><?php echo lang('masterbarang_field_tahun'); ?></th>
					<th><?php echo lang('masterbarang_field_aktif'); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('masterbarang_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class='column-check'><input type='checkbox' name='checked[]' value='<?php echo $record->id; ?>' /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/master/masterbarang/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->kd_barang); ?></td>
				<?php else : ?>
					<td><?php e($record->kd_barang); ?></td>
				<?php endif; ?>
					<td><?php e($record->nm_barang); ?></td>
					<td><?php e($record->type); ?></td>
					<td><?php e($record->Spesifikasi); ?></td>
					<td><?php e($record->stok); ?></td>
					<td><?php e($record->satuan); ?></td>
					<td><?php e($record->keterangan); ?></td>
					<td><?php e($record->kd_kategori); ?></td>
					<td><?php e($record->tahun); ?></td>
					<td><?php e($record->aktif); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('masterbarang_records_empty'); ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php
    echo form_close(); ?>

<?php
 //   echo $this->pagination->create_links();
    ?>

</div>

</div>
</div>
</div>
</div>

<script src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
$(".table-data").DataTable({
ordering: true,
});
 
</script>
