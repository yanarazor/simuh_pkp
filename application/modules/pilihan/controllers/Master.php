<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Master controller
 */
class Master extends Admin_Controller
{
    protected $permissionCreate = 'Pilihan.Master.Create';
    protected $permissionDelete = 'Pilihan.Master.Delete';
    protected $permissionEdit   = 'Pilihan.Master.Edit';
    protected $permissionView   = 'Pilihan.Master.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('pilihan/pilihan_model');
        $this->lang->load('pilihan');
        
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'master/_sub_nav');

        Assets::add_module_js('pilihan', 'pilihan.js');
    }

    /**
     * Display a list of pilihan data.
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
                    $deleted = $this->pilihan_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('pilihan_delete_success'), 'success');
                } else {
                    Template::set_message(lang('pilihan_delete_failure') . $this->pilihan_model->error, 'error');
                }
            }
        }
        $pagerUriSegment = 5;
        $pagerBaseUrl = site_url(SITE_AREA . '/master/pilihan/index') . '/';
        
        $limit  = $this->settings_lib->item('site.list_limit') ?: 15;

        $this->load->library('pagination');
        $pager['base_url']    = $pagerBaseUrl;
        $pager['total_rows']  = $this->pilihan_model->count_all();
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;

        $this->pagination->initialize($pager);
        $this->pilihan_model->limit($limit, $offset);
        
        $records = $this->pilihan_model->find_all();

        Template::set('records', $records);
        
    Template::set('toolbar_title', lang('pilihan_manage'));

        Template::render();
    }
    
    /**
     * Create a pilihan object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_pilihan()) {
                log_activity($this->auth->user_id(), lang('pilihan_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'pilihan');
                Template::set_message(lang('pilihan_create_success'), 'success');

                redirect(SITE_AREA . '/master/pilihan');
            }

            // Not validation error
            if ( ! empty($this->pilihan_model->error)) {
                Template::set_message(lang('pilihan_create_failure') . $this->pilihan_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('pilihan_action_create'));

        Template::render();
    }
    /**
     * Allows editing of pilihan data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('pilihan_invalid_id'), 'error');

            redirect(SITE_AREA . '/master/pilihan');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_pilihan('update', $id)) {
                log_activity($this->auth->user_id(), lang('pilihan_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'pilihan');
                Template::set_message(lang('pilihan_edit_success'), 'success');
                redirect(SITE_AREA . '/master/pilihan');
            }

            // Not validation error
            if ( ! empty($this->pilihan_model->error)) {
                Template::set_message(lang('pilihan_edit_failure') . $this->pilihan_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->pilihan_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('pilihan_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'pilihan');
                Template::set_message(lang('pilihan_delete_success'), 'success');

                redirect(SITE_AREA . '/master/pilihan');
            }

            Template::set_message(lang('pilihan_delete_failure') . $this->pilihan_model->error, 'error');
        }
        
        Template::set('pilihan', $this->pilihan_model->find($id));

        Template::set('toolbar_title', lang('pilihan_edit_heading'));
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
    private function save_pilihan($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->pilihan_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->pilihan_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        

        $return = false;
        if ($type == 'insert') {
            $id = $this->pilihan_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->pilihan_model->update($id, $data);
        }

        return $return;
    }
}