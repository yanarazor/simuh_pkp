<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/masters/propinsi') ?>" id="list"><?php echo lang('propinsi_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Propinsi.Masters.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/masters/propinsi/create') ?>" id="create_new"><?php echo lang('propinsi_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>