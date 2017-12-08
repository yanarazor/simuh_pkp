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

                    <?php $this->load->view('_sub_nav');?>

                    <header><h4 style="padding:5px;">System Info</h4></header>   
                      

                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <?php foreach ($info as $key => $val) : ?>
                                    <tr>
                                        <th><?php e(lang($key)); ?></th>
                                        <td><?php e($val); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                 
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>