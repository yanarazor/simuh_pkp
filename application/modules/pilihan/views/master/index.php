<?php

$num_columns	= 4;
$can_delete	= $this->auth->has_permission('pilihan.Master.Delete');
$can_edit		= $this->auth->has_permission('pilihan.Master.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <?php  if ($this->auth->has_permission('Pilihan.Master.Create')) : ?>
        <div class="pull-right"><?php  $this->load->view('_sub_nav');?> </div>
        <br><br>
        <?php  endif; ?>
            <div class="box-header">
                <h3>
                    <?php echo lang('pilihan_area_title'); ?>
                </h3>
            </div> 
    <div class="box-body" style="padding: 5px;padding-left: 30px;">
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class='table table-striped'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					
					<th><?php echo lang('pilihan_field_jenis_pilihan'); ?></th>
					<th><?php echo lang('pilihan_field_nama_pilihan'); ?></th>
					<th><?php echo lang('pilihan_field_value_pilihan'); ?></th>
					<th><?php echo lang('pilihan_field_label_pilihan'); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('pilihan_delete_confirm'))); ?>')" />
					</td>
				</tr>
				<?php endif; ?>
			</tfoot>
			<?php endif; ?>
			<tbody>
				<?php
				if ($has_records) :
					foreach ($records as $record) :
				?>
				<tr>
					<?php if ($can_delete) : ?>
					<td class='column-check'><input type='checkbox' name='checked[]' value='<?php echo $record->id; ?>' /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/master/pilihan/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->jenis_pilihan); ?></td>
				<?php else : ?>
					<td><?php e($record->jenis_pilihan); ?></td>
				<?php endif; ?>
					<td><?php e($record->nama_pilihan); ?></td>
					<td><?php e($record->value_pilihan); ?></td>
					<td><?php e($record->label_pilihan); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('pilihan_records_empty'); ?></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php
    echo form_close();
    
    echo $this->pagination->create_links();
    ?>
</div>
</div>
</div>
</div>