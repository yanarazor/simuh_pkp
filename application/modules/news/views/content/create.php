<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/dropzone/dropzone.min.css">
<script src="<?php echo base_url(); ?>themes/admin/js/dropzone/dropzone.min.js"></script>
<!-- daterange picker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datepicker/datepicker3.css">

<?php

if (validation_errors()) :
?>
<div class='alert alert-block alert-error fade in'>
    <a class='close' data-dismiss='alert'>&times;</a>
    <h4 class='alert-heading'>
        <?php echo lang('news_errors_message'); ?>
    </h4>
    <?php echo validation_errors(); ?>
</div>
<?php
endif;

$id = isset($news->id) ? $news->id : '';

?>
<div class='box box-primary'>
	<div class="box-header with-border">
	   <h3>News</h3>
    </div>
    
	<div class="box-body" style="padding-left:35px;">
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
        <fieldset>
            

            <div class="control-group<?php echo form_error('title') ? ' error' : ''; ?> col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <?php echo form_label(lang('news_field_title') . lang('bf_form_label_required'), 'title', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='title' type='text' class="form-control" required='required' name='title' maxlength='255' value="<?php echo set_value('title', isset($news->title) ? $news->title : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('title'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('new_date') ? ' error' : ''; ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php echo form_label(lang('news_field_new_date'), 'new_date', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='new_date' type='text' class="form-control datepicker" name='new_date'  value="<?php echo set_value('new_date', isset($news->new_date) ? $news->new_date : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('new_date'); ?></span>
                </div>
            </div>


            <div class="control-group<?php echo form_error('author') ? ' error' : ''; ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php echo form_label(lang('news_field_author'), 'author', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='author' type='text' class="form-control" name='author' maxlength='50' value="<?php echo set_value('author', isset($news->author) ? $news->author : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('author'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('meta_keyword') ? ' error' : ''; ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php echo form_label(lang('news_field_meta_keyword'), 'meta_keyword', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='meta_keyword' type='text' class="form-control" name='meta_keyword' maxlength='255' value="<?php echo set_value('meta_keyword', isset($news->meta_keyword) ? $news->meta_keyword : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('meta_keyword'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('contents') ? ' error' : ''; ?> col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo form_label(lang('news_field_contents'), 'contents', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <?php echo form_textarea(array('name' => 'contents','class' => 'form-control', 'id' => 'contents', 'rows' => '5', 'cols' => '80', 'value' => set_value('contents', isset($news->contents) ? $news->contents : ''))); ?>
                    <span class='help-inline'><?php echo form_error('contents'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('scope') ? ' error' : ''; ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php echo form_label(lang('news_field_scope'), '', array('class' => 'control-label', 'id' => 'scope_label')); ?>
                <div class='controls' aria-labelled-by='scope_label'>
                    <label class='radio' for='scope_option1'>
                        <input id='scope_option1' name='scope' type='radio' value='internal' <?php echo set_radio('scope', 'internal', isset($news->scope) && $news->scope == 'internal'); ?> />
                        Internal
                    </label>
                    <label class='radio' for='scope_option2'>
                        <input id='scope_option2' name='scope' type='radio' value='eksternal' <?php echo set_radio('scope', 'eksternal', isset($news->scope) && $news->scope == 'eksternal'); ?> />
                        Eksternal
                    </label>
                    <span class='help-inline'><?php echo form_error('scope'); ?></span>
                </div>
            </div>

            <div class="control-group<?php echo form_error('published_news') ? ' error' : ''; ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?php echo form_label(lang('news_field_published_news'), '', array('class' => 'control-label', 'id' => 'published_news_label')); ?>
                <div class='controls' aria-labelled-by='published_news_label'>
                    <label class='radio' for='published_news_option1'>
                        <input id='published_news_option1' name='published_news' type='radio' value='published' <?php echo set_radio('published_news', 'published', isset($news->published_news) && $news->published_news == 'published'); ?> />
                        Published
                    </label>
                    <label class='radio' for='published_news_option2'>
                        <input id='published_news_option2' name='published_news' type='radio' value='draft' <?php echo set_radio('published_news', 'draft', isset($news->published_news) && $news->published_news == 'draft'); ?> />
                       Draft
                    </label>
                    <span class='help-inline'><?php echo form_error('published_news'); ?></span>
                </div>
            </div>
        </fieldset>
<br>
        <fieldset class='form-actions'>
            <input type='submit' name='save' class='btn btn-primary' value="<?php echo lang('news_action_create'); ?>" />
            <?php echo lang('bf_or'); ?>
            <?php echo anchor(SITE_AREA . '/content/news', lang('news_cancel'), 'class="btn btn-warning"'); ?>
            
        </fieldset>
    <?php echo form_close(); ?>
<br><br>
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
//content_css : "css/content.css",

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

