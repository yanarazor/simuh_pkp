<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Master controller
 */
class Master extends Admin_Controller
{
    protected $permissionCreate = 'Masterbarang.Master.Create';
    protected $permissionDelete = 'Masterbarang.Master.Delete';
    protected $permissionEdit   = 'Masterbarang.Master.Edit';
    protected $permissionView   = 'Masterbarang.Master.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('masterbarang/masterbarang_model');
        $this->lang->load('masterbarang');
        
            Assets::add_js(Template::theme_url('js/editors/ckeditor/ckeditor.js'));
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'master/_sub_nav');

        Assets::add_module_js('masterbarang', 'masterbarang.js');
    }

    /**
     * Display a list of masterbarang data.
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
                    $deleted = $this->masterbarang_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('masterbarang_delete_success'), 'success');
                } else {
                    Template::set_message(lang('masterbarang_delete_failure') . $this->masterbarang_model->error, 'error');
                }
            }
        }

    
		$title = $this->input->get('title');
		$total = $this->masterbarang_model->count_all($title);
        $pagerUriSegment = 5;
        $pagerBaseUrl = site_url(SITE_AREA . '/master/masterbarang/index') . '/';
        $offset = $this->input->get('per_page');
       // $limit  = $this->settings_lib->item('site.list_limit') ?: 15;
	   $limit = 0;		
        $this->load->library('pagination');
    //    $pager['base_url']    = $pagerBaseUrl;
		$pager['base_url'] 		= current_url()."?title=".$title;
        $pager['total_rows']  = $total;
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;
		$pager['page_query_string']	= TRUE;
		
        $this->pagination->initialize($pager);
        $this->masterbarang_model->limit($limit, $offset);
        $records = $this->masterbarang_model->find_all($title);

        Template::set('records', $records);
		Template::set('total', $total);
		Template::set('title', $title);


	
    Template::set('toolbar_title', lang('masterbarang_manage'));

        Template::render();
    }
    
    /**
     * Create a masterbarang object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_masterbarang()) {
                log_activity($this->auth->user_id(), lang('masterbarang_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'masterbarang');
                Template::set_message(lang('masterbarang_create_success'), 'success');

                redirect(SITE_AREA . '/master/masterbarang');
            }

            // Not validation error
            if ( ! empty($this->masterbarang_model->error)) {
                Template::set_message(lang('masterbarang_create_failure') . $this->masterbarang_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('masterbarang_action_create'));

        Template::render();
    }
    /**
     * Allows editing of masterbarang data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('masterbarang_invalid_id'), 'error');

            redirect(SITE_AREA . '/master/masterbarang');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_masterbarang('update', $id)) {
                log_activity($this->auth->user_id(), lang('masterbarang_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'masterbarang');
                Template::set_message(lang('masterbarang_edit_success'), 'success');
                redirect(SITE_AREA . '/master/masterbarang');
            }

            // Not validation error
            if ( ! empty($this->masterbarang_model->error)) {
                Template::set_message(lang('masterbarang_edit_failure') . $this->masterbarang_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->masterbarang_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('masterbarang_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'masterbarang');
                Template::set_message(lang('masterbarang_delete_success'), 'success');

                redirect(SITE_AREA . '/master/masterbarang');
            }

            Template::set_message(lang('masterbarang_delete_failure') . $this->masterbarang_model->error, 'error');
        }
        
        Template::set('masterbarang', $this->masterbarang_model->find($id));

        Template::set('toolbar_title', lang('masterbarang_edit_heading'));
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
    private function save_masterbarang($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->masterbarang_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->masterbarang_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        

        $return = false;
        if ($type == 'insert') {
            $id = $this->masterbarang_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->masterbarang_model->update($id, $data);
        }

        return $return;
    }
}