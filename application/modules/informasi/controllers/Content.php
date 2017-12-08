<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Informasi.Content.Create';
    protected $permissionDelete = 'Informasi.Content.Delete';
    protected $permissionEdit   = 'Informasi.Content.Edit';
    protected $permissionView   = 'Informasi.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('informasi/informasi_model');
        $this->lang->load('informasi');
			
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
            Assets::add_js('jquery-ui-1.8.13.min.js');
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('informasi', 'informasi.js');
    }

    /**
     * Display a list of Informasi data.
     *
     * @return void
     */
    public function index()
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
                    $deleted = $this->informasi_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('informasi_delete_success'), 'success');
                } else {
                    Template::set_message(lang('informasi_delete_failure') . $this->informasi_model->error, 'error');
                }
            }
        }
        
        $kat = $this->input->get('kat');
		$title = $this->input->get('title');
		$subkat = $this->input->get('subkat');
		$total = count($this->informasi_model->find_all($kat,$subkat,$title));
        $pagerUriSegment = 5;
        $pagerBaseUrl = site_url(SITE_AREA . '/content/rpenelitian/index') . '/';
        $offset = $this->input->get('per_page');
        $limit  = $this->settings_lib->item('site.list_limit') ?: 15;
				
        $this->load->library('pagination');
    //    $pager['base_url']    = $pagerBaseUrl;
		$pager['base_url'] 		= current_url()."?title=".$title;
        $pager['total_rows']  = $total;
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;
		$pager['page_query_string']	= TRUE;
		
        $this->pagination->initialize($pager);
        $this->informasi_model->limit($limit, $offset);
          
        $records = $this->informasi_model->find_all($kat,$subkat,$title);
		
        Template::set('records', $records);
		Template::set('total', $total);
        
         
    	Template::set('toolbar_title', lang('informasi_manage'));

        Template::render();
    }
    
    /**
     * Create a Informasi object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_informasi()) {
                log_activity($this->auth->user_id(), lang('informasi_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'informasi');
                Template::set_message(lang('informasi_create_success'), 'success');

                redirect(SITE_AREA . '/content/informasi');
            }

            // Not validation error
            if ( ! empty($this->informasi_model->error)) {
                Template::set_message(lang('informasi_create_failure') . $this->informasi_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('informasi_action_create'));

        Template::render();
    }
    /**
     * Allows editing of Informasi data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('informasi_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/informasi');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_informasi('update', $id)) {
                log_activity($this->auth->user_id(), lang('informasi_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'informasi');
                Template::set_message(lang('informasi_edit_success'), 'success');
                redirect(SITE_AREA . '/content/informasi');
            }

            // Not validation error
            if ( ! empty($this->informasi_model->error)) {
                Template::set_message(lang('informasi_edit_failure') . $this->informasi_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->informasi_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('informasi_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'informasi');
                Template::set_message(lang('informasi_delete_success'), 'success');

                redirect(SITE_AREA . '/content/informasi');
            }

            Template::set_message(lang('informasi_delete_failure') . $this->informasi_model->error, 'error');
        }
        
        Template::set('informasi', $this->informasi_model->find($id));

        Template::set('toolbar_title', lang('informasi_edit_heading'));
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
     
    
	private function save_informasinew($judul="",$isi = "",$type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        
        // Make sure we only pass in the fields we want
        
        $data = $this->informasi_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
       	$data['judul']	= $judul; 
       	$data['isi']	= $isi; 
       	$data['tgl_informasi']	= "0000-00-00";

        $return = false;
        if ($type == 'insert') {
            $id = $this->informasi_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->informasi_model->update($id, $data);
        }

        return $return;
    }
    private function save_informasi($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->informasi_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->informasi_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
       		$data['tgl_informasi']	= $this->input->post('tgl_informasi') ? $this->input->post('tgl_informasi') : '0000-00-00'; 

        $return = false;
        if ($type == 'insert') {
            $id = $this->informasi_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->informasi_model->update($id, $data);
        }

        return $return;
    }
}