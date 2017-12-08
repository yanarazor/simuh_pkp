<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * Home controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Home extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
		$this->load->library('convert');
		
	//	$this->load->model('informasi/informasi_model', null, true);
		$this->load->model('informasidatausulan/informasidatausulan_model', null, true);
		$this->load->model('datausulan/datausulan_model', null, true);
		$this->load->model('news/news_model', null, true);
        
		$this->load->library('installer_lib');
        if (! $this->installer_lib->is_installed()) {
            $ci =& get_instance();
            $ci->hooks->enabled = false;
            redirect('install');
        }

        // Make the requested page var available, since
        // we're not extending from a Bonfire controller
        // and it's not done for us.
        $this->requested_page = isset($_SESSION['requested_page']) ? $_SESSION['requested_page'] : null;
	}

	//--------------------------------------------------------------------

	/**
	 * Displays the homepage of the Bonfire app
	 *
	 * @return void
	 */
	public function index()
	{
		$this->load->library('users/auth');
		$this->set_current_user();

		
	// ---  Pengumuman ---
	//	$subkategori = array('BK', 'BD','BTS', 'BDT');
	//	$this->informasi_model->where("id_category","BT");
	//	$this->informasi_model->where_in("sub_category",$subkategori);
	//	$this->informasi_model->where("berita_utama","1");
	//	$this->informasi_model->order_by('id','desc');
	//	$recordPengumuman = $this->informasi_model->limit(5, 0)->find_all();
	//	Template::set('recordPengumuman', $recordPengumuman);
	
	// ---  Informasi Data Usulan ---
	//	$subkategori = array('BK', 'BD','BTS', 'BDT');
	//	$this->informasi_model->where("id_category","BT");
	//	$this->informasi_model->where_in("sub_category",$subkategori);
	//	$this->informasi_model->where("berita_utama","1");
	//	$this->db->join('eselon', 'eselon.kode_eselon=datausulan.kode_eselon', 'left');
	//	$this->db->join('satker', 'satker.kode_satker=datausulan.kode_satker', 'left');
	//	$this->db->join('pilihan', 'pilihan.value_pilihan=datausulan.kategori_usulan', 'left');
//		$this->datausulan_model->order_by('datausulan.id','desc');
//		$recordInformasidatausulan = $this->datausulan_model->limit(5, 0)->find_all();
//		Template::set('recordInformasidatausulan', $recordInformasidatausulan);	

		$this->news_model->find_by('news.scope','eksternal');		
		$this->news_model->find_by('news.published_news','published');		
		$this->news_model->order_by('news.id','desc');
		$recordNews = $this->news_model->limit(4, 0)->find_all();
		Template::set('recordNews', $recordNews);	
		

        $records = $this->informasidatausulan_model->getcountbyeselon();
        Template::set('records', $records);
//  die($records);
	//	$pagerUriSegment = 5;
     //   $pagerBaseUrl = site_url(SITE_AREA . '/content/datausulan/index') . '/';
     //   $pagerBaseUrl = site_url();
     //   $offset = $this->input->get('per_page');
     //   $limit  = $this->settings_lib->item('site.list_limit') ?: 15;
     //   $limit = 0;
     //   $total = $this->datausulan_model->count_all();
     //   $this->load->library('pagination');
     //   $pager['base_url']    = $pagerBaseUrl;
        //$pager['total_rows']  = $this->datausulan_model->count_all();
     //   $pager['total_rows']  = $total;
     //   $pager['per_page']    = $limit;
     //   $pager['uri_segment'] = $pagerUriSegment;
     //   $pager['page_query_string'] = TRUE;

//        $this->pagination->initialize($pager);
 //       $this->datausulan_model->order_by('datausulan.id','desc');
  //      $this->datausulan_model->limit($limit, $offset);
        
      //  $records = $this->news_model->find_all();

        $this->datausulan_model->order_by('datausulan.id','desc');       
        $records = $this->datausulan_model->find_all();

		



		Template::render();
	}//end index()

	//--------------------------------------------------------------------

	/**
	 * If the Auth lib is loaded, it will set the current user, since users
	 * will never be needed if the Auth library is not loaded. By not requiring
	 * this to be executed and loaded for every command, we can speed up calls
	 * that don't need users at all, or rely on a different type of auth, like
	 * an API or cronjob.
	 *
	 * Copied from Base_Controller
	 */
	protected function set_current_user()
	{
        if (class_exists('Auth')) {
			// Load our current logged in user for convenience
            if ($this->auth->is_logged_in()) {
				$this->current_user = clone $this->auth->user();

				$this->current_user->user_img = gravatar_link($this->current_user->email, 22, $this->current_user->email, "{$this->current_user->email} Profile");

				// if the user has a language setting then use it
                if (isset($this->current_user->language)) {
					$this->config->set_item('language', $this->current_user->language);
				}
            } else {
				$this->current_user = null;
			}

			// Make the current user available in the views
            if (! class_exists('Template')) {
				$this->load->library('Template');
			}
			Template::set('current_user', $this->current_user);
		}
	}
}
/* end ./application/controllers/home.php */
