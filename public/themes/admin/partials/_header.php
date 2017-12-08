<?php
	Assets::add_css( array(
		'font-awesome.min.css',
		'ionicons.min.css',
	));

	if (isset($shortcut_data) && is_array($shortcut_data['shortcut_keys'])) {
		Assets::add_js($this->load->view('ui/shortcut_keys', $shortcut_data, true), 'inline');
	}
	$mainmenu = $this->uri->segment(2);
	$menu = $this->uri->segment(3);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo isset($toolbar_title) ? $toolbar_title .' : ' : ''; ?> <?php echo $this->settings_lib->item('site.title') ?></title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex" />
   	<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
   	<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/bootstrap.min.css">
   	<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/dist/css/AdminLTE.min.css">
   	<link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/dist/css/skins/_all-skins.min.css">
    <script src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>

   	<?php echo Assets::css(null, true); ?> 
</head> 

<body class="skin-red sidebar-mini layout-boxed fixed">
 
<div id="wrapper">

<header class="main-header">
    <!-- Logo -->
	<a href="<?php echo base_url(); ?>" class="logo">
	<!-- mini logo for sidebar mini 50x50 pixels -->
	
      <span class="logo-mini"  style="background-color:#fff;"><img src="<?php echo base_url();?>assets/images/LogoKemendesa110x110.png" height="25"/></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"  style="background-color:#fff;">
      	<img src="<?php echo base_url();?>assets/images/LogoKemendesa110x110.png" height="45"/> 
      		<?php
			//	echo $this->settings_lib->item('site.title');
			?>
		</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/images/garuda.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo (isset($current_user->display_name) && !empty($current_user->display_name)) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/images/garuda.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo (isset($current_user->display_name) && !empty($current_user->display_name)) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email); ?>

                </p>


              </li>
              <!-- Menu Body -->
            <!--
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                </li>
                <!-- /.row -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url(SITE_AREA .'/settings/users/edit') ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
        <!--    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>

    </nav>
  </header>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/images/garuda.jpg" class="img-circle" alt="User Image">
          
        </div>
        <div class="pull-left info">
          <p><?php echo (isset($current_user->display_name) && !empty($current_user->display_name)) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <?php if ($this->auth->has_permission('Dashboard.Content.View')) : ?>
        <li class="treeview <?php echo $mainmenu == 'content' ? 'active' : '' ?>">
          <a href="<?php echo base_url();?>index.php/admin/content/dashboard/">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
             <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
         <?php endif; ?> 

        <?php // if ($this->auth->has_permission('Site.Master.View')) : ?>
        <li class="treeview <?php echo $mainmenu == 'master' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/admin/master/masterbarang"><i class="fa fa-circle-o"></i>Barang</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/master/eselon"><i class="fa fa-circle-o"></i>Eselon</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/master/satker"><i class="fa fa-circle-o"></i>Satuan Kerja</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/master/pilihan"><i class="fa fa-circle-o"></i>Pilihan</a></li>
          </ul>
        </li>
         <?php // endif; ?>

        <?php if ($this->auth->has_permission('Site.Laporan.View')) : ?>
        <li class="treeview <?php echo $mainmenu == 'laporan' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php if ($this->auth->has_permission('Lap.Laporan.Add') and $current_user->role_id != "1") : ?>
          	<li><a href="<?php echo base_url();?>index.php/admin/laporan/lap/daftar"><i class="fa fa-circle-o"></i>Laporan</a></li>
          <?php endif; ?>
           <?php if ($this->auth->has_permission('Lap.Laporan.View')) : ?>
            <li><a href="<?php echo base_url();?>index.php/admin//laporan/lap"><i class="fa fa-circle-o"></i>Laporan User</a></li>
             <?php endif; ?>
             
          </ul>
        </li>
        <?php endif; ?>

        <?php if ($this->auth->has_permission('Site.Content.View')) : ?>
        <li class="treeview <?php echo $mainmenu == 'content' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Konten</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          <?php if ($this->auth->has_permission('Datausulan.Content.View')) : ?>
          <li><a href="<?php echo base_url();?>index.php/admin/content/datausulan"><i class="fa fa-circle-o"></i>Data Usulan</a></li>
          <?php endif; ?>

         <?php if ($this->auth->has_permission('News.Content.View')) : ?>
          <li><a href="<?php echo base_url();?>index.php/admin/content/news"><i class="fa fa-circle-o"></i>Informasi dan Berita</a></li>
          <?php endif; ?>

         <?php if ($this->auth->has_permission('Informasidatausulan.Content.View')) : ?>
          <li><a href="<?php echo base_url();?>index.php/admin/content/Informasidatausulan"><i class="fa fa-circle-o"></i>Informasi Data Usulan</a></li>
          <?php endif; ?>


          </ul>
        </li>
         <?php endif; ?>
    	 
         
	 <?php if ($this->auth->has_permission('Site.Developer.View')) : ?>
        <li class="treeview <?php echo $mainmenu == 'developer' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-folder"></i> <span>DEVELOPER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>index.php/admin//developer/sysinfo"><i class="fa fa-circle-o"></i> System Info</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/developer/builder"><i class="fa fa-circle-o"></i> Module Builder</a></li>
             <li>
              <a href="<?php echo base_url();?>index.php/admin/settings/emailer"><i class="fa fa-circle-o"></i> Database Tools
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              	<li><a href="<?php echo base_url();?>index.php/admin/developer/database"><i class="fa fa-circle-o"></i> Maintenance</a></li>
              	<li><a href="<?php echo base_url();?>index.php/admin/developer/database/backups"><i class="fa fa-circle-o"></i> Backups</a></li>
              	<li><a href="<?php echo base_url();?>index.php/admin/developer/migrations"><i class="fa fa-circle-o"></i> Migrations</a></li>
              </ul>
            </li>
          </ul>
        </li>
    <?php endif; ?>
    <?php if ($this->auth->has_permission('Site.Settings.View')) : ?>
        <li class="treeview <?php echo $mainmenu == 'settings' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-share"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="<?php echo base_url();?>index.php/admin/settings/settings"><i class="fa fa-circle-o"></i> Setting</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/settings/roles"><i class="fa fa-circle-o"></i> Role</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/settings/users"><i class="fa fa-circle-o"></i> User</a></li>
            <li><a href="<?php echo base_url();?>index.php/admin/settings/permissions"><i class="fa fa-circle-o"></i> Permissions</a></li>
            <li>
              <a href="<?php echo base_url();?>index.php/admin/settings/emailer"><i class="fa fa-circle-o"></i> Email
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              	<li><a href="<?php echo base_url();?>index.php/admin/settings/emailer"><i class="fa fa-circle-o"></i> Setting</a></li>
                <li><a href="<?php echo base_url();?>index.php/admin/settings/emailer/template"><i class="fa fa-circle-o"></i> Template</a></li>
				<li><a href="<?php echo base_url();?>index.php/admin/settings/emailer/queue"><i class="fa fa-circle-o"></i> Antrian</a></li>
              </ul>
            </li>
          </ul>
        </li>
    <?php endif; ?>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>