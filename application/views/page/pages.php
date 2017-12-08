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
		<?php if(empty($this->session->userdata('languange')) or $this->session->userdata('languange')=='id') {	 ?>
			<div class="inner" style="">
				<div class="container_12" >
					<div class="col-md-9 detil right-border">
					<div class="detil inner">
					<h2><?php echo isset($page['judul']) ? $page['judul'] : ''; ?></h2> <br>
						<div class="detil_fokus_l">
							<strong>
								<i class="fa fa-calendar"></i>&nbsp;
								<?php echo $convert->hariConvert($page['jam']); ?>, <?php echo $convert->fmtDate($page['jam'],"dd month yyyy");?>
							</strong>
							<judul> <?php echo $convert->sub_kategori_berita_to_words($page['sub_category']);?></judul>
						</div>
						<?php if(isset($page['foto']) and $page['foto']!=""){ ?>
						<div class="image-wrap" id="wrapper">
							<img src="<?php echo base_url().$this->settings_lib->item('site.urlartikel').$page['foto'];?>" width="90%" align="center">
						</div>
						<?php } ?>
						<div class="content-detail_wrapper">
							<p><?php echo str_replace("../../../../../",base_url(),isset($page['content']) ? $page['content'] : ''); ?></p>
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
					<div class="col-md-3">
						<div class="section-content"  align="center" >			
						<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
					<div class="" id="gpr-kominfo-widget-container"></div>
			</div>
	</div><!--//col-md-3-->
				</div> 
            </div><!-- inner -->
			<?php }else{ ?>
			<div class="inner" style="">
				<div class="container_12" >
					<div class="col-md-9 detil right-border">
					<div class="detil inner">
					<h2><?php echo isset($page['judul_en']) ? $page['judul_en'] : ''; ?></h2> <br>
						<div class="detil_fokus_l">
							<strong>
								<i class="fa fa-calendar"></i>&nbsp;
								<?php echo $convert->hariConvert($page['jam']); ?>, <?php echo $convert->fmtDate($page['jam'],"dd bulan yyyy");?>
							</strong>
							<judul> <?php echo $convert->sub_kategori_berita_to_words($page['sub_category']);?></judul>
						</div>
						<?php if(isset($page['foto']) and $page['foto']!=""){ ?>
						<div class="image-wrap" id="wrapper">
							<img src="<?php echo base_url().$this->settings_lib->item('site.urlartikel').$page['foto'];?>" width="90%" align="center">
						</div>
						<?php } ?>
						<div class="content-detail_wrapper">
							<p><?php echo str_replace("../../../../../",base_url(),isset($page['content_en']) ? $page['content_en'] : ''); ?></p>
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
					<div class="col-md-3">
						<div class="section-content"  align="center" >			
						   <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
							<div class="" id="gpr-kominfo-widget-container"></div>
						</div>
					</div><!--//col-md-3-->
				</div> 
            </div><!-- inner -->
			<?php }?>
		</div> <!-- content -->
</div>
