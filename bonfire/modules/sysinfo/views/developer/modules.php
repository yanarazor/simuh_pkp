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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="body card-underline">

                    <?php $this->load->view('_sub_nav');?>

                    <header><h4 style="padding:5px;"><?php echo lang('sysinfo_installed_mods'); ?></h4></header>
                              
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><?php echo lang('sysinfo_mod_name'); ?></th>
                                <th><?php echo lang('sysinfo_mod_ver'); ?></th>
                                <th><?php echo lang('sysinfo_mod_desc'); ?></th>
                                <th><?php echo lang('sysinfo_mod_author'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($modules as $module => $config) : ?>
                            <tr>
                                <td><?php echo $config['name']; ?></td>
                                <td><?php echo $config['version']; ?></td>
                                <td><?php echo $config['description']; ?></td>
                                <td><?php echo $config['author']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                 
                            </div>
                        </div>
                    </div>
                </div>
    </section>