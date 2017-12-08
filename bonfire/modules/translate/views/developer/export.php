<?php
$this->load->library('convert');
$convert = new convert();
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Translate</h2>
            <p class="intro"><?php echo lang('translate_export_note'); ?></p>
        </div>
        <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body">

                    <?php $this->load->view('_sub_nav');?>


    <?php echo form_open(current_url(), 'class="form-horizontal"'); ?>
            <div class="control-group">
                <label for="export_lang" class="control-label"><?php echo lang('translate_language'); ?></label>
                <div class="controls">
                    <select name="export_lang" id="export_lang">
                        <?php foreach ($languages as $lang) : ?>
                        <option value="<?php e($lang); ?>" <?php echo isset($trans_lang) && $trans_lang == $lang ? 'selected="selected"' : '' ?>><?php e(ucfirst($lang)); ?></option>
                        <?php endforeach; ?>
                        <option value="other"><?php e(lang('translate_other')); ?></option>
                    </select>
                </div>
            </div>

                <label class="control-label"><?php echo lang('translate_include'); ?></label>
                <div class="demo-checkbox">
                    <input type="checkbox" id="include_core"  name="include_core" value="1" checked="checked" />
                    <label for="include_core">
                        <?php echo lang('translate_include_core'); ?>
                    </label>
                    <br>
                    <input type="checkbox" id="include_mods" name="include_mods" value="1" />              
                        <label for="include_mods">
                        <?php echo lang('translate_include_mods'); ?>
                    </label>
                </div>

        <fieldset class="form-actions">
            <input type="submit" name="export" class="btn btn-primary" value="<?php e(lang('translate_export_short')); ?>" />
        </fieldset>
    <?php echo form_close(); ?>

                
                </div>
        </div>
    </section>