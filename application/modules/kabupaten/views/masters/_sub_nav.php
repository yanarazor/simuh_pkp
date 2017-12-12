<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/masters/kabupaten') ?>" id="list"><?php echo lang('kabupaten_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Kabupaten.masters.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/masters/kabupaten/create') ?>" id="create_new"><?php echo lang('kabupaten_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>