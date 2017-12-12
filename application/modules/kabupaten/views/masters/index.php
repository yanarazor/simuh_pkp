<?php

$num_columns	= 9;
$can_delete	= $this->auth->has_permission('Kabupaten.masters.Delete');
$can_edit		= $this->auth->has_permission('Kabupaten.masters.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

?>
<div class="admin-box">
	 <form action="<?php $this->uri->uri_string() ?>" method="get" accept-charset="utf-8">
	 <table>
        	<tr>
				<td>
                	Provinsi
                </td>
                <td>
                	Kabupaten
                </td>
            </tr>
            <tr>
                <td>
                	<select name="prov" id="ID_PROV" class="chosen-select-deselect" style="width:400px">
						<option value="">-- Pilih Provinsi --</option>
						<?php if (isset($provinsis) && is_array($provinsis) && count($provinsis)):?>
						<?php foreach($provinsis as $provinsi_record):?>
							<option value="<?php echo $provinsi_record->id?>" <?php if(isset($prov))  echo  ($provinsi_record->id==$prov) ? "selected" : ""; ?>><?php echo $provinsi_record->prov; ?></option>
							<?php endforeach;?>
						<?php endif;?>
					</select>
               	</td> 
                <td>
                	<input id='kab' type='text' name='kab' maxlength="100" value="<?php echo set_value('kab', isset($kab) ? $kab : ''); ?>" />
				</td>  
            
                <td valign="top">
                	 <input type="submit" name="Act" class="btn btn-primary" value="Cari "  />
               	</td> 
            </tr>
            
        </table>
    <?php echo form_close(); ?>
   <div class="alert alert-block alert-warning fade in ">
      <a class="close" data-dismiss="alert">&times;</a>
       Jumlah :  <?php echo isset($total) ? $total : ''; ?>
    </div>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Id</th>
					<th>Kab</th>
					<th>Keterangan</th>
					<th>Provinsi</th> 
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan="<?php echo $num_columns; ?>">
						<?php echo lang('bf_with_selected'); ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('kabupaten_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/masters/kabupaten/edit/' . $record->kode, '<span class="icon-pencil"></span>' .  $record->id); ?></td>
				<?php else : ?>
					<td><?php e($record->id); ?></td>
				<?php endif; ?>
					<td><?php e($record->kab) ?></td>
					<td><?php e($record->keterangan) ?></td>
					<td><?php e($record->prov) ?></td> 
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
    <?php echo $this->pagination->create_links(); ?>
</div>