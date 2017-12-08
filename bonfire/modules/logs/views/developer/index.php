<?php
$this->load->library('convert');
$convert = new convert();
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Logs</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <div class="body card-underline">
                    

                    <?php $this->load->view('_sub_nav');?>
                
<?php if ($log_threshold == 0) : ?>
<div class="alert alert-warning fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <?php e(lang('logs_not_enabled')); ?>
</div>
<?php
endif;
if (empty($logs) || ! is_array($logs)) :
?>
<div class="alert alert-info fade in notification">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php echo lang('logs_no_logs'); ?></p>
</div>
<?php else : ?>

    <div class="demo-checkbox">

    <?php echo form_open(); ?>

        <table class="table table-striped logs">
            <thead>
                <tr>                    
                    <th class='column-check'>
                      <fieldset class="form-group">
                            <input type="checkbox" class="check-all" id="check-all" name="check-all"/>
                            <label class="" for="check-all"></label>
                        </fieldset>
                    </th>
                    <th class='date'><?php e(lang('logs_date')); ?></th>
                    <th><?php e(lang('logs_file')); ?></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <?php echo lang('bf_with_selected'); ?>:
                        <input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('logs_delete_confirm'))); ?>')" />
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($logs as $log) :
                    // Skip the index.html file.
                    if ($log == 'index.html') {
                        continue;
                    }
                ?>

                <tr>
                    <th scope="row" class='column-check'>
                      <fieldset class="form-group">
                            <input type="checkbox"  value="<?php e($log); ?>"  id="<?php e($log); ?>" name="checked[]" />
                            <label class="" for="<?php e($log); ?>"></label>
                        </fieldset>
                    </th>

                    <td class='date'>
                        <a href='<?php e(site_url(SITE_AREA . "/developer/logs/view/{$log}")); ?>'>
                            <?php e(date('F j, Y', strtotime(str_replace('.php', '', str_replace('log-', '', $log))))); ?>
                        </a>
                    </td>
                    <td><?php e($log); ?></td>
                </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
        </div>
    <?php
        echo form_close(); 
        echo $this->pagination->create_links();
    ?>
<br>
<!-- Purge? -->
    <h3><?php echo lang('logs_delete_button'); ?></h3>
    <?php echo form_open(); ?>
        <div class="alert alert-warning fade in">
            <a class="close" data-dismiss="alert">&times;</a>
            <?php echo lang('logs_delete_note'); ?>
        </div>

        <fieldset class="form-actions">
            <button type="submit" name="delete_all" class="btn btn-danger" onclick="return confirm('<?php e(js_escape(lang('logs_delete_all_confirm'))); ?>')">
                <span class="icon-white icon-trash"></span>&nbsp;<?php echo lang('logs_delete_button'); ?>
            </button>
        </fieldset>
    <?php echo form_close(); ?>

<?php
endif;
?>

    </div>
    </div>   
    </div>
    </div>
   
</section>




