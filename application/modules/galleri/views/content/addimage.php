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
            

            <div class="control-group<?php echo form_error('keterangan') ? ' error' : ''; ?>">
                <?php echo form_label("Keterangan", 'keterangan', array('class' => 'control-label')); ?>
                <div class='controls'>
                    <input id='keterangan' type='text' class="form-control" name='keterangan' maxlength='200' value="<?php echo set_value('keterangan', isset($galleri->keterangan) ? $galleri->keterangan : ''); ?>" />
                    <span class='help-inline'><?php echo form_error('keterangan'); ?></span>
                </div>
            </div>
        </fieldset>
        </div>
            <div class="box-footer">
            <input type='submit' name='save' id="btnsave" class='btn btn-primary' value="<?php echo lang('galleri_action_create'); ?>" />
            
        </div>
    <?php echo form_close(); ?>
</div>
</div>
<script>

    $("#btnsave").click(function(){
        submitdata();
        return false; 
    }); 
     
    function submitdata(){
        
        var json_url = "<?php echo base_url() ?>admin/content/galleri/save";
         $.ajax({    
            type: "POST",
            url: json_url,
            data: $("#frm").serialize(),
            dataType: "json",
            success: function(data){ 
                if(data.success){
                    swal("Pemberitahuan!", data.msg, "success");
                    location.reload();
                    $("#modal-global").modal("hide");
                }
                else {
                    $(".messages").empty().append(data.msg);
                }
            }});
        return false; 
    }
</script>