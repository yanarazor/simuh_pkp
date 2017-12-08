<?php

$num_columns	= 23;
$can_delete	= $this->auth->has_permission('Barang.Content.Delete');
$can_edit		= $this->auth->has_permission('Barang.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>
<div class='admin-box'>
	<h3>
		<?php echo lang('barang_area_title'); ?>
	</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class='table table-striped'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					
					<th><?php echo lang('barang_field_nomor_usulan'); ?></th>
					<th><?php echo lang('barang_field_nama_barang'); ?></th>
					<th><?php echo lang('barang_field_merek'); ?></th>
					<th><?php echo lang('barang_field_nup'); ?></th>
					<th><?php echo lang('barang_field_tahun_perolehan'); ?></th>
					<th><?php echo lang('barang_field_luar'); ?></th>
					<th><?php echo lang('barang_field_satuan_luas'); ?></th>
					<th><?php echo lang('barang_field_jumlah'); ?></th>
					<th><?php echo lang('barang_field_satuan_jumlah'); ?></th>
					<th><?php echo lang('barang_field_harga_satuan'); ?></th>
					<th><?php echo lang('barang_field_nilai_perolehan'); ?></th>
					<th><?php echo lang('barang_field_nilai_buku'); ?></th>
					<th><?php echo lang('barang_field_kondisi'); ?></th>
					<th><?php echo lang('barang_field_sertifikat'); ?></th>
					<th><?php echo lang('barang_field_imb'); ?></th>
					<th><?php echo lang('barang_field_stnk'); ?></th>
					<th><?php echo lang('barang_field_kib'); ?></th>
					<th><?php echo lang('barang_field_bast'); ?></th>
					<th><?php echo lang('barang_field_kontrak'); ?></th>
					<th><?php echo lang('barang_field_dipa'); ?></th>
					<th><?php echo lang('barang_field_foto'); ?></th>
					<th><?php echo lang('barang_field_lainnya'); ?></th>
					<th><?php echo lang('barang_field_keterangan'); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('barang_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/content/barang/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->nomor_usulan); ?></td>
				<?php else : ?>
					<td><?php e($record->nomor_usulan); ?></td>
				<?php endif; ?>
					<td><?php e($record->nama_barang); ?></td>
					<td><?php e($record->merek); ?></td>
					<td><?php e($record->nup); ?></td>
					<td><?php e($record->tahun_perolehan); ?></td>
					<td><?php e($record->luar); ?></td>
					<td><?php e($record->satuan_luas); ?></td>
					<td><?php e($record->jumlah); ?></td>
					<td><?php e($record->satuan_jumlah); ?></td>
					<td><?php e($record->harga_satuan); ?></td>
					<td><?php e($record->nilai_perolehan); ?></td>
					<td><?php e($record->nilai_buku); ?></td>
					<td><?php e($record->kondisi); ?></td>
					<td><?php e($record->sertifikat); ?></td>
					<td><?php e($record->imb); ?></td>
					<td><?php e($record->stnk); ?></td>
					<td><?php e($record->kib); ?></td>
					<td><?php e($record->bast); ?></td>
					<td><?php e($record->kontrak); ?></td>
					<td><?php e($record->dipa); ?></td>
					<td><?php e($record->foto); ?></td>
					<td><?php e($record->lainnya); ?></td>
					<td><?php e($record->keterangan); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('barang_records_empty'); ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php
    echo form_close();
    
    ?>
</div>