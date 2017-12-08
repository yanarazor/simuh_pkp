<?php
$this->load->library('convert');
$convert = new convert();

if (isset($page))
{	$page = (array) $page; 
}
?>
<div class="content container">
	<div id="begin">
		<div class="inner container_12">
			<div class="grid_12">
				&nbsp;
			</div> 
		</div>
	</div>
	

			<div class="inner" style="">
				<div class="container_12" >
					<div class="col-md-9 detil right-border" >
						<div class="detil inner">
							<h2><?php echo isset($page['judul']) ? $page['judul'] : ''; ?></h2> <br>
						<div class="detil_fokus_l">
							<strong>
								<i class="fa fa-calendar"></i>&nbsp;
								<?php echo $convert->hariConvert($page['tgl_informasi']); ?>, <?php echo $convert->fmtDate($page['tgl_informasi'],"dd month yyyy");?>
							</strong>
						</div>

						<div class="content-detail_wrapper" style="min-height:300px;">
							<p><?php echo str_replace("../../../../../",base_url(),isset($page['isi']) ? $page['isi'] : ''); ?></p>
						</div>
						
                        <hr class="HRstyle14">
							<div class="addthis_toolbox addthis_default_style">
								<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
								<a class="addthis_button_tweet"></a>
								<a class="addthis_button_pinterest_pinit"></a>
								<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
								<a class="addthis_counter addthis_pill_style"></a>
							</div>
						
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51b6e3c24a39bcb5"></script>
                         <script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-comments" data-href="<?php echo base_url()."".$this->uri->uri_string(); ?>" data-numposts="10"></div>
						</div>
					</div>

				</div> 
            </div><!-- inner -->

		</div> <!-- content -->
</div>
