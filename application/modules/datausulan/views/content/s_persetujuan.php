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
    header("Content-disposition: attachment; filename=surat_persetujuan.doc");
?>

						
<?php	if (isset($records) && is_array($records) && count($records)) :
		foreach ($records as $record) : ?>
<div class='admin-box'>	
	<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:justify;text-align:justify;" width="595px" height="842px" border="0" cellpadding="0" cellspacing="0" >
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="7" align="center" style="font-size:18px;"><img src="<?php echo base_url();?>assets/images/garuda100.jpg" width="75px"></img><br>
			<strong>KEMENTERIAN DESA, PEMBANGUNAN DAERAH TERTINGGAL DAN TRANSMIGRASI<br>REPUBLIK INDONESIA</strong>
		</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7" align="right">Jakarta,&nbsp;&nbsp; <?php $tgl=date("d"); ?> <?php $bln=date("m"); ?> <?php $thn=date("Y"); ?>
		<?php $tgl_sekarang=$thn.'-'.$bln.'-'.$tgl?>
		<?php echo $convert->fmtdate($tgl_sekarang,"dd month yyyy")?>
		&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr >
		<td>&nbsp;</td>
		<td>No</td>
		<td width="25">:</td>

		<td colspan="2"><div style="padding-left:5px;"> S.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ M-DPDTT / SJ / &nbsp;&nbsp;&nbsp;&nbsp;   / 20    </div></td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>Sifat</td>
		<td>:</td>
		<td colspan="2"><div style="padding-left:5px;">Segera</div></td>
		<td width="50">&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>Lampiran</td>
		<td>:</td>
		<td colspan="2"><div style="padding-left:5px;">1 (satu) Berkas</div></td>
		<td width="50">&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td valign="top">Hal</td>
		<td valign="top">:</td>
		<td width="500" colspan="2"><div style="padding-left:5px;text-align:left;">Persetujuan Hibah Barang Milik Negara Berupa Selain Tanah dan/atau
			Bangunan pada <?php e($record->nama_satker); ?></div>
		</td>
		<td width="155">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="4" style="text-align:left;align:left;">
			Kepada Yth.<br>
			<?php e($record->nama_eselon); ?><br>
			di Jakarta
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="5" align="justify">
			<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan surat Saudara Nomor : <?php e($record->no_surat_usulan); ?>, tanggal <?php echo $convert->fmtdate($record->tgl_usulan,"dd month yyyy")?>, Hal : Usulan Hibah <?php echo $record->label_pilihan ?>, dengan ini diberitahukan bahwa permohonan Hibah Barang Milik Negara pada <?php echo $record->nama_satker;?> berupa selain tanah dan/atau bangunan dengan 
			nilai perolehan seluruhnya sebesar <?php echo $convert->ToRp($record->nilai_usulan);?> (<?php echo $convert->Terbilang($record->nilai_usulan);?> rupiah ) sebagaimana tercantum dalam lampiran surat ini, pada prinsipnya dapat disetujui.</p>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5" align="justify">
			<p align="justify">Guna tertib administrasi pengelolaan Barang Milik Negara, pelaksanaan Hibah tersebut agar berpedoman pada Peraturan Pemerintah Nomor 27 Tahun 2014 tentang Pengelolaan Barang Milik Negara/Daerah dan Peraturan Menteri Keuangan Nomor 104/PMK.06/2015 tentang Perubahan Kedua Atas Peraturan Menteri Keuangan Nomor 125/PMK.06/2011 Tentang Pengelolaan Barang Milik Negara Yang Berasal Dari Dana Dekonsentrasi dan Dana Tugas Pembantuan Sebelum Tahun Anggaran 2011, dengan ketentuan sebagai berikut : </p>
		</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="5" align="justify">
			<p align="justify">
				<ol>
					<li>Berdasarkan persetujuan Hibah ini, Sekretaris Unit Eselon I/Kuasa Pengguna Barang agar menetapkan keputusan mengenai jenis, jumlah dan nilai Barang Milik Negara yang akan dihibahkan;</li>
					<li>Persetujuan Hibah ini segera ditindaklanjuti dengan pelaksanaan Hibah Barang Milik Negara yang dituangkan dalam Naskah Hibah dan Berita Acara Serah Terima antara <?php e($record->nama_eselon); ?>
						Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi dan <?php e($record->nama_satker); ?> selaku calon penerima Hibah paling lama 2 (dua) bulan sejak tanggal surat persetujuan Hibah ini diterbitkan;</li>
					<li>Keputusan Penghapusan Barang Milik Negara ditetapkan oleh Sekretaris Unit Eselon I/Kuasa Pengguna Barang sesuai dengan Keputusan Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Nomor 68 Tahun 2015 
						Tentang Pendelegasian Sebagian Wewenang Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Selaku Pengguna Barang Kepada Pejabat Struktural Dan Kuasa Pengguna Barang Di lingkungan Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Dalam 
						Rangka Pengelolaan Barang Milik Negara Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi, paling lama 2 (dua) bulan sejak tanggal Berita Acara Serah Terima dan Naskah Hibah ditandatangani;</li>
					<li>Barang Milik Negara yang telah dihibahkan agar segera dihapus dari Daftar Barang Kuasa Pengguna Barang dan Penghapusan dimaksud didasarkan pada Keputusan Penghapusan yang ditetapkan oleh Sekretaris Unit Eselon I/Kuasa Pengguna Barang;</li>
					<li>Pengguna Barang menyampaikan laporan pelaksanaan Hibah kepada Pengelola Barang c.q Direktur Jenderal Kekayaan Negara paling lama 1 (satu) bulan sejak Keputusan Penghapusan BMN ditandatangani dengan melampirkan Naskah Hibah, Berita Acara Serah Terima dan Keputusan Penghapusan;</li>
					<li>Menyampaikan foto copy Berita Acara Serah Terima dan Naskah Hibah kepada Menteri Keuangan c.q Direktur Jenderal Pengelolaan Utang selaku Unit Akuntansi Kuasa Pengguna Anggaran;</li>
					<li>Kebenaran materiil atas jenis, jumlah, tahun dan nilai Barang Milik Negara yang dihibahkan serta calon penerima Hibah tersebut menjadi tanggung jawab Kuasa Pengguna Barang;</li>
					<li>Apabila di kemudian hari terdapat kekeliruan dalam surat persetujuan ini, maka akan dilakukan perbaikan sebagaimana mestinya.</li>
				</ol>
				Atas perhatian Saudara, kami ucapkan terima kasih.
			</p>
		</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>

	
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td >&nbsp;</td>
		<td width="85">&nbsp;</td>
	
		<td colspan="2" align="center">
			a.n. Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi<br>
			Sekretaris Jenderal,
			<br><br><br><br>
			ANWAR SANUSI, Ph.D<br>
			NIP. 19681117 199403 1 001

		</td>
	</tr>
		<tr>
		<td colspan="7">&nbsp;</td>
	</tr>

	
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="5" align="justify">
		<p align="justify">
			Tembusan :<br>
			<ol>
				<li>Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi;</li>
				<li>Inspektur Jenderal, Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi;</li>
				<li>Direktur Barang Milik Negara, DJKN, Kementerian Keuangan;</li>
			</ol>
		</p>
		</td>
		<td>&nbsp;</td>
	</tr>
	
	
	</table>
</div>
<?php  endforeach;endif;?>