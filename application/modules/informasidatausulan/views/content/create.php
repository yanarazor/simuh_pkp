<link href="<?php echo base_url() ?>assets/css/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/css/custom_inputs.css" rel="stylesheet" type="text/css" />
<!-- daterange picker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datepicker/datepicker3.css">


<div class="row">
	<div class="col-xs-12">
		<div class="box">
		<?php if ($this->auth->has_permission('Informasidatausulan.Content.Create')) : ?>
		<div class="pull-right"><?php $this->load->view('_sub_nav');?> </div>
		<br><br>
        <?php endif; ?>

<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('informasidatausulan_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($informasidatausulan->id) ? $informasidatausulan->id : '';

?>
	<div class="box-body">
      <h3>Informasi Data Usulan</h3>
	<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            <div class="control-group<?php echo form_error('tgl_usulan') ? ' error' : ''; ?> col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_tgl_usulan') . lang('bf_form_label_required'), 'tgl_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css datepicker" id='tgl_usulan' type='text' required='required' name='tgl_usulan'  value="<?php echo set_value('tgl_usulan', isset($informasidatausulan->tgl_usulan) ? $informasidatausulan->tgl_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_usulan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('no_surat_usulan') ? ' error' : ''; ?> col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                <?php echo form_label(lang('informasidatausulan_field_no_surat_usulan') . lang('bf_form_label_required'), 'no_surat_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css span6" id='no_surat_usulan' type='text' required='required' name='no_surat_usulan' maxlength='50' value="<?php echo set_value('no_surat_usulan', isset($informasidatausulan->no_surat_usulan) ? $informasidatausulan->no_surat_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_usulan'); ?></span>
                </div>
            </div>


            <div class="control-group<?php echo form_error('nilai') ? ' error' : ''; ?> col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                <?php echo form_label(lang('informasidatausulan_field_nilai') . lang('bf_form_label_required'), 'nilai', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css span6" id='nilai' type='text' required='required' name='nilai' maxlength='50' value="<?php echo set_value('nilai', isset($informasidatausulan->nilai) ? $informasidatausulan->nilai : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai'); ?></span>
                </div>
            </div>

             <div class="control-group <?php echo form_error('usulan') ? 'error' : ''; ?> col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_usulan') . lang('bf_form_label_required'), 'usulan', array('class' => 'control-label')); ?>
				<div class='controls'>
				<span class="custom-dropdown small">
                	<select name="usulan" id="usulan" class=" chosen-select-deselect">
						<option value="">-- Pilih Usulan --</option>
						<?php if (isset($usulani) && is_array($usulani) && count($usulani)):?>
						<?php foreach($usulani as $usulanis):?>
							<option value="<?php echo $usulanis->value_pilihan?>" <?php if(isset($informasidatausulan['usulan']))  echo  ($usulanis->value_pilihan==$informasidatausulan['usulan']) ? "selected" : ""; ?>><?php echo $usulanis->label_pilihan; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
				</span>
					<span class='help-inline'><?php echo form_error('usulan'); ?></span>
				</div>
			</div>

     		<div class="control-group <?php echo form_error('eselon') ? 'error' : ''; ?> col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_eselon') . lang('bf_form_label_required'), 'eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
				<span class="custom-dropdown small">
                	<select name="eselon" id="eselon" class=" chosen-select-deselect">
						<option value="">-- Pilih Eselon --</option>
						<?php if (isset($eseloni) && is_array($eseloni) && count($eseloni)):?>
						<?php foreach($eseloni as $eselonis):?>
							<option value="<?php echo $eselonis->kode_eselon?>" <?php if(isset($informasidatausulan['eselon']))  echo  ($eselonis->kode_eselon==$informasidatausulan['eselon']) ? "selected" : ""; ?>><?php echo $eselonis->nama_eselon; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
				</span>
					<span class='help-inline'><?php echo form_error('eselon'); ?></span>
				</div>
			</div>

            <div class="control-group<?php echo form_error('satker') ? ' error' : ''; ?> col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_satker') . lang('bf_form_label_required'), 'satker', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css col-lg-6 col-md-6 col-sm-6 col-xs-12 " id='satker' type='text' required='required' name='satker' maxlength='100' value="<?php echo set_value('satker', isset($informasidatausulan->satker) ? $informasidatausulan->satker : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('satker'); ?></span>
                </div>
            </div>

			<div class="control-group <?php echo form_error('tahun_perolehan') ? 'error' : ''; ?> col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_tahun_perolehan') . lang('bf_form_label_required'), 'tahun_perolehan', array('class' => 'control-label')); ?>
				<div class='controls'>
				<span class="custom-dropdown small">
                	<select name="tahun_perolehan" id="tahun_perolehan" class=" chosen-select-deselect">
						<option value="">-- Pilih Tahun Perolehan --</option>
						<?php if (isset($perolehani) && is_array($perolehani) && count($perolehani)):?>
						<?php foreach($perolehani as $perolehanis):?>
							<option value="<?php echo $perolehanis->value_pilihan?>" <?php if(isset($informasidatausulan['tahun_perolehan']))  echo  ($perolehanis->value_pilihan==$informasidatausulan['tahun_perolehan']) ? "selected" : ""; ?>><?php echo $perolehanis->label_pilihan; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
				</span>
					<span class='help-inline'><?php echo form_error('tahun_perolehan'); ?></span>
				</div>
			</div>
			
	<div class="control-group <?php echo form_error('status') ? 'error' : ''; ?> col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_status') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
				<span class="custom-dropdown small">
                	<select name="status" id="status" class=" chosen-select-deselect">
						<option value="">-- Pilih Status --</option>
						<?php if (isset($statusi) && is_array($statusi) && count($statusi)):?>
						<?php foreach($statusi as $statsusis):?>
							<option value="<?php echo $statsusis->value_pilihan?>" <?php if(isset($informasidatausulan['status']))  echo  ($statsusis->value_pilihan==$informasidatausulan['status']) ? "selected" : ""; ?>><?php echo $statsusis->label_pilihan; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
				</span>
                    <span class='help-inline'><?php echo form_error('status'); ?></span>
                </div>
            </div>

		<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br><br>
			<h4>Disetujui </h4>
		<div class="control-group<?php echo form_error('tgl_surat_disetujui') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_tgl_surat_disetujui') . lang('bf_form_label_required'), 'tgl_surat_disetujui', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css datepicker" id='tgl_surat_disetujui' type='text' required='required' name='tgl_surat_disetujui'  value="<?php echo set_value('tgl_surat_disetujui', isset($informasidatausulan->tgl_surat_disetujui) ? $informasidatausulan->tgl_surat_disetujui : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_surat_disetujui'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('no_surat_disetujui') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <?php echo form_label(lang('informasidatausulan_field_no_surat_disetujui') . lang('bf_form_label_required'), 'no_surat_disetujui', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css span6" id='no_surat_disetujui' type='text' required='required' name='no_surat_disetujui' maxlength='50' value="<?php echo set_value('no_surat_disetujui', isset($informasidatausulan->no_surat_disetujui) ? $informasidatausulan->no_surat_disetujui : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_disetujui'); ?></span>
                </div>
            </div>	
			
		</fieldset>
			

		<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br><br>
			<h4>Ditolak / Dikembalikan </h4>
		<div class="control-group<?php echo form_error('tgl_surat_ditolak_atau_dikembalikan') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_tgl_surat_ditolak_atau_dikembalikan') . lang('bf_form_label_required'), 'tgl_surat_ditolak_atau_dikembalikan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css datepicker" id='tgl_surat_ditolak_atau_dikembalikan' type='text' required='required' name='tgl_surat_ditolak_atau_dikembalikan'  value="<?php echo set_value('tgl_surat_ditolak_atau_dikembalikan', isset($informasidatausulan->tgl_surat_ditolak_atau_dikembalikan) ? $informasidatausulan->tgl_surat_ditolak_atau_dikembalikan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_surat_ditolak_atau_dikembalikan'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('no_surat_ditolak_atau_dikembalikan') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <?php echo form_label(lang('informasidatausulan_field_no_surat_ditolak_atau_dikembalikan') . lang('bf_form_label_required'), 'no_surat_ditolak_atau_dikembalikan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css span6" id='no_surat_ditolak_atau_dikembalikan' type='text' required='required' name='no_surat_ditolak_atau_dikembalikan' maxlength='50' value="<?php echo set_value('no_surat_ditolak_atau_dikembalikan', isset($informasidatausulan->no_surat_ditolak_atau_dikembalikan) ? $informasidatausulan->no_surat_ditolak_atau_dikembalikan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_ditolak_atau_dikembalikan'); ?></span>
                </div>
            </div>	
			
		</fieldset>


		<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br><br>
			<h4>Di Inspektorat Jenderal </h4>
            <div class="control-group<?php echo form_error('tgl_surat_di_itjen') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_tgl_surat_di_itjen') . lang('bf_form_label_required'), 'tgl_surat_di_itjen', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css datepicker" id='tgl_surat_di_itjen' type='text' required='required' name='tgl_surat_di_itjen'  value="<?php echo set_value('tgl_surat_di_itjen', isset($informasidatausulan->tgl_surat_di_itjen) ? $informasidatausulan->tgl_surat_di_itjen : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_surat_di_itjen'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('no_surat_di_itjen') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <?php echo form_label(lang('informasidatausulan_field_no_surat_di_itjen') . lang('bf_form_label_required'), 'no_surat_di_itjen', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css span6" id='no_surat_di_itjen' type='text' required='required' name='no_surat_di_itjen' maxlength='50' value="<?php echo set_value('no_surat_di_itjen', isset($informasidatausulan->no_surat_di_itjen) ? $informasidatausulan->no_surat_di_itjen : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_di_itjen'); ?></span>
                </div>
            </div>	
			
		</fieldset>


        <fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <br><br>
            <h4>Di Kementerian Keuangan </h4>
            <div class="control-group<?php echo form_error('tgl_surat_kemenkeu') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_tgl_surat_kemenkeu') . lang('bf_form_label_required'), 'tgl_surat_kemenkeu', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css datepicker" id='tgl_surat_kemenkeu' type='text' required='required' name='tgl_surat_kemenkeu'  value="<?php echo set_value('tgl_surat_kemenkeu', isset($informasidatausulan->tgl_surat_kemenkeu) ? $informasidatausulan->tgl_surat_kemenkeu : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_surat_kemenkeu'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('no_surat_kemenkeu') ? ' error' : ''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <?php echo form_label(lang('informasidatausulan_field_no_surat_kemenkeu') . lang('bf_form_label_required'), 'no_surat_kemenkeu', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css span6" id='no_surat_kemenkeu' type='text' required='required' name='no_surat_kemenkeu' maxlength='50' value="<?php echo set_value('no_surat_kemenkeu', isset($informasidatausulan->no_surat_kemenkeu) ? $informasidatausulan->no_surat_kemenkeu : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_kemenkeu'); ?></span>
                </div>
            </div>  
            
        </fieldset>


		<fieldset class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<br><br><br>
            <div class="control-group<?php echo form_error('keterangan') ? ' error' : ''; ?> col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo form_label(lang('informasidatausulan_field_keterangan'), 'keterangan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <?php echo form_textarea(array('name' => 'keterangan','class' => 'form-control', 'id' => 'keterangan', 'rows' => '5', 'cols' => '80', 'value' => set_value('keterangan', isset($informasidatausulan->keterangan) ? $informasidatausulan->keterangan : ''))); ?>
                    <span class='help-inline'><?php echo form_error('keterangan'); ?></span>
                </div>
            </div>
        </fieldset>

        </fieldset>
        <br><br><br>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('informasidatausulan_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/informasidatausulan', lang('informasidatausulan_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
            </div>
    	</div>
    </div>
</div>



<script src="<?php echo base_url(); ?>themes/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>	 
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true,format: 'yyyy-mm-dd'
    });
</script>
<script language='JavaScript' type='text/javascript' src='<?php echo base_url();?>assets/js/tiny_mce/tiny_mce.js'></script>
<script type="text/javascript">
function ajaxfilemanager(field_name, url, type, win) {
   var ajaxfilemanagerurl = "<?php echo base_url();?>assets/js/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
   switch (type) {
    case "image":
     break;
    case "media":
     break;
    case "flash": 
     break;
    case "file":
     break;
    default:
     return false;
   }
            tinyMCE.activeEditor.windowManager.open({
                url: "<?php echo base_url();?>assets/js/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php",
                width: 782,
                height: 440,
                inline : "yes",
                close_previous : "no"
            },{
                window : win,
                input : field_name
            });           
  }
      
tinyMCE.init({
// General options
mode : "textareas",
theme : "advanced", 
plugins : "safari,pagebreak,style,table,save,iespell,preview,media,searchreplace,contextmenu,paste,directionality,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount",

// Theme options
theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect,|,ut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo",
theme_advanced_buttons2 : "",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_resizing : true,

// Example content CSS (should be your site CSS)
content_css : "css/content.css",

// Drop lists for link/image/media/template dialogs
template_external_list_url : "lists/template_list.js",
external_link_list_url : "lists/link_list.js", 

// Style formats
style_formats : [
{title : 'Bold text', inline : 'b'},
{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
{title : 'Table styles'},
{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
],

// Replace values for the template plugin
template_replace_values : {
username : "Some User",
staffid : "991234"
}
});
</script>
 
 <script type="text/javascript">
// alert("<?php echo base_url() ?>index.php/admin/content/datausulan/uploaddata");
 Dropzone.autoDiscover = false;
    var data_upload= new Dropzone(".dropzone",{
    	 autoProcessQueue: false,
		 url: "<?php echo base_url() ?>index.php/admin/content/datausulan/uploaddata",
		 maxFilesize: 2,
		 maxFiles: 1,
		 method:"post",
		 acceptedFiles:"application/vnd.ms-excel",
		 paramName:"userfile",
		 dictDefaultMessage:"<img src='<?php echo base_url(); ?>assets/images/dropico.png' width='50px'/><br>Drop File disini",
		 dictInvalidFileType:"Type file ini tidak dizinkan",
		 addRemoveLinks:true,
		 });
		 
  $("#frmdata").submit(function() {
		 var json_url = "<?php echo base_url() ?>index.php/admin/content/datausulan/savedata";
		 $.ajax({    
		 	type: "POST",
			url: json_url,
			data: $(this).serialize(),
			success: function(data){ 
				if(data == "exist"){
					alert("Nomor usulan sudah terdaftar");
					return false;
				}else{
					alert(data);
				  data_upload.on("sending",function(a,b,c){
						a.token=Math.random();
						c.append('token_foto',a.token);
						c.append('id_log',data);
						//console.log('mengirim');           
				  });
					data_upload.processQueue();
					alert("Save Sukses");
				}
			}});
		 return false; 
			
	});
	   
	
</script>


<script>
$(document).ready(function () {
    $('#kode_eselon1').change(function () {
    	var json_url = "<?php echo base_url() ?>index.php/admin/master/satker/getbyeselon";
    	alert(json_url);
        var selProv = $(this).val();
        console.log(selProv);  			//menampilan pada log browser apa yang dibawa pada saat dipilih pada combo box
        $.ajax({
            url: json_url,
            async: false,
            type: "POST",     //jenis method yang dibawa ke function
            data: "id_eselon="+selProv,   //data yang akan dibawa di url
            dataType: "html",
            success: function(data) {
            	alert(data);
                $('#kode_satker').html(data);   //hasil ditampilkan pada combobox id=kota
            }
        })
    });
 });

 $("#kode_eselon").change(function(){
			var eselon = $("#kode_eselon").val();
			$("#kode_satker").empty().append("<option>loading...</option>"); //show loading...
			var json_url = "<?php echo base_url() ?>index.php/admin/master/satker/getbyeselon?id_eselon=" + encodeURIComponent(eselon);

			$.getJSON(json_url,function(data){
				$("#kode_satker").empty(); 
				if(data ==""){
					$("#kode_satker").append("<option value=\"\">Pilih Satker </option>");
				}
				else{
					$("#kode_satker").append("<option value=\"\">-- Pilih Satker --</option>");
					for(i=0; i<data.kodesatker.length; i++){
						$("#kode_satker").append("<option value=\"" + data.kodesatker[i]  + "\">" + data.nama_satker[i] +"</option>");
					}
				}
			});
			return false;
		});
</script>

