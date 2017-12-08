<!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
		<img src="<?php echo base_url();?>themes/default/images/LogoKemendesa320x320A.png" width="50px;" style="float:left;">
		<a class="navbar-brand" href="<?php echo base_url();?>">&nbsp;&nbsp;<div style="float:right;"><?php e(class_exists('Settings_lib') ? settings_item('site.title') : 'SIMUH'); ?></div></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li <?php echo check_class('home'); ?>><a href="<?php echo site_url(); ?>"><?php e(lang('bf_home')); ?></a></li>
		<!--
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>-->
        </ul>
			<ul class="nav navbar-nav pull-right">
				<?php if (empty($current_user)) : ?>
			<li><a href="<?php echo site_url(LOGIN_URL); ?>">Sign In</a></li>
				<?php else : ?>
			<li><?php echo check_method('profile'); ?><a href="<?php echo site_url('users/profile'); ?>"><?php e(lang('bf_user_settings')); ?></a></li>
			<li><a href="<?php echo site_url('logout'); ?>"><?php e(lang('bf_action_logout')); ?></a></li>
			<?php endif; ?>			
			
			<?php if (isset($current_user->email)) : ?>
				<a href="<?php echo site_url(SITE_AREA) ?>" class="btn btn-large btn-success">Go to the Admin area</a>
			<?php else :?>
			<?php endif;?>
		</ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>