<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/dropzone/dropzone.min.css">
<script src="<?php echo base_url(); ?>themes/admin/js/dropzone/dropzone.min.js"></script>

<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('galleri_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($galleri->id) ? $galleri->id : '';

?>
<div class='box box-warning' id="form-diklat-fungsional-add">
    <div class="box-body">
        <div class="messages">
        </div>
    <?php echo form_open($this->uri->uri_string(), 'id="frm"'); ?>
        <fieldset>
             <div class="control-group">
                    <?php echo form_label("File", 'photo', array('class' => 'control-label')); ?>
                    <div class='controls'>
                        <input id='id_detil' type='hidden' class="form-control" name='id_galleri' maxlength='200' value="<?php echo isset($id_detil) ? $id_detil : ""; ?>" />
                        <input id='kolom' type='hidden' class="form-control" name='kolom' maxlength='200' value="<?php echo isset($kolom) ? $kolom : ""; ?>" />
                        <div class="dropzone well well-sm drphoto">
                        </div>
                    </div>
                    <div class="divphoto">
                        <?php if(isset($records->nama_file) and $records->nama_file != ""){ ?>
                        <div class="input-group">
                           <div class="input-group-addon">File</div>
                           <input type="text" name="nama_file" value="<?php echo $records->nama_file;?>" id="nama_file" class="form-control just-upload-field" />
                           <div class="input-group-addon"><a href="<?php echo $this->settings_lib->item('site.urluploaded'); ?><?php echo $records[0]->l_triwulan1;?>" target="_blank"><i class="fa fa-mail-forward"></i></a></div>
                           <span class="input-group-btn">
                             <button type="button" kode="<?php echo $records[0]->id; ?>" kolom="nama_file" kodediv="drphoto" class="btn btn-info btn-flat alertdelete">X</button>
                           </span>
                        </div>
                        <?php } ?>
                   </div>
                </div>
        </fieldset>
        </div>
             
    <?php echo form_close(); ?>
</div>
</div>
<script>
Dropzone.autoDiscover = true;
var drphoto = new Dropzone(".drphoto",{
         autoProcessQueue: true,
         url: "<?php echo base_url() ?>index.php/admin/content/datausulan/uploadberkas",
         maxFilesize: 20,
         parallelUploads : 10,
         method:"post",
         //acceptedFiles:"application/pdf",
         paramName:"userfile",
         dictDefaultMessage:"<img src='<?php echo base_url(); ?>assets/images/dropico.png' width='50px'/><br>Drop dokumen",
         dictInvalidFileType:"Type file ini tidak dizinkan",
         addRemoveLinks:true,
         init: function () {
               this.on("queuecomplete", function (file) {
                    drphoto.removeAllFiles(true);
               });
           }
         });
         drphoto.on("sending",function(a,b,c){
             a.token=Math.random();
             c.append('id_detil',"<?php echo isset($id_detil) ? $id_detil : ''; ?>");
             c.append('kolom',"<?php echo isset($kolom) ? $kolom : ''; ?>");
             console.log('mengirim');           
         });
         drphoto.on("success",function(a,b){
            location.reload();
            $("#modal-global").modal("hide");
         });
</script>