 
<?php echo theme_view('partials/_header'); ?> 
<div class="content-wrapper">
	<section class="content-header">
   	<h1>
        System
        <small>Version 1.0</small>
      </h1>
     
  	<ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active"><a href="#"> <?php if (isset($toolbar_title)) : ?>
				  <?php echo $toolbar_title ?>
			  <?php endif; ?></a></li>
	</ol>
	
	</section> 
	<section class="content">
		  <?php echo Template::message(); ?>
			<?php echo isset($content) ? $content : Template::content(); ?>
	</section>
</div>	
<?php echo theme_view('partials/_footer'); ?>
