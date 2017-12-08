<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers get a jumpstart their development of CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2013, Bonfire Dev Team
 * @license   http://guides.cibonfire.com/license.html
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

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
class View extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		 
		$this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
		$this->load->library('form');
		 
		$this->load->library('users/auth');
		$this->set_current_user();
		 
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

		Template::render();
	}//end index()
	  
	public function detil()
	{ 
		$id = $this->uri->segment(3);
		$view = $this->uri->segment(4);
		$this->load->model('informasi/informasi_model', null, true);
		$page = $this->informasi_model->find($id);
		$record = $this->informasi_model->find($id);
		
		
		//die(json_encode($page));
		Template::set('page', $page);
		Template::set('record', $record);
		//get berita terkait
		
		
		Assets::add_css('font-awesome.min.css');   
		Template::set_view('page/detil');  
		Template::render();
	}//end index()
	
	public function page()
	{ 
		$id = $this->uri->segment(3);
		$view = $this->uri->segment(4);
		$this->load->model('informasi_dan_berita/informasi_dan_berita_model', null, true);
		$page = $this->informasi_dan_berita_model->find($id);
		// update status baca
		$jumlahbaca = 1;
		if(isset($page->jml_dilihat))
			$jumlahbaca = $page->jml_dilihat;
		$kategori = '1';
		$id_berita = "";
		if(isset($page->id_category))
			$kategori = $page->id_category;
		if(isset($page->id_berita))
			$id_berita = $page->id_berita;
		$data = array(
			'jml_dilihat'     => (int)$jumlahbaca+1
		);
		$this->informasi_dan_berita_model->skip_validation(true);
		$this->informasi_dan_berita_model->update($id_berita, $data);
		
		//die(json_encode($page));
		Template::set('page', $page);
		//get berita terkait
		
		//$this->informasi_dan_berita_model->where("id_category",$kategori);
		$recordterkait = $this->informasi_dan_berita_model->limit(5, 0)->find_all_withhout($kategori,"",$id_berita);
		Template::set('recordterkaits', $recordterkait);
		
		Assets::add_css('font-awesome.min.css');   
		Template::set_view('page/pages');  
		Template::render();
	}//end index()
	
	public function kemendesa()
	{ 
		$id = $this->uri->segment(3);
		$view = $this->uri->segment(4);
		$this->load->model('informasi_dan_berita/informasi_dan_berita_model', null, true);
		$page = $this->informasi_dan_berita_model->find($id);
		// update status baca
		$jumlahbaca = 1;
		if(isset($page->jml_dilihat))
			$jumlahbaca = $page->jml_dilihat;
		$kategori = '1';
		$id_berita = "";
		if(isset($page->id_category))
			$kategori = $page->id_category;
		if(isset($page->id_berita))
			$id_berita = $page->id_berita;
		$data = array(
			'jml_dilihat'     => (int)$jumlahbaca+1
		);
		$this->informasi_dan_berita_model->skip_validation(true);
		$this->informasi_dan_berita_model->update($id_berita, $data);
		
		//die(json_encode($page));
		Template::set('page', $page);
		//get berita terkait
		
		//$this->informasi_dan_berita_model->where("id_category",$kategori);
		$this->informasi_dan_berita_model->where('id_berita >','3');
		$this->informasi_dan_berita_model->where('id_berita <','18');
		$this->informasi_dan_berita_model->order_by('id_berita','asc');
		$recordterkait = $this->informasi_dan_berita_model->limit(14, 0)->find_all_withhout($kategori,"",$id_berita);
		Template::set('recordterkaits', $recordterkait);
		
		Assets::add_css('font-awesome.min.css');   
		Template::set_view('page/kemendesa');  
		Template::render();
	}//end index()
	  
	//--------------------------------------------------------------------
	
	public function unit()
	{ 
		$id = $this->uri->segment(3);
		$view = $this->uri->segment(4);
		$this->load->model('informasi_dan_berita/informasi_dan_berita_model', null, true);
		$page = $this->informasi_dan_berita_model->find($id);
		// update status baca
		$jumlahbaca = 1;
		if(isset($page->jml_dilihat))
			$jumlahbaca = $page->jml_dilihat;
		$kategori = '1';
		$id_berita = "";
		if(isset($page->id_category))
			$kategori = $page->id_category;
		if(isset($page->id_berita))
			$id_berita = $page->id_berita;
		$data = array(
			'jml_dilihat'     => (int)$jumlahbaca+1
		);
		$this->informasi_dan_berita_model->skip_validation(true);
		$this->informasi_dan_berita_model->update($id_berita, $data);
		
		//die(json_encode($page));
		Template::set('page', $page);
		//get berita terkait
		
		$this->informasi_dan_berita_model->where('id_berita >','3');
		$this->informasi_dan_berita_model->where('id_berita <','18');
		$this->informasi_dan_berita_model->order_by('id_berita','asc');
		$recordterkait = $this->informasi_dan_berita_model->limit(14, 0)->find_all_withhout($kategori,"",$id_berita);
		Template::set('recordterkaits', $recordterkait);
		
		Assets::add_css('font-awesome.min.css');   
		Template::set_view('page/uker');  
		Template::render();
	}//end index()
	
	public function publikasi()
	{ 
		$id = $this->uri->segment(3);
		$view = $this->uri->segment(4);
		$this->load->model('publikasi_pers/publikasi_pers_model', null, true);
		$page = $this->publikasi_pers_model->find($id);
		// update status baca
	//	$jumlahbaca = 1;
	//	if(isset($page->jml_dilihat))
	//		$jumlahbaca = $page->jml_dilihat;
	//	$kategori = '1';
	//	$id_berita = "";
	//	if(isset($page->id_category))
	//		$kategori = $page->id_category;
	//	if(isset($page->id_berita))
	//		$id_berita = $page->id_berita;
	//	$data = array(
	//		'jml_dilihat'     => (int)$jumlahbaca+1
	//	);
	//	$this->informasi_dan_berita_model->skip_validation(true);
	//	$this->informasi_dan_berita_model->update($id_berita, $data);
		
		//die(json_encode($page));
		Template::set('page', $page);
		//get berita terkait
		
	//	$this->informasi_dan_berita_model->where('id_berita >','3');
	//	$this->informasi_dan_berita_model->where('id_berita <','18');
	//	$this->informasi_dan_berita_model->order_by('id_berita','asc');
	//	$recordterkait = $this->informasi_dan_berita_model->limit(14, 0)->find_all_withhout($kategori,"",$id_berita);
	//	Template::set('recordterkaits', $recordterkait);
		
		Assets::add_css('font-awesome.min.css');   
		Template::set_view('page/publikasi_pers');  
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
		if (class_exists('Auth'))
		{
			// Load our current logged in user for convenience
			if ($this->auth->is_logged_in())
			{
				$this->current_user = clone $this->auth->user();

				$this->current_user->user_img = gravatar_link($this->current_user->email, 22, $this->current_user->email, "{$this->current_user->email} Profile");

				// if the user has a language setting then use it
				if (isset($this->current_user->language))
				{
					$this->config->set_item('language', $this->current_user->language);
				}
			}
			else
			{
				$this->current_user = null;
			}

			// Make the current user available in the views
			if (!class_exists('Template'))
			{
				$this->load->library('Template');
			}
			Template::set('current_user', $this->current_user);
		}
	}
	 
	//--------------------------------------------------------------------
}//end class