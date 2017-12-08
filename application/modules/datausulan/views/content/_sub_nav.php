<?php
 
$checkSegment = $this->uri->segment(4);
$areaUrl = SITE_AREA . '/content/datausulan';

?>
<ul class='nav nav-pills'>
<li<?php echo $checkSegment == '' ? ' class=""' : ''; ?>>
		<a href="<?php echo base_url();?>assets/kertas_kerja_draft.xls" id='download'>
            Download Kertas Kerja
        </a>
	</li>
	 
	<li<?php echo $checkSegment == '' ? ' class="active"' : ''; ?>>
		<a href="<?php echo site_url($areaUrl); ?>" id='list'>
            <?php echo lang('datausulan_list'); ?>
        </a>
	</li>
	<?php if ($this->auth->has_permission('DataUsulan.Content.Create')) : ?>
	<li<?php echo $checkSegment == 'create' ? ' class="active"' : ''; ?>>
		<a href="<?php echo site_url($areaUrl . '/create'); ?>" id='create_new'>
            <?php echo lang('datausulan_new'); ?>
        </a>
	</li>
	<?php endif; ?>
	
	
</ul>