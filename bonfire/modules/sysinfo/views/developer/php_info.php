<?php
  $this->load->library('convert');
  $convert = new convert();
?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>System Information</h2>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body card-underline">
x
                    <?php $this->load->view('_sub_nav');?>
                    
                    <header><h4 style="padding:5px;">PHP Info</h4></header>   
                      

    <ul class='nav nav-tabs'>
        <li class='active'><a href='#sysinfoVersion' data-toggle='tab'>Version</a></li>
        <li><a href='#sysinfoConfig' data-toggle='tab'>Configuration</a></li>
        <li><a href='#sysinfoCredits' data-toggle='tab'>Credits</a></li>
    </ul>
    <div class='tab-content'>
        <?php echo $phpinfo; ?>
    </div>

                 
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>