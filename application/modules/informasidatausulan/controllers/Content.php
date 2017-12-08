<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Informasidatausulan.Content.Create';
    protected $permissionDelete = 'Informasidatausulan.Content.Delete';
    protected $permissionEdit   = 'Informasidatausulan.Content.Edit';
    protected $permissionView   = 'Informasidatausulan.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('informasidatausulan/informasidatausulan_model');
        $this->lang->load('informasidatausulan');
        	$this->load->model('eselon/eselon_model', null, true);
		$this->load->model('satker/satker_model', null, true);
		$this->load->model('pilihan/pilihan_model', null, true);
		
		
	//$this->eselon_model->where("kode = 04");
		$eseloni = $this->eselon_model->find_all();
		Template::set('eseloni', $eseloni);
		
	//	$this->eselon_model->where("kode = 04");
		$satkeri = $this->satker_model->find_all();
		Template::set('satkeri', $satkeri);

        $this->pilihan_model->where("jenis_pilihan = 02");
        $perolehani = $this->pilihan_model->find_all();
        Template::set('perolehani', $perolehani);

        $this->pilihan_model->where("jenis_pilihan = 03");
        $usulani = $this->pilihan_model->find_all();
        Template::set('usulani', $usulani);
        
        $this->pilihan_model->where("jenis_pilihan = 04");
        $statusi = $this->pilihan_model->find_all();
        Template::set('statusi', $statusi);
        
        Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
        Assets::add_js('jquery-ui-1.8.13.min.js');
        $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('informasidatausulan', 'informasidatausulan.js');
    }

    /**
     * Display a list of informasidatausulan data.
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
                    $deleted = $this->informasidatausulan_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('informasidatausulan_delete_success'), 'success');
                } else {
                    Template::set_message(lang('informasidatausulan_delete_failure') . $this->informasidatausulan_model->error, 'error');
                }
            }
        }
        
        
        
        $records = $this->informasidatausulan_model->find_all();

        Template::set('records', $records);
        
    	Template::set('toolbar_title', lang('informasidatausulan_manage'));

        Template::render();
    }
    
    /**
     * Create a informasidatausulan object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_informasidatausulan()) {
                log_activity($this->auth->user_id(), lang('informasidatausulan_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'informasidatausulan');
                Template::set_message(lang('informasidatausulan_create_success'), 'success');

                redirect(SITE_AREA . '/content/informasidatausulan');
            }

            // Not validation error
            if ( ! empty($this->informasidatausulan_model->error)) {
                Template::set_message(lang('informasidatausulan_create_failure') . $this->informasidatausulan_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('informasidatausulan_action_create'));

        Template::render();
    }
    /**
     * Allows editing of informasidatausulan data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('informasidatausulan_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/informasidatausulan');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_informasidatausulan('update', $id)) {
                log_activity($this->auth->user_id(), lang('informasidatausulan_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'informasidatausulan');
                Template::set_message(lang('informasidatausulan_edit_success'), 'success');
                redirect(SITE_AREA . '/content/informasidatausulan');
            }

            // Not validation error
            if ( ! empty($this->informasidatausulan_model->error)) {
                Template::set_message(lang('informasidatausulan_edit_failure') . $this->informasidatausulan_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->informasidatausulan_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('informasidatausulan_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'informasidatausulan');
                Template::set_message(lang('informasidatausulan_delete_success'), 'success');

                redirect(SITE_AREA . '/content/informasidatausulan');
            }

            Template::set_message(lang('informasidatausulan_delete_failure') . $this->informasidatausulan_model->error, 'error');
        }
        
        Template::set('informasidatausulan', $this->informasidatausulan_model->find($id));

        Template::set('toolbar_title', lang('informasidatausulan_edit_heading'));
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
    private function save_informasidatausulan($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->informasidatausulan_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->informasidatausulan_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        
		$data['tgl_usulan']	= $this->input->post('tgl_usulan') ? $this->input->post('tgl_usulan') : '0000-00-00';
        $data['tgl_surat_disetujui'] = $this->input->post('tgl_surat_disetujui') ? $this->input->post('tgl_surat_disetujui') : '0000-00-00';
        $data['tgl_surat_ditolak_atau_dikembalikan'] = $this->input->post('tgl_surat_ditolak_atau_dikembalikan') ? $this->input->post('tgl_surat_ditolak_atau_dikembalikan') : '0000-00-00';

        $return = false;
        if ($type == 'insert') {
            $id = $this->informasidatausulan_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->informasidatausulan_model->update($id, $data);
        }

        return $return;
    }
}