<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
<!-- sweet alert -->
<script src="<?php echo base_url(); ?>themes/admin/js/sweetalert.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/sweetalert.css">

<?php

$checkSegment = $this->uri->segment(4);
$areaUrl = SITE_AREA . '/content/news';


$num_columns	= 8;
$can_delete	= $this->auth->has_permission('News.Content.Delete');
$can_edit		= $this->auth->has_permission('News.Content.Edit');
$has_records	= isset($records) && is_array($records) && count($records);

if ($can_delete) {
    $num_columns++;
}
?>

<div class='box box-primary'>
	<div class="box-header with-border">
	    <h3>	<?php echo lang('news_area_title'); ?></h3>
    
			<?php if ($this->auth->has_permission('News.Content.Create')) : ?>
			<a href="<?php echo site_url($areaUrl . '/create'); ?>" id='create_new'>
				<button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add</button>
            </a>
            <?php endif; ?>
	
	</div>
		
    <div class="box-body" style="padding-left:35px;">
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class='table table-striped table-data'>
			<thead>
				<tr>
					<?php if ($can_delete && $has_records) : ?>
					<th class='column-check'><input class='check-all' type='checkbox' /></th>
					<?php endif;?>
					
					<th><?php echo lang('news_field_title'); ?></th>
					<th><?php echo lang('news_field_new_date'); ?></th>
					<th><?php echo lang('news_field_author'); ?></th>
					<th><?php echo lang('news_field_meta_keyword'); ?></th>
					<th><?php echo lang('news_field_scope'); ?></th>
					<th><?php echo lang('news_field_published_news'); ?></th>
					<th><?php echo lang('news_column_created'); ?></th>
					<th><?php echo lang('news_column_modified'); ?></th>
				</tr>
			</thead>
			<?php if ($has_records) : ?>
			<tfoot>
				<?php if ($can_delete) : ?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'>
						<?php echo lang('bf_with_selected'); ?>
						<input type='submit' name='delete' id='delete-me' class='btn btn-danger' value="<?php echo lang('bf_action_delete'); ?>" onclick="return confirm('<?php e(js_escape(lang('news_delete_confirm'))); ?>')" />
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
					<td><?php echo anchor(SITE_AREA . '/content/news/edit/' . $record->id, '<span class="icon-pencil"></span> ' .  $record->title); ?></td>
				<?php else : ?>
					<td><?php e($record->title); ?></td>
				<?php endif; ?>
					<td><?php e($record->new_date); ?></td>
					<td><?php e($record->author); ?></td>
					<td><?php e($record->meta_keyword); ?></td>
					<td><?php e($record->scope); ?></td>
					<td><?php e($record->published_news); ?></td>
					<td><?php e($record->created_on); ?></td>
					<td><?php e($record->modified_on); ?></td>
				</tr>
				<?php
					endforeach;
				else:
				?>
				<tr>
					<td colspan='<?php echo $num_columns; ?>'><?php echo lang('news_records_empty'); ?></td>
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
<script src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>themes/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.js"></script>
<script type="text/javascript">
$(".table-data").DataTable({
ordering: true,
});
 
</script>