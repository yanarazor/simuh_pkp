<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Datausulan.Content.Create';
    protected $permissionDelete = 'Datausulan.Content.Delete';
    protected $permissionEdit   = 'Datausulan.Content.Edit';
    protected $permissionView   = 'Datausulan.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('datausulan/datausulan_model');
        $this->lang->load('datausulan');
		$this->load->model('eselon/eselon_model', null, true);
		$this->load->model('satker/satker_model', null, true);
		$this->load->model('pilihan/pilihan_model', null, true);
		$this->load->helper('handle_upload');
	
        $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
		
		$this->pilihan_model->where("jenis_pilihan = 01");
		$KategoriUsulani = $this->pilihan_model->find_all();
		Template::set('KategoriUsulani', $KategoriUsulani);
		
		//$this->eselon_model->where("kode = 04");
		$eseloni = $this->eselon_model->find_all();
		Template::set('eseloni', $eseloni);
		
	//	$this->eselon_model->where("kode = 04");
	//	$satkeri = $this->satker_model->find_all();
	//	Template::set('satkeri', $satkeri);
	//	$filename = "kertas_kerja1021.xls";

        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('datausulan', 'datausulan.js');
    }

    /**
     * Display a list of DataUsulan data.
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
				$this->load->model('barang/barang_model');
                // If any of the deletions fail, set the result to false, so
                // failure message is set if any of the attempts fail, not just
                // the last attempt

                $result = true;
                foreach ($checked as $pid) {
                    $deleted = $this->datausulan_model->delete($pid);
                    $datadel = array('nomor_usulan '=>$pid);
						$this->barang_model->delete_where($datadel);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('datausulan_delete_success'), 'success');
                } else {
                    Template::set_message(lang('datausulan_delete_failure') . $this->datausulan_model->error, 'error');
                }
            }
        }
        


		//$this->datausulan_model->join('pilihan', 'pilihan.value_pilihan=datausulan.kategori_usulan', 'left');
       
        $pagerUriSegment = 5;
        $pagerBaseUrl = site_url(SITE_AREA . '/content/datausulan/index') . '/';
        $offset = $this->input->get('per_page');
     //   $limit  = $this->settings_lib->item('site.list_limit') ?: 15;
        $limit = 0;
        $total = $this->datausulan_model->count_all();
        $this->load->library('pagination');
        $pager['base_url']    = $pagerBaseUrl;
        //$pager['total_rows']  = $this->datausulan_model->count_all();
        $pager['total_rows']  = $total;
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;
        $pager['page_query_string'] = TRUE;

        $this->pagination->initialize($pager);
        $this->datausulan_model->order_by('datausulan.id','desc');
        $this->datausulan_model->limit($limit, $offset);
        
      //  $records = $this->news_model->find_all();



        $records = $this->datausulan_model->find_all();
        
        Template::set('records', $records);
		Template::set('toolbar_title', lang('datausulan_manage'));
        Template::render();
    } 
	
    function getSatkerByEselon($Eselon){ 
        $this->satker_model->where('kode_eselon',$Eselon);
		$satkeri = $this->satker_model->find_all();
		Template::set('satkeri', $satkeri);
		
	}
    
    /**
     * Create a DataUsulan object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_datausulan()) {
                log_activity($this->auth->user_id(), lang('datausulan_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'datausulan');
                Template::set_message(lang('datausulan_create_success'), 'success');

                redirect(SITE_AREA . '/content/datausulan');
            }

            // Not validation error
            if ( ! empty($this->datausulan_model->error)) {
                Template::set_message(lang('datausulan_create_failure') . $this->datausulan_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('datausulan_action_create'));

        Template::render();
    }

    public function savedata()
    {
    	$insert_id = 0;
        $this->auth->restrict($this->permissionCreate);
	//	$nip_peneliti =  $this->current_user->id;
		$id = $this->input->post('id_usulan');
		$no_surat_usulan = $this->input->post('no_surat_usulan');
		$datausulan = $this->datausulan_model->find_by("no_surat_usulan",$no_surat_usulan);
		if(isset($datausulan->id)){
			die("exist");
			die("Nomor Usulan sudah terdaftar");
		}
		//die();
		if($id != ""){
			$this->save_datausulan("update",$id);
        }else{
        	$id = $this->save_datausulan();
        }
        echo $id;
        exit();
    }

    public function setstatusver()
    {
    	$insert_id = 0;
        $this->auth->restrict($this->permissionCreate);
		$nip_peneliti =  $this->current_user->id;
		$kolom = $this->input->post('kolom');
		$val = $this->input->post('val');
		$id = $this->input->post('id');
		$result = $this->db->query('update sly_barang set '.$kolom.' = "'.$val.'" where id = "'.$id.'"');
		if($result){
			die("Update berhasil");
		}
        exit();
    }

    public function setstatusbarang()
    {
    	$insert_id = 0;
        $this->auth->restrict($this->permissionCreate);
	//	$nip_peneliti =  $this->current_user->id;
		$kolom = "status_barang";
		$val = $this->input->post('val');
		$id = $this->input->post('id');
		$result = $this->db->query('update sly_barang set '.$kolom.' = "'.$val.'" where id = "'.$id.'"');
		if($result){
			die("Update berhasil");
		}
        exit();
    }

    public function setketeranganbarang()
    {
    	$insert_id = 0;
        $this->auth->restrict($this->permissionCreate);
	//	$nip_peneliti =  $this->current_user->id;
		$kolom = "keterangan";
		$val = $this->input->post('val');
		$id = $this->input->post('id');
		$result = $this->db->query('update sly_barang set '.$kolom.' = "'.$val.'" where id = "'.$id.'"');
		if($result){
			die("Update berhasil");
		}
        exit();
    }
    
    function uploaddata(){
    	 $this->load->helper('handle_upload');
    	$this->load->model('barang/barang_model');
		 $uploadData = array();
		 $upload = true;
		 $id_log = $this->input->post('id_log');
		 
		 if (isset($_FILES['userfile']) && is_array($_FILES['userfile']) && $_FILES['userfile']['error'] != 4)
		 {
			
			 $uploadData = handle_upload('userfile',$this->settings_lib->item('site.pathuploaded'),"barang".$id_log);
			 if (isset($uploadData['error']) && !empty($uploadData['error']))
			 {
				 $upload = false;
				 log_activity($this->auth->user_id(), 'Gagal : '.$uploadData['error'].$this->input->ip_address(), 'usulan');
			 }else{
			 	$this->db->query('update sly_datausulan set file_xls = "'.$uploadData['data']['file_name'].'" where id = "'.$id_log.'"');
			 	$this->runexport($uploadData['data']['file_name'],$id_log);
			 }
		 }else{
		 	die("File tidak ditemukan");
		 	log_activity($this->auth->user_id(), 'File tidak ditemukan : ' . $this->input->ip_address(), 'spmk_usulanptp');
		 } 	

        
	}
	
	function rungenerate(){
    	$this->load->model('barang/barang_model');
			 	$this->runexport("kertas_kerja_draft_(3)5.xls","200");
			 die();
	}
	
	

	public function runexport($filename,$nomor_usulan)
	{
		
		$sudahada = 0;
		$success = 0;
		$filename = $filename;//"kertas_kerja1021.xls";
		// handle upload
		$this->load->helper('handle_upload');
		$uploadData = array();
		$upload = true;
		  
		// end handle upload
		
		$file = $this->settings_lib->item('site.pathuploaded').$filename;
		
		$this->load->library('Excel');
		$objPHPExcel = PHPExcel_IOFactory::load($file);

		//  Get worksheet dimensions
		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow(); 
		$highestColumn = $sheet->getHighestColumn();
		//die($highestRow);
		//  Loop through each row of the worksheet in turn\
		for ($row = 2; $row <= $highestRow; $row++){ 
			//echo $row."<br>";
			//  Read a row of data into an array
			$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
											NULL,
											TRUE,
											FALSE);
			//  Insert row data array into your database of choice here
			  $kode_barang =  $rowData[0][0];
			  $nama =  $rowData[0][1];
			  $merek =  preg_replace("/\s+/", "",$rowData[0][2]);
			  $NUP =  preg_replace("/\s+/", "",$rowData[0][3]);
			  $tahun_perolehan =  preg_replace("/\s+/", "",$rowData[0][4]);
			  $luar =  preg_replace("/\s+/", "",$rowData[0][5]);
				$satuan_luas =  preg_replace("/\s+/", "",$rowData[0][6]);
				$jumlah =  preg_replace("/\s+/", "",$rowData[0][7]);
				$satuan_jumlah =  preg_replace("/\s+/", "",$rowData[0][8]);
				$harga_satuan =  preg_replace("/\s+/", "",$rowData[0][9]);
				$nilai_perolehan =  preg_replace("/\s+/", "",$rowData[0][10]);
				$nilai_buku =  preg_replace("/\s+/", "",$rowData[0][11]);
				$kondisi = preg_replace("/\s+/", "",$rowData[0][12]);
				
			  //die($nama." ads");
				$id = $this->save_barang($nomor_usulan,$kode_barang,$nama,$merek,$NUP,$tahun_perolehan,$luar,$satuan_luas,$jumlah,$satuan_jumlah,$harga_satuan,$nilai_perolehan,$nilai_buku,$kondisi);
			//$id = $this->save_barang($nomor_usulan,$nama,$merek,$NUP,$tahun_perolehan,$luar,$nilai_perolehan,$nilai_buku,
			
			  $success++;
			  //die($id." ID");
		  }
		  
		
		$msgsuccess = "Berhasil : ".$success." data";
		echo $msgsuccess."\nUpload Selesai";
	   //send the data in an array format
	 	exit;
		 
	}

private function save_barang($nomor_usulan ="",$kode_barang="",$nama="",$merek ="",$NUP ="",$tahun_perolehan="",$luar="",$satuan_luas="",$jumlah="",$satuan_jumlah="",$harga_satuan="",$nilai_perolehan="",$nilai_buku="",$kondisi = "",$type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Make sure we only pass in the fields we want
        
        $data = array();

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
       	$data['nomor_usulan']	= $nomor_usulan; 
		$data['kode_barang']	= $kode_barang; 
       	$data['nama_barang']	= $nama; 
       	$data['merek']	= $merek; 
       	$data['nup']	= $NUP; 
       	$data['tahun_perolehan']	= $tahun_perolehan; 
       	$data['luar']	= $luar; 
       	$data['satuan_luas']	= $satuan_luas; 
       	$data['jumlah']	= $jumlah; 
       	$data['satuan_jumlah']	= $satuan_jumlah;
       	$data['harga_satuan']	= $harga_satuan;		
       	$data['nilai_perolehan']	= $nilai_perolehan; 
       	$data['nilai_buku']	= $nilai_buku; 
       	$data['kondisi']	= $kondisi; 
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
    /**
     * Allows editing of DataUsulan data.
     *
     * @return void
     */
    public function edit()
    {
		
		$satkeri = $this->satker_model->find_all();
		Template::set('satkeri', $satkeri);
		
		
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('datausulan_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/datausulan');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_datausulan('update', $id)) {
                log_activity($this->auth->user_id(), lang('datausulan_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'datausulan');
                Template::set_message(lang('datausulan_edit_success'), 'success');
                redirect(SITE_AREA . '/content/datausulan');
            }

            // Not validation error
            if ( ! empty($this->datausulan_model->error)) {
                Template::set_message(lang('datausulan_edit_failure') . $this->datausulan_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);
			$this->load->model('barang/barang_model');
            if ($this->datausulan_model->delete($id)) {
            	$datadel = array('nomor_usulan '=>$id);
				$this->barang_model->delete_where($datadel);
					
					
                log_activity($this->auth->user_id(), lang('datausulan_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'datausulan');
                Template::set_message(lang('datausulan_delete_success'), 'success');

                redirect(SITE_AREA . '/content/datausulan');
            }

            Template::set_message(lang('datausulan_delete_failure') . $this->datausulan_model->error, 'error');
        }
        
        Template::set('datausulan', $this->datausulan_model->find($id));

        Template::set('toolbar_title', lang('datausulan_edit_heading'));
        Template::render();
    }

	public function verifikasi()
    {
		$this->load->model('barang/barang_model');
		$id = $this->uri->segment(5);
	   
	   	$satkeri = $this->satker_model->find_all();
		Template::set('satkeri', $satkeri);
	   
        if (empty($id)) {
            Template::set_message(lang('datausulan_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/datausulan');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_datausulan('update', $id)) {
                log_activity($this->auth->user_id(), lang('datausulan_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'datausulan');
                Template::set_message(lang('datausulan_edit_success'), 'success');
                redirect(SITE_AREA . '/content/datausulan');
            }

            // Not validation error
            if ( ! empty($this->datausulan_model->error)) {
                Template::set_message(lang('datausulan_edit_failure') . $this->datausulan_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->datausulan_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('datausulan_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'datausulan');
                Template::set_message(lang('datausulan_delete_success'), 'success');

                redirect(SITE_AREA . '/content/datausulan');
            }

            Template::set_message(lang('datausulan_delete_failure') . $this->datausulan_model->error, 'error');
        }
        
        $databarangs = $this->barang_model->find_all($id);
        Template::set('databarangs', $databarangs);
        
        Template::set('datausulan', $this->datausulan_model->find($id));

        Template::set('toolbar_title', lang('datausulan_edit_heading'));
        Template::render();
    }
	
	public function view_data()
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
                    $deleted = $this->datausulan_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('datausulan_delete_success'), 'success');
                } else {
                    Template::set_message(lang('datausulan_delete_failure') . $this->datausulan_model->error, 'error');
                }
            }
        }
        
        
        
      //  $records = $this->datausulan_model->find_all();

      //  Template::set('records', $records);
        
    Template::set('toolbar_title', lang('datausulan_manage'));

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
    private function save_datausulan($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['id'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->datausulan_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->datausulan_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        
		$data['tgl_usulan']	= $this->input->post('tgl_usulan') ? $this->input->post('tgl_usulan') : '0000-00-00';
	
        $return = false;
        if ($type == 'insert') {
            $id = $this->datausulan_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->datausulan_model->update($id, $data);
        }

        return $return;
    }
	
	public function s_persetujuan()
    {
    	$this->load->model('barang/barang_model');
		$id = $this->uri->segment(5);
		
    //  $databarangs = $this->barang_model->find_all($id);
    //  Template::set('databarangs', $databarangs);
	//  $data = $this->datausulan_model->find_all_data($id);
	//	Template::set('records', $data);
		 Template::set('ids', $id);
		 
		$records = $this->datausulan_model->limit(1, 0)->find_all_record($id);
        Template::set('records', $records); 
		 
		 
   //   Template::set('datausulan', $this->datausulan_model->limit(1, 0)->find_all_data($id));
        Template::set('toolbar_title', "Surat Persetujuan");
		Template::set_theme("null");
        Template::render();
    }
	
	public function l_persetujuan()
    {
    	$this->load->model('barang/barang_model');
		$id = $this->uri->segment(5);
		
        $databarangs = $this->barang_model->find_all($id);
        Template::set('databarangs', $databarangs);
	
		$this->datausulan_model->join('eselon', 'eselon.kode_eselon=datausulan.kode_eselon', 'left');
		$this->datausulan_model->join('satker', 'satker.kode_satker=datausulan.kode_satker', 'left');
        Template::set('datausulan', $this->datausulan_model->find($id));
        Template::set('toolbar_title', "Lampiran Surat Pesetujuan");
		Template::set_theme("null");
        Template::render();
    }
	
	public function s_pengembalian()
    {
    	$this->load->model('barang/barang_model');
		$id = $this->uri->segment(5);
	//	 Template::set('ids', $id);
    
	    $databarangs = $this->barang_model->find_all($id);
        Template::set('databarangs', $databarangs);
	
	  $records = $this->datausulan_model->limit(1, 0)->find_all_record($id);
      Template::set('records', $records);
		
	//	$this->datausulan_model->join('eselon', 'eselon.kode_eselon=datausulan.kode_eselon', 'left');
	//	$this->datausulan_model->join('satker', 'satker.kode_satker=datausulan.kode_satker', 'left');
    //   Template::set('datausulan', $this->datausulan_model->find($id));
		
        Template::set('toolbar_title', "Surat Pengembalian");
		Template::set_theme("null");
        Template::render();
    }

	public function l_pengembalian()
    {
    	$this->load->model('barang/barang_model');
		$id = $this->uri->segment(5);
		
		$this->barang_model->where('status_barang','0');
        $databarangs = $this->barang_model->find_all($id);
        Template::set('databarangs', $databarangs);
		
		$this->datausulan_model->join('eselon', 'eselon.kode_eselon=datausulan.kode_eselon', 'left');
		$this->datausulan_model->join('satker', 'satker.kode_satker=datausulan.kode_satker', 'left');
        Template::set('datausulan', $this->datausulan_model->find($id));
        Template::set('toolbar_title', "Lampiran Surat Pengembalian");
		Template::set_theme("null");
        Template::render();
    }

}