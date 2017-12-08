<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
<?php

$num_columns	= 3;
$can_delete	= $this->auth->has_permission('Eselon.Master.Delete');
$can_edit		= $this->auth->has_permission('Eselon.Master.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>

<!-- <div class='admin-box'>
	<h3>
		<?php// echo lang('eselon_area_title'); ?>
	</h3>
	<form action="<?php // $this->uri->uri_string() ?>" method="get" accept-charset="utf-8">
		<table>
			<tr>
				<!--<td>Kategori</td>
				<td>Sub Kategori</td>-->
	<!--			<td>Kode/Nama Eselon</td>
			</tr>
			<tr>
				<!--<td>
					<select name="kat" id="kat" class="chosen-select-deselect">
						<option value="">-- Pilih Kategori --</option>
						<?php// if (isset($kategoris) && is_array($kategoris) && count($kategoris)):?>
						<?php// foreach($kategoris as $kategori_record):?>
							<option value="<?php// echo $kategori_record->value?>" <?php// if(isset($kat))  echo  ($kategori_record->value==$kat) ? "selected" : ""; ?>><?php// echo $kategori_record->label; ?></option>
							<?php// endforeach;?>
						<?php// endif;?>
					</select>
				</td>
				<td>
					<select name="subkat" id="subkat" class="chosen-select-deselect">
						<option value="">-- Pilih Sub Kategori --</option>
						<?php// if (isset($subkategoris) && is_array($subkategoris) && count($subkategoris)):?>
						<?php// foreach($subkategoris as $subkategori_record):?>
							<option value="<?php// echo $subkategori_record->value?>" <?php// if(isset($subkat))  echo  ($subkategori_record->value==$subkat) ? "selected" : ""; ?>><?php// echo $subkategori_record->label; ?></option>
							<?php// endforeach;?>
						<?php// endif;?>
					</select>
				</td>-->
	<!--			<td>
					<input id='title' type='text' name='title' maxlength="255" value="<?php// echo isset($title)? $title : "";?>" />
				</td>  
			
				<td valign="top">
					 <input type="submit" name="Act" class="btn btn-primary" value="Cari "  />
				</td> 
			</tr>
			
		</table>
   </form>
   -->
<div class="row">
	<div class="col-xs-12">
		<div class="box">
		<?php if ($this->auth->has_permission('Masterbarang.Master.Create')) : ?>
		<div class="pull-right"><?php $this->load->view('_sub_nav');?> </div>
		<br><br>
        <?php endif; ?>
			<div class="box-header">
				<h3>
					<?php echo lang('eselon_area_title'); ?>
				</h3>
            </div> 
	<div class="box-body">
	<div class="alert alert-block alert-warning fade in ">
      <a class="close" data-dismiss="alert">&times;</a>
       Jumlah :  <?php echo isset($total) ? $total : '0'; ?> &nbsp; Data Eselon
    </div>
	
	
	
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class='table table-striped'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					
					<th><?php echo lang('eselon_field_kode_eselon'); ?></th>
					<th><?php echo lang('eselon_field_nama_eselon'); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="Hapus" onclick="return confirm('<?php e(js_escape(lang('eselon_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/master/eselon/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->kode_eselon); ?></td>
				<?php else : ?>
					<td><?php e($record->kode_eselon); ?></td>
				<?php endif; ?>
					<td><?php e($record->nama_eselon); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('eselon_records_empty'); ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php
    echo form_close();
    
    echo $this->pagination->create_links();
    ?>
</div></div></div></div>


<script src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

<script type="text/javascript">
$(".table-data").DataTable({
ordering: true,
});
 
</script>
