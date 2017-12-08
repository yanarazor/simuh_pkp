<script src="<?php echo base_url(); ?>assets/js/amcharts/amcharts.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/serial.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/pie.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/exporting/amexport.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/exporting/rgbcolor.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/exporting/canvg.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/exporting/jspdf.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/exporting/filesaver.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript" ></script>


<?php
  $this->load->library('convert');
  $convert = new convert();
?>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php echo $CountRecordUsulanAll; ?>
              </h3>

              <p>Jumlah Permintaan</p>
            </div>
            <div class="icon">
              <i class="fa fa-star-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> <?php echo $CountRecordTerverifikasi; ?>
                <!--<sup style="font-size: 20px">%</sup>--></h3>

              <p>Terverifikasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $CountRecordBelumVerifikasi; ?></h3>

              <p>Belum di Verifikasi</p>
            </div>
            <div class="icon">
             <i class="fa fa-bookmark-0"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $CountRecordDitolak; ?></h3>

              <p>Di Tolak</p>
            </div>
            <div class="icon">
               <i class="fa fa-close"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div id="tabs" class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right" role="tablist">
              <li class="active"><a href="#uker-chart" role="tab" data-toggle="tab">Unit Kerja</a></li>
              <li><a href="#permintaan-chart"  data-toggle="tab">Permintaan x Verifikasi</a></li>
              <li class="pull-left header"><i class="fa fa-bar-chart"></i> Chart Permintaan</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="uker-chart" style="position: relative; height: 400px;">
                  <div id="chartunit" style="z-index:100;background:#FFFFFf; width: 100%; height: 400px;"> </div>
              </div>

              <div class="chart tab-pane " id="permintaan-chart" style="position: relative; height: 400px;">
                  <div id="chartpermintaan" style="background:#FFFFFf;width: 100%; height: 400px;"> </div>
              </div>

            </div>
          </div>
          <!-- /.nav-tabs-custom -->
<script type="text/javascript">




AmCharts.makeChart("chartpermintaan", {
    type: "pie",
    dataProvider: <?php echo $jsonbypermintaan; ?>,
    titleField: "status",
    valueField: "Jumlah",
     labelsEnabled: false,
    balloonText: "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    "legend": {
      "markerType": "circle",
      "position": "bottom",
      "autoMargins": false
    },
    exportConfig: {
      menuTop: "21px",
      menuBottom: "auto",
      menuRight: "21px",
      backgroundColor: "#00000",

      menuItemStyle : {
      backgroundColor     : '#EFEFEF',
      rollOverBackgroundColor : '#DDDDDD'},

      menuItems: [{
        textAlign: 'center',
        icon: '<?php echo base_url(); ?>assets/js/amcharts/images/export.png',
        onclick:function(){},
        items: [{
          title: 'JPG',
          format: 'jpg'
        }, {
          title: 'PNG',
          format: 'png'
        }, {
          title: 'SVG',
          format: 'svg'
        }, {
          title: 'PDF',
          format: 'pdf'
        }]
      }]
    }

  }); 




  AmCharts.makeChart("chartunit", {
    type: "pie",
    dataProvider: <?php echo $jsonbyunits; ?>,
    titleField: "nama_eselon",
    valueField: "Jumlah",
     labelsEnabled: false,
    balloonText: "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    "legend": {
      "markerType": "circle",
      "position": "bottom",
      "autoMargins": false
    },
    exportConfig: {
      menuTop: "21px",
      menuBottom: "auto",
      menuRight: "21px",
      backgroundColor: "#00000",

      menuItemStyle : {
      backgroundColor     : '#EFEFEF',
      rollOverBackgroundColor : '#DDDDDD'},

      menuItems: [{
        textAlign: 'center',
        icon: '<?php echo base_url(); ?>assets/js/amcharts/images/export.png',
        onclick:function(){},
        items: [{
          title: 'JPG',
          format: 'jpg'
        }, {
          title: 'PNG',
          format: 'png'
        }, {
          title: 'SVG',
          format: 'svg'
        }, {
          title: 'PDF',
          format: 'pdf'
        }]
      }]
    }

  });


      $( "#tabs" ).tabs({
        select: function(event, ui) {
        //  console.log('Calling chart.invalidateSize()');
          chart.invalidateSize();
        }
      });
   
</script>
        </section>
        <!-- /.Left col -->
       
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
     <!--   <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
     <!--     <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
      <!--        <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

        <!--      <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
       <!--     <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
        <!--        <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
          <!--      <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
        <!--      </div>
              <!-- /.row -->
       <!--     </div>
          </div>
          <!-- /.box -->

     <!--   </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

 </div>
  <!-- /.content-wrapper -->
