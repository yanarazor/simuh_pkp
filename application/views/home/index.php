

<?php 
  $this->load->library('convert');
  $convert = new convert();

  $has_records  = isset($recordNews) && is_array($recordNews) && count($recordNews);
  $has_records1  = isset($records) && is_array($records) && count($records);
  $num_columns  = 8;

?>
     <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-wear-section">
          <div class="android-wear-band">
            <div class="android-wear-band-text">
       <!-- <a href="#screens">
            <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
        </a> -->
              <div class="mdl-typography--display-2 mdl-typography--font-thin">
              <i class="material-icons">search</i> STATUS DOKUMEN </div>
              
					<div class="button_box2">
		<!--			<form class="form-wrapper-2 cf">
					<input type="text" placeholder="#ID Dokumen" required>
					<button type="submit">Cari</button>
					</form>
--> 
  <table id="" class='table table-striped table-responsive table-data display' width="100%" cellpadding="0">
      <thead style="background-color:#cc3333;font-size:;font-width:;color:#fff;text-align: center;">
        <tr style="padding:15px;">
          <th> SATUAN KERJA </th>
          <th> USULAN </th>
          <th> PERSETUJUAN </th>
          <th> PENGEMBALIAN </th>
          <th> BIRO KEUANNGAN </th>
          <th> INSPEKTORAT </th>
          <th> KEMENKEU </th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($has_records1) :
          foreach ($records as $record) :
  //        $this->load->model('barang/barang_model');
          $countselesai = $this->informasidatausulan_model->countselesai($record->eselon);
          $countdisetujui = $this->informasidatausulan_model->countditolak($record->eselon);
          $countditolak = $this->informasidatausulan_model->countditolak($record->eselon);
          $countdiitjen = $this->informasidatausulan_model->countdiitjen($record->eselon);
          $countbelumdiverifikasi = $this->informasidatausulan_model->countbelumdiverifikasi($record->eselon);
          //echo $record->id." ".$counttidakterverifikasi;
        ?>
        <tr style="text-align: center;">

          <td style="font-size:12px;text-align:left;"><?php e($record->nama_eselon); ?></td>
          <td><?php e($record->Jumlah); ?></td>     
          <td><?php e($countselesai); // echo $convert->fmtdate($record->tgl_usulan,"dd month yyyy")?></td>
          <td><?php e($countdisetujui); // echo $convert->ToRp($record->nilai_usulan)?></td>
          <td><?php e($countditolak); // echo $convert->ToRp($record->nilai_usulan)?></td>
          <td><?php e($countdiitjen); // echo $convert->ToRp($record->nilai_usulan)?></td>
          <td><?php e($countbelumdiverifikasi); // echo $convert->ToRp($record->nilai_usulan)?></td>
        </tr>
        <?php
          endforeach;
        else:
        ?>
        <tr>
          <td colspan='<?php echo $num_columns; ?>'>Tidak ada data Usulan</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>


					</div>
            

            </div>
          </div>
        </div>

      
<!--
<div id="example">
  <ul>
  <?php // if ($has_records) : ?>
            <?php // foreach ($recordNews as $record) :?>
          <li><?php // e($record->title); ?></li>
        <?php
//          endforeach;
//        else:
        ?>
        test
      <?php // endif;?>
        </ul>
</div>

<script type="text/javascript">
  $(function() {
  $('#example').vTicker();
});
</script>
-->
