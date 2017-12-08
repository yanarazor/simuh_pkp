<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Barang.Content.Create';
    protected $permissionDelete = 'Barang.Content.Delete';
    protected $permissionEdit   = 'Barang.Content.Edit';
    protected $permissionView   = 'Barang.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        
        $this->load->model('barang/barang_model');
        $this->lang->load('barang');
        
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('barang', 'barang.js');
    }

    /**
     * Display a list of Barang data.
     *
     * @return void
     */
    public function index()
    {
    	$this->auth->restrict($this->permissionView);
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
                    $deleted = $this->barang_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('barang_delete_success'), 'success');
                } else {
                    Template::set_message(lang('barang_delete_failure') . $this->barang_model->error, 'error');
                }
            }
        }
        
        
        
        $records = $this->barang_model->find_all();

        Template::set('records', $records);
        
    Template::set('toolbar_title', lang('barang_manage'));

        Template::render();
    }
    
    /**
     * Create a Barang object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_barang()) {
                log_activity($this->auth->user_id(), lang('barang_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'barang');
                Template::set_message(lang('barang_create_success'), 'success');

                redirect(SITE_AREA . '/content/barang');
            }

            // Not validation error
            if ( ! empty($this->barang_model->error)) {
                Template::set_message(lang('barang_create_failure') . $this->barang_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('barang_action_create'));

        Template::render();
    }
    /**
     * Allows editing of Barang data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('barang_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/barang');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_barang('update', $id)) {
                log_activity($this->auth->user_id(), lang('barang_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'barang');
                Template::set_message(lang('barang_edit_success'), 'success');
                redirect(SITE_AREA . '/content/barang');
            }

            // Not validation error
            if ( ! empty($this->barang_model->error)) {
                Template::set_message(lang('barang_edit_failure') . $this->barang_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->barang_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('barang_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'barang');
                Template::set_message(lang('barang_delete_success'), 'success');

                redirect(SITE_AREA . '/content/barang');
            }

            Template::set_message(lang('barang_delete_failure') . $this->barang_model->error, 'error');
        }
        
        Template::set('barang', $this->barang_model->find($id));

        Template::set('toolbar_title', lang('barang_edit_heading'));
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
    private function save_barang($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->barang_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->barang_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        

        $return = false;
        if ($type == 'insert') {
            $id = $this->barang_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->barang_model->update($id, $data);
        }

        return $return;
    }
}