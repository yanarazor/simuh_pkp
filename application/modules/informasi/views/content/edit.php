<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('informasi_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($informasi->id) ? $informasi->id : '';

?>
<div class='admin-box'>
    <h3>Informasi</h3>
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            
			
			<div class="control-group<?php echo form_error('tgl_informasi') ? ' error' : ''; ?>">
                <?php echo form_label(lang('informasi_field_tgl_informasi') . lang('bf_form_label_required'), 'tgl_informasi', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='tgl_informasi' type='text' required='required' name='tgl_informasi'  value="<?php echo set_value('tgl_informasi', isset($informasi->tgl_informasi) ? $informasi->tgl_informasi : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('tgl_informasi'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('judul') ? ' error' : ''; ?>">
                <?php echo form_label(lang('informasi_field_judul') . lang('bf_form_label_required'), 'judul', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='judul' type='text' required='required' name='judul' maxlength='100' value="<?php echo set_value('judul', isset($informasi->judul) ? $informasi->judul : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('judul'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('isi') ? ' error' : ''; ?>">
                <?php echo form_label(lang('informasi_field_isi'), 'isi', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <?php echo form_textarea(array('name' => 'isi', 'id' => 'isi', 'rows' => '5', 'cols' => '80', 'value' => isset($informasi->isi) ? $informasi->isi : '')); ?>
                    <span class='help-inline'><?php echo form_error('isi'); ?></span>
                </div>
            </div>
        </fieldset>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('informasi_action_edit'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/informasi', lang('informasi_cancel'), 'class="btn btn-warning"'); ?>
            
            <?php if ($this->auth->has_permission('Informasi.Content.Delete')) : ?>
                <?php echo lang('bf_or'); ?>
                <button type='submit' name='delete' formnovalidate class='btn btn-danger' id='delete-me' onclick="return confirm('<?php e(js_escape(lang('informasi_delete_confirm'))); ?>');">
                    <span class='icon-trash icon-white'></span>&nbsp;<?php echo lang('informasi_delete_record'); ?>
                </button>
            <?php endif; ?>
        </fieldset>
    <?php echo form_close(); ?>
</div>
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
