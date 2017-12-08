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
        header("Content-disposition: attachment; filename=SuratPengembalian.doc");
?>
<?php	if (isset($records) && is_array($records) && count($records)) :
		foreach ($records as $record) : ?>

<div class='admin-box'>	
	<table style="font-family: 'Arial Narrow', Arial, sans-serif;align:justify;text-align:justify;" width="595px" height="842px" border="0" cellpadding="0" cellspacing="0" >
	<tr>
		<td colspan="2">
			<img src="<?php echo base_url();?>assets/images/LogoKemendesa110x110.png" width="200px"></img>
		</td>
		<td colspan="5" align="center" style="font-size:19px;">
			<strong>KEMENTERIAN DESA, PEMBANGUNAN DAERAH TERTINGGAL DAN TRANSMIGRASI<br>REPUBLIK INDONESIA<br>
			SEKRETARIAT JENDERAL</strong><br><br>
		<span style="font-size:14px;">	Jalan Abdul Muis Nomor 7 Jakarta Pusat 10110<br>
			Jalan TMP Kalibata No. 17 Jakarta Selatan 12740</span>
			
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

		<td colspan="2"><div style="padding-left:5px;">S.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ M-DPDTT / SJ / &nbsp;&nbsp;&nbsp;&nbsp; / 20&nbsp;&nbsp;&nbsp;</div></td>
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
			Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi <br>
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
			<p align="justify">
			Menindaklanjuti usulan hibah Barang Milik Negara Dana Dekonsentrasi/Tugas Pembantuan Satuan Kerja <?php e($record->nama_satker); ?> yang disampaikan melalui surat <?php e($record->nama_eselon); ?> Nomor : <?php e($record->no_surat_usulan); ?> tanggal  <?php echo $convert->fmtdate($record->tgl_usulan,"dd month yyyy")?> perihal usulan Hibah <?php e($record->nama_satker);?>, dapat kami sampaikan hasil verifikasi dan validasi data sebagai berikut: 
			<ol>
				<li>Verifikasi dan validasi data usulan hibah dilakukan terbatas pada kelengkapan dan validitas bukti-bukti dokumen pendukung yang disampaikan, dibandingkan dengan syarat dan ketentuan usulan hibah dalam Peraturan Menteri Keuangan Nomor 104/PMK.06/2015 tentang perubahan kedua atas Peraturan Menteri Keuangan Nomor 125/PMK.06/2011 tentang Pengelolaan BMN Yang Berasal Dari Dana DK/TP Sebelum Tahun 2011;</li>
				<li>Kekurangan dokumen pendukung lainnya dengan rincian sebagaimana terlampir;</li>
			</ol>
			</p>
		</td>
	</tr>	
	<tr>
		<td>&nbsp;</td>
		<td colspan="5" align="justify">
			<p align="justify">
				Berkenaan dengan hal tersebut diatas, kami mohon kiranya Bapak/Ibu agar segera menyampaikan perbaikan usulan hibah sebagaimana dimaksud untuk diproses lebih lanjut. <br>
				Demikian kami sampaikan, atas perhatiannya diucapkan terima kasih.
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
			Kepala Biro Keuangan dan BMN 
			<br><br><br><br>
			Ekatmawati<br>

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
				<li>Sekretaris Jenderal Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi (sebagai laporan);</li>
				<li>Inspektur Jenderal Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi;</li>
				
				
				
			</ol>
		</p>
		</td>
		<td>&nbsp;</td>
	</tr>
	
	
	</table>
</div>
<?php  endforeach;endif;?>