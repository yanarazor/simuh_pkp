<?php

Assets::add_css(array('material.min.css','styles.css','jssor.css','font-awesome.min.css'));
Assets::add_js(array('material.min.js','jssor.js','jquery-3.1.1.min.js','bootstrap-337.min.js'));

//$inline  = '$(".dropdown-toggle").dropdown();';
//$inline .= '$(".tooltips").tooltip();';
//Assets::add_js($inline, 'inline');

?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php
            echo isset($page_title) ? "{$page_title} : " : '';
            e(class_exists('Settings_lib') ? settings_item('site.title') : 'SIMUH');
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?php e(isset($meta_description) ? $meta_description : ''); ?>">
    <meta name="author" content="<?php e(isset($meta_author) ? $meta_author : ''); ?>">
<script type="text/javascript">jssor_1_slider_init();</script>

        <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="<?php echo base_url();?>themes/defaultv2/fonts/icon.css?family=Material+Icons">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>

    <?php
    /* Modernizr is loaded before CSS so CSS can utilize its features */
    echo Assets::js('modernizr-2.5.3.js');
    ?>

    <?php echo Assets::css(); ?>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
</head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="<?php echo base_url();?>themes/defaultv2/images/simuh_logo.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <!--
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div> -->
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url();?>">Beranda</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Tentang Aplikasi</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Kontak Kami</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="<?php echo base_url()?>themes/defaultv2/images/simuh_logo.png">
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <a href="<?php echo base_url();?>index.php/login"><li class="mdl-menu__item">Login</li></a>
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="<?php echo base_url()?>themes/defaultv2/images/simuh_logo.png">
        </span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Beranda</a>
          <a class="mdl-navigation__link" href="">Tentang Aplikasi</a>
          <a class="mdl-navigation__link" href="">Kontak Kami</a>
            <div class="android-drawer-separator"></div>
            <a class="mdl-navigation__link" href="">Login</a>
        </nav>
      </div>