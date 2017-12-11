<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Dashboard.Content.Create';
    protected $permissionDelete = 'Dashboard.Content.Delete';
    protected $permissionEdit   = 'Dashboard.Content.Edit';
    protected $permissionView   = 'Dashboard.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->lang->load('dashboard');
		$this->load->model('activities/activity_model');
        $this->load->model('datausulan/datausulan_model');
      //  $this->load->model('informasi/informasi_model');
		$this->load->model('informasidatausulan/informasidatausulan_model');
				
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('dashboard', 'dashboard.js');
    }

    /**
     * Display a list of Dashboard data.
     *
     * @return void
     */
    public function index()
    {
        $modules = array('users');
		$activities = $this->activity_model->order_by('created_on', 'desc')->limit(5)->find_by_module($modules);
		Template::set('activities', $activities);
  
		//$this->informasi_model->order_by('id','desc');
		//$recordInformasi = $this->informasi_model->limit(5, 0)->find_all();
		//Template::set('recordInformasi', $recordInformasi);
		
	//	$this->datausulan_model->where('status','1');
    // 	$this->datausulan_model->order_by('id','desc');
	//	$RecordDataUsulan= $this->datausulan_model->limit(5, 0)->find_all();
	//	Template::set('RecordDataUsulan', $RecordDataUsulan);
	
        $this->datausulan_model->where('status','1');
        $CountRecordTerverifikasi= $this->datausulan_model->count_all();
        Template::set('CountRecordTerverifikasi', $CountRecordTerverifikasi);

        $this->datausulan_model->where('status','0');
        $CountRecordDitolak= $this->datausulan_model->count_all();
        Template::set('CountRecordDitolak', $CountRecordDitolak);

//        $this->datausulan_model->where('status','');
        $this->datausulan_model->where('status IS NULL', null, false);
        $CountRecordBelumVerifikasi= $this->datausulan_model->count_all();
        Template::set('CountRecordBelumVerifikasi', $CountRecordBelumVerifikasi);

        //$this->datausulan_model->where('status','');
        $CountRecordUsulanAll= $this->datausulan_model->count_all();
        Template::set('CountRecordUsulanAll', $CountRecordUsulanAll);

     	$this->informasidatausulan_model->order_by('id','desc');
		$RecordDataUsulan= $this->informasidatausulan_model->limit(10, 0)->find_all();
		Template::set('RecordDataUsulan', $RecordDataUsulan);

//                $this->load->model('lap/lap_model', null, true);
        $statuslaporans = $this->datausulan_model->getcountbypermintaan();
        //print_r($statuslaporans);
        $jsonbypermintaan = json_encode($statuslaporans);
        Template::set('jsonbypermintaan', $jsonbypermintaan);

        $unitlaporan = $this->datausulan_model->getcountbyunit();
        //print_r($unitlaporan);
        $jsonlabelperingkat =array();
        $jsonnilaiperingkat =array();
        if (isset($unitlaporan) && is_array($unitlaporan) && count($unitlaporan)) :
        foreach ($unitlaporan as $record) : 
            $jsonlabelperingkat[] = $record->nama_eselon;
            $jsonnilaiperingkat[] = (double)$record->Jumlah;
        endforeach;
        endif;
        Template::set('jsonlabelperingkat', $jsonlabelperingkat);
        Template::set('jsonnilaiperingkat', $jsonnilaiperingkat);
        //print_r($jsonnilaiperingkat);
        //die();
        //Template::set('jsonbyunits', $jsonbyunits);
        
    Template::set('toolbar_title', lang('dashboard_manage'));

        Template::render();
    }
    
    /**
     * Create a Dashboard object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        

        Template::set('toolbar_title', lang('dashboard_action_create'));

        Template::render();
    }
    /**
     * Allows editing of Dashboard data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('dashboard_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/dashboard');
        }
        
        
        

        Template::set('toolbar_title', lang('dashboard_edit_heading'));
        Template::render();
    }
}