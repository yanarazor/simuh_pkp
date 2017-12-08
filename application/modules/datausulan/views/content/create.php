<link href="<?php echo base_url() ?>assets/css/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url() ?>assets/css/custom_inputs.css" rel="stylesheet" type="text/css" />
<script src="<?php echo  base_url() ?>assets/js/dropzone/dropzone.min.js" type="text/javascript"></script>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Logs</h2>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   <div class="body card-underline">

<?php 

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('datausulan_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($datausulan->id) ? $datausulan->id : '';

?>
<div class='admin-box'>
    <h3>Data Usulan</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal" id="frmdata"'); ?>
        <fieldset>
		
     		<div class="control-group <?php echo form_error('kode_eselon') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kode_eselon') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
					<span class="custom-dropdown small">
                	<select name="kode_eselon" id="kode_eselon" class="span6 chosen-select-deselect">
						<option value="">-- Pilih Kode Eselon --</option>
						<?php if (isset($eseloni) && is_array($eseloni) && count($eseloni)):?>
						<?php foreach($eseloni as $eselonis):?>
							<option value="<?php echo $eselonis->kode_eselon?>" <?php if(isset($datausulan['kode_eselon']))  echo  ($eselonis->kode_eselon==$datausulan['kode_eselon']) ? "selected" : ""; ?>><?php echo $eselonis->nama_eselon; ?></option>
							<?php endforeach;?>
						<?php endif;?>
						</span>
					</select>
					<span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
				</div>
			</div>


     		<div class="control-group <?php echo form_error('kode_satker') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kode_satker') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
				<span class="custom-dropdown small">
                	<select name="kode_satker" id="kode_satker" class="span6 chosen-select-deselect">		
						<option value="">-- Pilih Satuan Kerja --</option>
						<?php if (isset($satkeri) && is_array($satkeri) && count($satkeri)):?>
						<?php foreach($satkeri as $satkeris):?>
							<option value="<?php echo $satkeris->kode_satker?>" <?php if(isset($datausulan['kode_satker']))  echo  ($satkeris->kode_satker==$datausulan['kode_satker']) ? "selected" : ""; ?>><?php echo $satkeris->nama_satker; ?></option>
							<?php endforeach;?>
						<?php endif;?>
						</span>
					</select>
					<span class='help-inline'><?php echo form_error('kode_eselon'); ?></span>
				</div>
			</div>

            <div class="control-group<?php echo form_error('no_surat_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_no_surat_usulan') . lang('bf_form_label_required'), 'no_surat_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css" id='no_surat_usulan' type='text' required='required' name='no_surat_usulan' maxlength='255' value="<?php echo set_value('no_surat_usulan', isset($datausulan->no_surat_usulan) ? $datausulan->no_surat_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('no_surat_usulan'); ?></span>
                </div>
            </div>


            <div class="control-group<?php echo form_error('tgl_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_tgl_usulan') . lang('bf_form_label_required'), 'tgl_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css" id='tgl_usulan' type='text' required='required' name='tgl_usulan'  value="<?php echo set_value('tgl_usulan', isset($datausulan->tgl_usulan) ? $datausulan->tgl_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_usulan'); ?></span>
                </div>
            </div>

	 <div class="control-group<?php echo form_error('nilai_usulan') ? ' error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_nilai_usulan') . lang('bf_form_label_required'), 'nilai_usulan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input class="enjoy-css" id='nilai_usulan' type='text' required='required' name='nilai_usulan' maxlength='255' value="<?php echo set_value('nilai_usulan', isset($datausulan->nilai_usulan) ? $datausulan->nilai_usulan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('nilai_usulan'); ?></span>
                </div>
            </div>

			
			<div class="control-group <?php echo form_error('kategori_usulan') ? 'error' : ''; ?>">
                <?php echo form_label(lang('datausulan_field_kategori_usulan') . lang('bf_form_label_required'), 'kode_eselon', array('class' => 'control-label')); ?>
				<div class='controls'>
				<span class="custom-dropdown small">
                	<select name="kategori_usulan" id="kategori_usulan" class="span6 chosen-select-deselect">
						<option value="">-- Pilih Kategori Usulan --</option>
						<?php if (isset($KategoriUsulani) && is_array($KategoriUsulani) && count($KategoriUsulani)):?>
						<?php foreach($KategoriUsulani as $KategoriUsulanis):?>
							<option value="<?php echo $KategoriUsulanis->value_pilihan?>" <?php if(isset($datausulan['kategori_usulan']))  echo  ($KategoriUsulanis->value_pilihan==$datausulan['kategori_usulan']) ? "selected" : ""; ?>><?php echo $KategoriUsulanis->label_pilihan; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
				</span>	
					<span class='help-inline'><?php echo form_error('kategori_usulan'); ?></span>
				</div>
			</div>
			
			
        </fieldset>
        <fieldset>
        	<legend> File Detil </legend>
              <div class="dropzone well well-sm data_upload">
              </div>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('datausulan_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/datausulan', 'Kembali', 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
</div>


  </div>
    </div>   
    </div>
    </div>
   
</section>

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
