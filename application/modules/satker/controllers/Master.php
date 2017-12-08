<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Master controller
 */
class Master extends Admin_Controller
{
    protected $permissionCreate = 'Satker.Master.Create';
    protected $permissionDelete = 'Satker.Master.Delete';
    protected $permissionEdit   = 'Satker.Master.Edit';
    protected $permissionView   = 'Satker.Master.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('satker/satker_model');
		$this->load->model('eselon/eselon_model');
        $this->lang->load('satker');
        
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
		$eselonI = $this->eselon_model->find_all();
		Template::set('eselonI', $eselonI);
		
        Template::set_block('sub_nav', 'master/_sub_nav');

        Assets::add_module_js('satker', 'satker.js');
    }

    /**
     * Display a list of satker data.
     *
     * @return void
     */
    public function index($offset = 0)
    {
        // Deleting anything?
        if (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);
            $checked = $this->input->post('checked');
            if (is_array($checked) && count($checked)) {

                // If any of the deletions fail, set the result to false, so
                // failure message is set if any of the attempts fail, not just
                // the last attempt

                $result = true;
                foreach ($checked as $pid) {
                    $deleted = $this->satker_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('satker_delete_success'), 'success');
                } else {
                    Template::set_message(lang('satker_delete_failure') . $this->satker_model->error, 'error');
                }
            }
        }
		
		
		$title = $this->input->get('title');
		$subkat = $this->input->get('subkat');
		//$total = $this->satker_model->count_all($subkat,$title);
        $total = $this->satker_model->count_all();
        $pagerUriSegment = 10;
        $pagerBaseUrl = site_url(SITE_AREA . '/master/satker/index') . '/';
        $offset = $this->input->get('per_page');
    //    $limit  = $this->settings_lib->item('site.list_limit') ?: 15;
		$limit = 0;		
        $this->load->library('pagination');
        $pager['base_url']    = $pagerBaseUrl;
	//	$pager['base_url'] 		= current_url()."?subkat=".$subkat."?title=".$title;
        $pager['total_rows']  = $total;
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;
//		$pager['page_query_string']	= TRUE;
		
        $this->pagination->initialize($pager);
        $this->satker_model->limit($limit, $offset);
    //    $records = $this->satker_model->find_all($subkat,$title);
        $records = $this->satker_model->find_all();

        Template::set('records', $records);
		Template::set('total', $total);
		Template::set('title', $title);
		
    Template::set('toolbar_title', lang('satker_manage'));

        Template::render();
    }
    
    /**
     * Create a satker object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_satker()) {
                log_activity($this->auth->user_id(), lang('satker_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'satker');
                Template::set_message(lang('satker_create_success'), 'success');

                redirect(SITE_AREA . '/master/satker');
            }

            // Not validation error
            if ( ! empty($this->satker_model->error)) {
                Template::set_message(lang('satker_create_failure') . $this->satker_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('satker_action_create'));

        Template::render();
    }
    /**
     * Allows editing of satker data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('satker_invalid_id'), 'error');

            redirect(SITE_AREA . '/master/satker');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_satker('update', $id)) {
                log_activity($this->auth->user_id(), lang('satker_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'satker');
                Template::set_message(lang('satker_edit_success'), 'success');
                redirect(SITE_AREA . '/master/satker');
            }

            // Not validation error
            if ( ! empty($this->satker_model->error)) {
                Template::set_message(lang('satker_edit_failure') . $this->satker_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->satker_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('satker_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'satker');
                Template::set_message(lang('satker_delete_success'), 'success');

                redirect(SITE_AREA . '/master/satker');
            }

            Template::set_message(lang('satker_delete_failure') . $this->satker_model->error, 'error');
        }
        
        Template::set('satker', $this->satker_model->find($id));

        Template::set('toolbar_title', lang('satker_edit_heading'));
        Template::render();
    }

    //--------------------------------------------------------------------------
    // !PRIVATE METHODS
    //--------------------------------------------------------------------------

    /**
     * Save the data.
     *
     * @param string $type Either 'insert' or 'update'.
     * @param int    $id   The ID of the record to update, ignored on inserts.
     *
     * @return boolean|integer An ID for successful inserts, true for successful
     * updates, else false.
     */
    private function save_satker($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->satker_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->satker_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        

        $return = false;
        if ($type == 'insert') {
            $id = $this->satker_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->satker_model->update($id, $data);
        }

        return $return;
    }
    
    public function getbyeselon()
	{
		$eselon = $this->input->get('id_eselon');
		$json = array(); 	
		$this->satker_model->where("satker.kode_eselon",$eselon);
		$records = $this->satker_model->find_all();
		if(isset($records) && is_array($records) && count($records)):
			foreach ($records as $record) :
				$json['kodesatker'][] = $record->kode_satker;
				$json['nama_satker'][] = $record->nama_satker;
			endforeach;
		endif;
		echo json_encode($json);
		die();
	}
}