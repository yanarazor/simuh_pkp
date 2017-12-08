<?php
$can_edit		= $this->auth->has_permission('DataUsulan.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<?php
  $this->load->library('convert');
  $convert = new convert();
?>
<?php
        header("Content-Type: application/vnd.ms-word");
        header("Expires: 0");
        header("Cache-Control:  must-revalidate, post-check=0, pre-check=0");
        header("Content-disposition: attachment; filename=lampiran_pengembalian.doc");
?>

<div class='admin-box'>	
	<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:justify;text-align:justify;" width="842px" height="595px" border="0" cellpadding="0" cellspacing="0" >
	<tr>
		<td colspan="8">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="8" align="left" style="font-size:16px;">LEMBAR HASIL REVIEW VERIFIKASI DAN VALIDASI</td>
	</tr>
	<tr>
		<td colspan="8" align="left" style="font-size:16px;">USULAN HIBAH BARANG MILIK NEGARA <?php echo $datausulan->nama_eselon;?></td>
	</tr>
	<tr>
		<td colspan="8">&nbsp;</td>
	</tr>
	</table>
	
<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:center;text-align:justify;" width="842px" height="595px" border="1" cellpadding="0" cellspacing="0" >
	<thead>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td style="font-weight:600;text-align:center;">NO.</td>
		<td style="font-weight:600;text-align:center;">KODE BARANG</td>
		<td style="font-weight:600;text-align:center;">NAMA BARANG</td>
		<td style="font-weight:600;text-align:center;">NUP</td>
		<td style="font-weight:600;text-align:center;">NILAI USULAN</td>
		<td style="font-weight:600;text-align:center;">TAHUN PEROLEHAN</td>
		<td style="font-weight:600;text-align:center;">KETERANGAN</td>
	</tr>
	</thead>
	
<?php
$has_records = isset($databarangs) && is_array($databarangs) && count($databarangs);
?>

<tbody>
	<?php
	$x=1;
	$jmlhargasatuan = 0;
	$jmlnilaiperolehan = 0;
	$jmlnilaibuku = 0;
	$has_records	= isset($databarangs) && is_array($databarangs) && count($databarangs);
	if ($has_records) :
		foreach ($databarangs as $record) :
		 
	?>
	<tr>
		<td style="text-align:center;"><?php echo $x;?></td>
		<td style="text-align:center;"><?php e($record->kode_barang); ?></td>
		<td style="text-align:center;"><?php e($record->nama_barang); ?></td>
		<td style="text-align:center;"><?php e($record->nup); ?></td>
		<td style="text-align:right;">
			<?php 
			$jmlnilaiperolehan = $jmlnilaiperolehan + $record->nilai_perolehan;
			e($convert->ToRp($record->nilai_perolehan)); ?>
		</td>
		<td style="text-align:center;"><?php e($record->tahun_perolehan); ?></td>
		<td><?php e($record->keterangan); ?></td>
	</tr>	
	<?php $x++;
		endforeach;
		 if ($has_records) : ?>
		  <tfoot>
			<td colspan="4" style="text-align:center;font-weight:600;">JUMLAH </td>
			<td style="text-align:center;font-weight:600;"><?php echo $convert->ToRp($jmlnilaiperolehan) ; ?> </td>
				<td colspan="2">&nbsp;</td>
		  </tfoot>
		  <?php endif; ?>
	<?php
	else:
	?>
	<tr>
		<td colspan='7'>Belum ada data</td>
	</tr>
	<?php endif; ?>
</tbody>

</table>
<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:center;text-align:center;" width="842px" height="595px" border="0" cellpadding="0" cellspacing="0" >	
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7" style="font-size:13px;font-weight:600;" align="center">
			KEPALA BIRO KEUANGAN DAN BMN<br>
			KEMENTERIAN DESA,PEMBANGUNAN DAERAH TERTINGGAL DAN TRANSMIGRASI
			<br><br><br><br>
			(.....................................................)<br>
			NIP. .................................................
		</td>
	</tr>
	<tr>
		<td colspan="8">&nbsp;</td>
	</tr>
	
	</table>
</div>