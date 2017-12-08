<?php

$num_columns	= 10;
$can_delete	= $this->auth->has_permission('DataUsulan.Content.Delete');
$can_edit		= $this->auth->has_permission('DataUsulan.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>
<div class='admin-box'>
	<h3>
		Data Usulan
	</h3>
	<?php echo form_open($this->uri->uri_string()); ?>

		<table class='table table-striped'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					
					<th>Kode Barang</th>
					<th>NUP</th>
					<th>Tahun Perolehan</th>
					<th>Merk / Type</th>
					<th>Luas</th>
					<th>Satuan</th>
					<th>Jumlah</th>
					<th>Nilai Perolehan</th>
					<th>Nilai Buku</th>
					<th>Kondisi</th>
					<th>Lokasi</th>
					<th>Sertifikat</th>
					<th>IMB</th>
					<th>STNK</th>
					<th>BPKB</th>
					<th>KIB</th>
					<th>BAST</th>
					<th>Kontrak</th>
					<th>Foto</th>
					<th>Nomor Kontrak</th>
					<th>Tanggal Kontrak</th>
					<th>Nomor Dipa</th>
					<th>Tanggal Dipa</th>
					<th>Lainnya</th>
					<th>SPTJMTB</th>
					<th>Data Calon Penerima Hibah</th>
					<th>Kesedian Menghibahkan</th>
					<th>Kesedian Menerima Hibah</th>
					<th>Dokuman</th>					
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
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class='column-check'><input type='checkbox' name='checked[]' value='<?php echo $record->id; ?>' /></td>
					<?php endif;?>
					
					<td>01</td>
					<td>NUP</td>
					<td>Tahun Perolehan</td>
					<td>Merk / Type</td>
					<td>Luas</td>
					<td>Satuan</td>
					<td>Jumlah</td>
					<td>Nilai Perolehan</td>
					<td>Nilai Buku</td>
					<td>Kondisi</td>
					<td>Lokasi</td>
					<td>Sertifikat</td>
					<td>IMB</td>
					<td>STNK</td>
					<td>BPKB</td>
					<td>KIB</td>
					<td>BAST</td>
					<td>Kontrak</td>
					<td>Foto</td>
					<td>Nomor Kontrak</td>
					<td>Tanggal Kontrak</td>
					<td>Nomor Dipa</td>
					<td>Tanggal Dipa</td>
					<td>Lainnya</td>
					<td>SPTJMTB</td>
					<td>Data Calon Penerima Hibah</td>
					<td>Kesedian Menghibahkan</td>
					<td>Kesedian Menerima Hibah</td>
					<td>Dokuman</td>					
					
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