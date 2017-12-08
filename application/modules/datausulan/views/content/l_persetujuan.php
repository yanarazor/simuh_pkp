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
       header("Content-disposition: attachment; filename=lampiran_persetujuan.doc");
?>

<div class='admin-box'>	
	<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:justify;" width="100%" height="595px" border="0" cellpadding="0" cellspacing="0" >
	<tr>
		<td colspan="8">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" style="font-size:12px;text-align:left;vertical-align:top;">
		Lampiran : 
		</td>
		<td colspan="7" align="left" style="font-size:14px;text-align:left;vertical-align:top;">
		Surat Persetujuan Hibah Barang Milik Negara<br>
		Sekretariat Jenderal, Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi<br>
		Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: S.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ M-DPDTT / SJ / &nbsp;&nbsp;&nbsp;&nbsp;    / 20 &nbsp;&nbsp;&nbsp;   <br>
		Tanggal&nbsp;&nbsp;&nbsp;:  <?php echo $convert->fmtdate($datausulan->tgl_usulan,"dd month yyyy")?>
		</td>
	</tr>
	<tr>
		<td colspan="8">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="8" align="left" style="font-size:12px;font-weight:600;text-align:center;"><strong>
		DAFTAR BARANG MILIK NEGARA BERUPA SELAIN TANAH DAN / ATAU BANGUNAN  YANG DISETUJUI UNTUK DIHIBAHKAN <br>
		PADA  <?php e($datausulan->nama_eselon); ?> KEPADA <?php e($datausulan->nama_satker); ?>
		</strong>
		</td>
	</tr>
	<tr>
		<td colspan="8">&nbsp;</td>
	</tr>
	</table>

<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:center;text-align:justify;" width="1000px" height="595px" border="1" cellpadding="" cellspacing="0" >
	<thead style="font-family: 'Arial Narrow', Arial, sans-serif;align:center;text-align:center;font-weight:600;">			
		<tr>
			<td>NO.</td>
			<td>KODE BARANG</td>
			<td>NUP</td>
			<td>NAMA BARANG / JENIS BMN</td>
			<td>JUMLAH BARANG</td>
			<td>HARGA SATUAN</td>
			<td>NILAI PEROLEHAN</td>
			<td>TAHUN PEROLEHAN</td>
			<td>KONDISI</td>
			<td>LOKASI</td>
		</tr>
		<tr>
			<td>(1)</td>
			<td>(2)</td>
			<td>(3)</td>
			<td>(4)</td>
			<td>(5)</td>
			<td>(6)</td>
			<td>(7)</td>
			<td>(8)</td>
			<td>(9)</td>
			<td>(10)</td>
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
		<td><?php e($record->kode_barang); ?></td>
		<td><?php e($record->nup); ?></td>
		<td><?php e($record->nama_barang); ?></td>
		<td style="text-align:center;"><?php e($record->jumlah); ?> <?php e($record->satuan_jumlah); ?></td>
		<td style="text-align:right;"><?php 
		$jmlhargasatuan = $jmlhargasatuan + $record->harga_satuan;
		e($convert->ToRp($record->harga_satuan)); ?></td>
		<td style="text-align:right;">
		<?php 
		$jmlnilaiperolehan = $jmlnilaiperolehan + $record->nilai_perolehan;
		e($convert->ToRp($record->nilai_perolehan)); ?></td>
		<td><?php e($record->tahun_perolehan); ?></td>
		<td><?php e($record->kondisi); ?></td>
		<td>&nbsp;</td>
	</tr>	
	<?php $x++;
		endforeach;
		 if ($has_records) : ?>
		  <tfoot>
			<td colspan="5" style="text-align:center;font-weight:600;">Jumlah </td>
			<td>&nbsp;</td>
			<td style="text-align:right;font-weight:600;"><?php echo $convert->ToRp($jmlnilaiperolehan) ; ?> </td>
			<td colspan="3">&nbsp;</td>
		  </tfoot>
		  <?php endif; ?>
	<?php
	else:
	?>
	<tr>
		<td colspan='10'>Belum ada data</td>
	</tr>
	<?php endif; ?>
</tbody>

</table>
<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:center;text-align:center;" width="100%" height="595px" border="0" cellpadding="0" cellspacing="0" >	
	<tr>
		<td colspan="10">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="10">&nbsp;</td>
	</tr>
	<tr>
	<td colspan="6" width="70%">&nbsp;</td>
		<td colspan="4" align="center">
			a.n. Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi<br>
			Sekretaris Jenderal,
			<br><br><br><br>
			ANWAR SANUSI, Ph.D<br>
			NIP. 19681117 199403 1 001
		</td>
	</tr>
	<tr>
		<td colspan="10">&nbsp;</td>
	</tr>
	
	</table>
</div>