<?php

$num_columns	= 2;
$can_delete	= $this->auth->has_permission('Galleri.Content.Delete');
$can_edit		= $this->auth->has_permission('Galleri.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);
if ($can_delete) {
    $num_columns++;
}
?>
<div class="row">
	<div class="col-xs-12">
		<div class="box box-warning">
			<div class="box-header">
              <h3 class="box-title">Galleri</h3>
              
              <?php if ($this->auth->has_permission('Galleri.Content.Create')) : ?>
              <a type="button" class="show-modal btn btn-default btn-warning margin pull-right " href="<?php echo base_url(); ?>index.php/admin/content/galleri/create" tooltip="Tambah Galleri">
				<i class="fa fa-plus"></i> Tambah
            </a>
              <?php endif; ?>
            </div>
			<div class="box-body">

				<?php echo form_open($this->uri->uri_string()); ?>
					<table class='table table-striped table-bordered'>
						<thead>
							<tr>
								<?php if ($can_delete && $has_records) : ?>
								<th class='column-check' width="100px"><input class='check-all' type='checkbox' /></th>
								<?php endif;?>
								<th><?php echo lang('galleri_field_nama_galleri'); ?></th>
								<th width="100px">Lihat</th>
							</tr>
						</thead>
						<?php if ($has_records) : ?>
						<tfoot>
							<?php if ($can_delete) : ?>
							<tr>
								<td colspan='<?php echo $num_columns; ?>'>
									<?php echo lang('bf_with_selected'); ?>
									<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('galleri_delete_confirm'))); ?>')" />
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
								<td>
									<a href="<?php echo base_url(); ?>index.php/admin/content/galleri/edit/<?php e($record->id); ?>" class="show-modal" ><?php e($record->nama_galleri); ?></a>
									
								</td>
							<?php else : ?>
								<td><?php e($record->nama_galleri); ?></td>
							<?php endif; ?>
							<td align="center">
								<a href="<?php echo base_url(); ?>index.php/admin/content/galleri/lihat/<?php e($record->id); ?>">
									<span class='fa-stack warning'>
										<i class='fa fa-square fa-stack-2x'></i>
									 	<i class="fa fa-eye fa-stack-1x fa-inverse"></i>
								 	</span>
								 </a>
							</td>
							</tr>
							<?php
								endforeach;
							else:
							?>
							<tr>
								<td colspan='<?php echo $num_columns; ?>'><?php echo lang('galleri_records_empty'); ?></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
				<?php
			    echo form_close();
			    
			    ?>
			</div>
		</div>
	</div>
</div>