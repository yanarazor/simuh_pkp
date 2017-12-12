<?php

$num_columns	= 7;
$can_delete	= $this->auth->has_permission('Propinsi.Masters.Delete');
$can_edit		= $this->auth->has_permission('Propinsi.Masters.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box box box-primary">
<div class="box-body">
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Id</th>
					<th>Prov</th>
					<th>Keterangan</th>
					<th>Map Id</th>
					<th>Koordinat x</th>
					<th>Koordinat y</th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('propinsi_delete_confirm'))); ?>')" />
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
					<td class="column-check"><input type="checkbox" name="checked[]" value="<?php echo $record->kode; ?>" /></td>
					<?php endif;?>
					
				<?php if ($can_edit) : ?>
					<td><?php echo anchor(SITE_AREA . '/masters/propinsi/edit/' . $record->kode, '<span class="icon-pencil"></span>' .  $record->id); ?></td>
				<?php else : ?>
					<td><?php e($record->id); ?></td>
				<?php endif; ?>
					<td><?php e($record->prov) ?></td>
					<td><?php e($record->keterangan) ?></td>
					<td><?php e($record->map_id) ?></td>
					<td><?php e($record->koordinat_x) ?></td>
					<td><?php e($record->koordinat_y) ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">No records found that match your selection.</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>
</div>