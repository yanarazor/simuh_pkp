<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('barang_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($barang->id) ? $barang->id : '';

?>
<div class='admin-box'>
    <h3>Barang</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('nomor_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_nomor_usulan'), 'nomor_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nomor_usulan' type='text' name='nomor_usulan' maxlength='10' value="<?php echo set_value('nomor_usulan', isset($barang->nomor_usulan) ? $barang->nomor_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nomor_usulan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nama_barang') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_nama_barang'), 'nama_barang', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nama_barang' type='text' name='nama_barang' maxlength='200' value="<?php echo set_value('nama_barang', isset($barang->nama_barang) ? $barang->nama_barang : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nama_barang'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('merek') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_merek'), 'merek', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='merek' type='text' name='merek' maxlength='100' value="<?php echo set_value('merek', isset($barang->merek) ? $barang->merek : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('merek'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nup') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_nup'), 'nup', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nup' type='text' name='nup' maxlength='20' value="<?php echo set_value('nup', isset($barang->nup) ? $barang->nup : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nup'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('tahun_perolehan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_tahun_perolehan'), 'tahun_perolehan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='tahun_perolehan' type='text' name='tahun_perolehan' maxlength='4' value="<?php echo set_value('tahun_perolehan', isset($barang->tahun_perolehan) ? $barang->tahun_perolehan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tahun_perolehan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('luar') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_luar'), 'luar', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='luar' type='text' name='luar' maxlength='10' value="<?php echo set_value('luar', isset($barang->luar) ? $barang->luar : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('luar'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('satuan_luas') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_satuan_luas'), 'satuan_luas', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='satuan_luas' type='text' name='satuan_luas' maxlength='10' value="<?php echo set_value('satuan_luas', isset($barang->satuan_luas) ? $barang->satuan_luas : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('satuan_luas'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('jumlah') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_jumlah'), 'jumlah', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='jumlah' type='text' name='jumlah' maxlength='20' value="<?php echo set_value('jumlah', isset($barang->jumlah) ? $barang->jumlah : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('jumlah'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('satuan_jumlah') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_satuan_jumlah'), 'satuan_jumlah', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='satuan_jumlah' type='text' name='satuan_jumlah' maxlength='20' value="<?php echo set_value('satuan_jumlah', isset($barang->satuan_jumlah) ? $barang->satuan_jumlah : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('satuan_jumlah'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('harga_satuan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_harga_satuan'), 'harga_satuan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='harga_satuan' type='text' name='harga_satuan' maxlength='10' value="<?php echo set_value('harga_satuan', isset($barang->harga_satuan) ? $barang->harga_satuan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('harga_satuan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nilai_perolehan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_nilai_perolehan'), 'nilai_perolehan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nilai_perolehan' type='text' name='nilai_perolehan' maxlength='10' value="<?php echo set_value('nilai_perolehan', isset($barang->nilai_perolehan) ? $barang->nilai_perolehan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_perolehan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('nilai_buku') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_nilai_buku'), 'nilai_buku', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='nilai_buku' type='text' name='nilai_buku' maxlength='10' value="<?php echo set_value('nilai_buku', isset($barang->nilai_buku) ? $barang->nilai_buku : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_buku'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('kondisi') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_kondisi'), 'kondisi', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='kondisi' type='text' name='kondisi' maxlength='20' value="<?php echo set_value('kondisi', isset($barang->kondisi) ? $barang->kondisi : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('kondisi'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('sertifikat') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='sertifikat'>
                        <input type='checkbox' id='sertifikat' name='sertifikat'  value='1' <?php echo set_checkbox('sertifikat', 1, isset($barang->sertifikat) && $barang->sertifikat == 1); ?> />
                        <?php echo lang('barang_field_sertifikat'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('sertifikat'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('imb') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='imb'>
                        <input type='checkbox' id='imb' name='imb'  value='1' <?php echo set_checkbox('imb', 1, isset($barang->imb) && $barang->imb == 1); ?> />
                        <?php echo lang('barang_field_imb'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('imb'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('stnk') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='stnk'>
                        <input type='checkbox' id='stnk' name='stnk'  value='1' <?php echo set_checkbox('stnk', 1, isset($barang->stnk) && $barang->stnk == 1); ?> />
                        <?php echo lang('barang_field_stnk'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('stnk'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('kib') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='kib'>
                        <input type='checkbox' id='kib' name='kib'  value='1' <?php echo set_checkbox('kib', 1, isset($barang->kib) && $barang->kib == 1); ?> />
                        <?php echo lang('barang_field_kib'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('kib'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('bast') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='bast'>
                        <input type='checkbox' id='bast' name='bast'  value='1' <?php echo set_checkbox('bast', 1, isset($barang->bast) && $barang->bast == 1); ?> />
                        <?php echo lang('barang_field_bast'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('bast'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('kontrak') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='kontrak'>
                        <input type='checkbox' id='kontrak' name='kontrak'  value='1' <?php echo set_checkbox('kontrak', 1, isset($barang->kontrak) && $barang->kontrak == 1); ?> />
                        <?php echo lang('barang_field_kontrak'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('kontrak'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('dipa') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='dipa'>
                        <input type='checkbox' id='dipa' name='dipa'  value='1' <?php echo set_checkbox('dipa', 1, isset($barang->dipa) && $barang->dipa == 1); ?> />
                        <?php echo lang('barang_field_dipa'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('dipa'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('foto') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='foto'>
                        <input type='checkbox' id='foto' name='foto'  value='1' <?php echo set_checkbox('foto', 1, isset($barang->foto) && $barang->foto == 1); ?> />
                        <?php echo lang('barang_field_foto'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('foto'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('lainnya') ? ' error' : ''; ?>">
                <div class='controls'>
                    <label class='checkbox' for='lainnya'>
                        <input type='checkbox' id='lainnya' name='lainnya'  value='1' <?php echo set_checkbox('lainnya', 1, isset($barang->lainnya) && $barang->lainnya == 1); ?> />
                        <?php echo lang('barang_field_lainnya'); ?>
                    </label>
                    <span class='help-inline'><?php echo form_error('lainnya'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('keterangan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('barang_field_keterangan'), 'keterangan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <?php echo form_textarea(array('name' => 'keterangan', 'id' => 'keterangan', 'rows' => '5', 'cols' => '80', 'value' => set_value('keterangan', isset($barang->keterangan) ? $barang->keterangan : ''))); ?>
                    <span class='help-inline'><?php echo form_error('keterangan'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('barang_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/barang', lang('barang_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>