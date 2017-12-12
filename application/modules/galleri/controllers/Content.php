<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Galleri.Content.Create';
    protected $permissionDelete = 'Galleri.Content.Delete';
    protected $permissionEdit   = 'Galleri.Content.Edit';
    protected $permissionView   = 'Galleri.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('galleri/galleri_model');
        $this->load->model('galleri/galleri_detil_model');
        $this->lang->load('galleri');
        
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('galleri', 'galleri.js');
    }

    /**
     * Display a list of galleri data.
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
                    $deleted = $this->galleri_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('galleri_delete_success'), 'success');
                } else {
                    Template::set_message(lang('galleri_delete_failure') . $this->galleri_model->error, 'error');
                }
            }
        }
        
        
        
        $records = $this->galleri_model->find_all();

        Template::set('records', $records);
        
    Template::set('toolbar_title', lang('galleri_manage'));

        Template::render();
    }
    
    /**
     * Create a galleri object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_galleri()) {
                log_activity($this->auth->user_id(), lang('galleri_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'galleri');
                Template::set_message(lang('galleri_create_success'), 'success');

                redirect(SITE_AREA . '/content/galleri');
            }

            // Not validation error
            if ( ! empty($this->galleri_model->error)) {
                Template::set_message(lang('galleri_create_failure') . $this->galleri_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('galleri_action_create'));

        Template::render();
    }
    public function createdetil()
    {
        $this->auth->restrict($this->permissionCreate);
        $id = $this->uri->segment(5);
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_galleri()) {
                log_activity($this->auth->user_id(), lang('galleri_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'galleri');
                Template::set_message(lang('galleri_create_success'), 'success');

                redirect(SITE_AREA . '/content/galleri');
            }

            // Not validation error
            if ( ! empty($this->galleri_model->error)) {
                Template::set_message(lang('galleri_create_failure') . $this->galleri_model->error, 'error');
            }
        }
        Template::set('id_galleri', $id);
        Template::set('toolbar_title', lang('galleri_action_create'));

        Template::render();
    }
    /**
     * Allows editing of galleri data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('galleri_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/galleri');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_galleri('update', $id)) {
                log_activity($this->auth->user_id(), lang('galleri_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'galleri');
                Template::set_message(lang('galleri_edit_success'), 'success');
                redirect(SITE_AREA . '/content/galleri');
            }

            // Not validation error
            if ( ! empty($this->galleri_model->error)) {
                Template::set_message(lang('galleri_edit_failure') . $this->galleri_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->galleri_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('galleri_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'galleri');
                Template::set_message(lang('galleri_delete_success'), 'success');

                redirect(SITE_AREA . '/content/galleri');
            }

            Template::set_message(lang('galleri_delete_failure') . $this->galleri_model->error, 'error');
        }
        
        Template::set('galleri', $this->galleri_model->find($id));

        Template::set('toolbar_title', lang('galleri_edit_heading'));
        Template::render();
    }
    public function lihat()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('galleri_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/galleri');
        }
        $galleris = $this->galleri_model->find($id);
        $recgalleris = $this->galleri_detil_model->find_all($id);
        //die($id);
        Template::set('galleris', $galleris);
        Template::set('recgalleris', $recgalleris);
        Template::set('id', $id);
        Template::set('toolbar_title', lang('galleri_edit_heading'));
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
    private function save_galleri($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->galleri_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->galleri_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        

        $return = false;
        if ($type == 'insert') {
            $id = $this->galleri_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->galleri_model->update($id, $data);
        }

        return $return;
    }
    public function save(){
         // Validate the data
        $this->form_validation->set_rules($this->galleri_model->get_validation_rules());
        $response = array(
            'success'=>false,
            'msg'=>'Unknown error'
        );
        if ($this->form_validation->run() === false) {
            $response['msg'] = "
            <div class='alert alert-block alert-error fade in'>
                <a class='close' data-dismiss='alert'>&times;</a>
                <h4 class='alert-heading'>
                    Error
                </h4>
                ".validation_errors()."
            </div>
            ";
            echo json_encode($response);
            exit();
        }
        
        
        $data = $this->galleri_model->prep_data($this->input->post());
        //$data["LAST_UPDATED"]     = date("Y-m-d");
        $id_data = $this->input->post("kode");
        if(isset($id_data) && !empty($id_data)){
            $this->galleri_model->update($id_data,$data,$this->input->post());
        }
        else $this->galleri_model->insert($data,$this->input->post());
        $response ['success']= true;
        $response ['msg']= "berhasil";
        echo json_encode($response);    

    }
    public function savedetil(){
         // Validate the data
        $this->form_validation->set_rules($this->galleri_detil_model->get_validation_rules());
        $response = array(
            'success'=>false,
            'msg'=>'Unknown error'
        );
        if ($this->form_validation->run() === false) {
            $response['msg'] = "
            <div class='alert alert-block alert-error fade in'>
                <a class='close' data-dismiss='alert'>&times;</a>
                <h4 class='alert-heading'>
                    Error
                </h4>
                ".validation_errors()."
            </div>
            ";
            echo json_encode($response);
            exit();
        }
        
        
        $data = $this->galleri_detil_model->prep_data($this->input->post());
        //$data["LAST_UPDATED"]     = date("Y-m-d");
        $id_data = $this->input->post("kode");
        if(isset($id_data) && !empty($id_data)){
            $this->galleri_detil_model->update($id_data,$data,$this->input->post());
        }
        else $this->galleri_detil_model->insert($data,$this->input->post());
        $response ['success']= true;
        $response ['msg']= "berhasil";
        echo json_encode($response);    

    }
    function uploadberkas(){
        $tahun = $this->input->post('tahun');
        $kode = $this->input->post('kode');
        $satker = $this->input->post('satker');
        $kolom = $this->input->post('kolom');
        $response = array(
            'success'=>false,
            'msg'=>'Unknown error',
            'namafile'=>''
        );

        $this->load->helper('handle_upload');
         $uploadData = array();
         $upload = true;
         $id = "";
         $namafile = "";
         //die("masuk".$this->settings_lib->item('site.pathgallery'));
         if (isset($_FILES['userfile']) && is_array($_FILES['userfile']) && $_FILES['userfile']['error'] != 4)
         {
            $tmp_name = pathinfo($_FILES['userfile']['name'], PATHINFO_FILENAME);
            $uploadData = handle_upload('userfile',$this->settings_lib->item('site.pathgallery'));
             if (isset($uploadData['error']) && !empty($uploadData['error']))
             {
                $tipefile=$_FILES['userfile']['type'];
                //$tipefile = $_FILES['userfile']['name'];
                 $upload = false;
                 log_activity($this->auth->user_id(), 'Gagal : '.$uploadData['error']." ".$this->settings_lib->item('site.pathgallery'). " ".$tipefile.$this->input->ip_address(), 'galleri');
             }else{
                
                $namafile = $uploadData['data']['file_name'];
             }
         }else{
            die("File tidak ditemukan");
            log_activity($this->auth->user_id(), 'File tidak ditemukan : ' . $this->input->ip_address(), 'galleri');
         }  

         
        $return = '<div class="input-group divphoto">
                     <div class="input-group-addon">File</div>
                     <input type="text" name="nama_file" value="'.$namafile.'" id="nama_file" class="form-control just-upload-field" />
                     <div class="input-group-addon"><a href="'.$this->settings_lib->item('site.urlgallery').$namafile.'" target="_blank"><i class="fa fa-mail-forward"></i></a>
                     </div>
                      
                 </div>';
        echo $return;
        //echo json_encode($response);    
       exit();
    }
}