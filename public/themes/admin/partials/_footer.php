<div id="loading-all" class="modal fade bs-modal-lg">Loadin...</div>
<!-- Modal -->
    <div data-backdrop="static" data-keyboard="false" class="modal fade bs-modal-lg" id="modal-global" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Detail</h4>
				</div>
				<div class="modal-body" id="modal-body">
				Loading content...
				</div>
			</div>
		</div>
    </div>

    <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modal-globalframe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabelframe">Lihat File</h4>
				</div>
				<div class="modal-bodyframe" id="modal-bodyframe">
					<iframe id="framedata" width="100%"></iframe>
				</div>
			</div>
		</div>
    </div>
	<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.5
    </div>
    <strong>Copyright © 2016 - 2017 <a href="#">Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi</a>.</strong> All rights
    reserved.
  </footer>
</div>	
	<div id="debug"><!-- Stores the Profiler Results --></div>
 	<script src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo base_url(); ?>themes/admin/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>themes/admin/plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>themes/admin/dist/js/app.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>themes/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="<?php echo base_url(); ?>themes/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>themes/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- SlimScroll 1.3.0 -->
	<script src="<?php echo base_url(); ?>themes/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="<?php echo base_url(); ?>themes/admin/plugins/chartjs/Chart.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>themes/admin/dist/js/pages/dashboard2.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>themes/admin/dist/js/demo.js"></script>
	<?php echo Assets::js(); ?>
</body>
</html>
<script type="text/javascript">
$('body').on('click','.show-modal',function (event) { 

	$('.perhatian').fadeOut(300, function(){});
	  event.preventDefault();
	  var currentBtn = $(this);
	  var title = currentBtn.attr("tooltip");
	  //alert(currentBtn.attr("href"));
	  $.ajax({
	  url: currentBtn.attr("href"),
	  type: 'post',
	  beforeSend: function (xhr) {
		  $("#loading-all").show();
	  },
	  success: function (content, status, xhr) {
		  var json = null;
		  var is_json = true;
		  try {
		  	json = $.parseJSON(content);
		  } catch (err) {
		  	is_json = false;
		  }
		  if (is_json == false) {
		  	$("#modal-body").html(content);
		  	$("#myModalLabel").html(title);
		  	$("#modal-global").modal('show');
		  	$("#loading-all").hide();
		  } else {
		  	alert("Error");
		  }
	  }
	  }).fail(function (data, status) {
	  if (status == "error") {
		  alert("Error");
	  } else if (status == "timeout") {
		  alert("Error");
	  } else if (status == "parsererror") {
		  alert("Error");
	  }
	  });
	  
  });

$('body').on('click','.show-modalframe',function (event) { 
	$('.perhatian').fadeOut(300, function(){});
	  event.preventDefault();
	  $(this).addClass( "danger" );
	  var currentBtn = $(this);
	  var title = currentBtn.attr("tooltip");
	  //alert(currentBtn.attr("href"));
	   	$("#modal-body").html("content");
		$("#myModalLabel").html(title);
		$("#modal-globalframe").modal('show');
		$("#loading-all").hide();
		$("#framedata").attr("src", currentBtn.attr("href"));
  });
 
  
</script>