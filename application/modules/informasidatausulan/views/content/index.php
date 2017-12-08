<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
<!-- sweet alert -->
<script src="<?php echo base_url(); ?>themes/admin/js/sweetalert.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/sweetalert.css">

<?php
$checkSegment = $this->uri->segment(4);
$areaUrl = SITE_AREA . '/content/informasidatausulan';
$num_columns	= 4;
$can_delete	= $this->auth->has_permission('Informasidatausulan.Content.Delete');
$can_edit		= $this->auth->has_permission('Informasidatausulan.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

$can_upload	= ($current_user->username == 'admin' or 'developer') ;


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
		<?php if ($this->auth->has_permission('Informasidatausulan.Content.Create')) : ?>
		<div class="pull-right"><?php $this->load->view('_sub_nav');?> </div>
		<br><br>
        <?php endif; ?>
			<div class="box-header">
			   <h3 class="box-title">Informasi Data Usulan</h3>

            </div>
	<div class="box-body">
	<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<table id="" class='table table-striped table-responsive table-data display' width="100%" cellpadding="0">
			<thead style="background-color:#cc3333;font-size:;font-width:;color:#fff;">
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					<th><?php echo lang('informasidatausulan_field_no_surat_usulan'); ?></th>					
					<th><?php echo lang('informasidatausulan_field_tgl_usulan'); ?></th>
					<th><?php echo lang('informasidatausulan_field_eselon'); ?></th>
					<th><?php echo lang('informasidatausulan_field_satker'); ?></th>
					<th><?php echo lang('informasidatausulan_field_status'); ?></th>
					<th>Action</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('informasidatausulan_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/content/informasidatausulan/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->no_surat_usulan); ?></td>
				<?php else : ?>
					<td><?php e($record->no_surat_usulan); ?></td>
				<?php endif; ?>
					<td><?php e($record->tgl_usulan); ?></td>
					<td><?php e($record->eselon); ?></td>
					<td><?php e($record->satker); ?></td>
					<td><?php e($record->status); ?></td>
					<td>
						<?php if($can_upload) { ?>
							<?php if($record->status=='Setuju') {?>
							<i class="fa fa-upload" aria-hidden="true"></i> &nbsp;  &nbsp;  &nbsp;
							<i class="fa fa-download" aria-hidden="true"></i>
							<?php } ?>
						<?php // e($record->status); ?>
						<?php } ?>
					</td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('informasidatausulan_records_empty'); ?></td>
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