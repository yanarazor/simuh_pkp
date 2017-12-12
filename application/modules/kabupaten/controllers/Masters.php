<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * masters controller
 */
class masters extends Admin_Controller
{

	//--------------------------------------------------------------------


	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('kabupaten_model', null, true);
		$this->lang->load('kabupaten');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
		Template::set_block('sub_nav', 'masters/_sub_nav');
		$this->load->model('propinsi/propinsi_model', null, true);
		$provinsi = $this->propinsi_model->find_all();
		Template::set('provinsis', $provinsi);
		Assets::add_module_js('kabupaten', 'kabupaten.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{
		$this->auth->restrict('Kabupaten.Masters.View');
		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->kabupaten_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('kabupaten_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('kabupaten_delete_failure') . $this->kabupaten_model->error, 'error');
				}
			}
		}
		$prov = $this->input->get('prov');
		$kab = $this->input->get('kab');
		$this->load->library('pagination');
		$total = count($this->kabupaten_model->find_all($prov,$kab));
		$offset = $this->input->get('per_page');
		$limit = $this->settings_lib->item('site.list_limit');

		$this->pager['base_url'] 			= current_url()."?prov=".$prov."&kab=".$kab;
		$this->pager['total_rows'] 			= $total;
		$this->pager['per_page'] 			= $limit;
		$this->pager['page_query_string']	= TRUE;
		$this->pagination->initialize($this->pager);
		$records = $this->kabupaten_model->limit($limit, $offset)->find_all($prov,$kab);
		if(isset($records) && is_array($records) && count($records))
			$total = $total;
		else
			$total = 0;
		Template::set('total', $total); 
		Template::set('records', $records);
		Template::set('kab', $kab);
		Template::set('prov', $prov);
		Template::set('toolbar_title', 'Manage kabupaten');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a kabupaten object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Kabupaten.Masters.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_kabupaten())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kabupaten_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'kabupaten');

				Template::set_message(lang('kabupaten_create_success'), 'success');
				redirect(SITE_AREA .'/masters/kabupaten');
			}
			else
			{
				Template::set_message(lang('kabupaten_create_failure') . $this->kabupaten_model->error, 'error');
			}
		}
		Assets::add_module_js('kabupaten', 'kabupaten.js');

		Template::set('toolbar_title', lang('kabupaten_create') . ' kabupaten');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of kabupaten data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('kabupaten_invalid_id'), 'error');
			redirect(SITE_AREA .'/masters/kabupaten');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Kabupaten.Masters.Edit');

			if ($this->save_kabupaten('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kabupaten_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'kabupaten');

				Template::set_message(lang('kabupaten_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('kabupaten_edit_failure') . $this->kabupaten_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Kabupaten.Masters.Delete');

			if ($this->kabupaten_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('kabupaten_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'kabupaten');

				Template::set_message(lang('kabupaten_delete_success'), 'success');

				redirect(SITE_AREA .'/masters/kabupaten');
			}
			else
			{
				Template::set_message(lang('kabupaten_delete_failure') . $this->kabupaten_model->error, 'error');
			}
		}
		Template::set('kabupaten', $this->kabupaten_model->find($id));
		Template::set('toolbar_title', lang('kabupaten_edit') .' kabupaten');
		Template::render();
	}

	//--------------------------------------------------------------------

	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_kabupaten($type='insert', $id=0)
	{
		$extra_unique_rule =  "";
		if ($type == 'update')
		{
			$_POST['kode'] = $id;
			$extra_unique_rule = ',kabupaten.id';
		}

		// make sure we only pass in the fields we want
		$this->form_validation->set_rules('kabupaten_kab','Nama','required|max_length[200]'); 
		$this->form_validation->set_rules('kabupaten_id','ID','required|max_length[20]|unique[kabupaten.id' . $extra_unique_rule . ']');
		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}
		// make sure we only pass in the fields we want
		
		$data = array();
		$data['id']        = $this->input->post('kabupaten_id');
		$data['kab']        = $this->input->post('kabupaten_kab');
		$data['keterangan']        = $this->input->post('kabupaten_keterangan');
		$data['id_provinsi']        = $this->input->post('kabupaten_id_provinsi');
		//$data['created_by']        = $this->input->post('kabupaten_created_by');
		//$data['date_created']        = $this->input->post('kabupaten_date_created') ? $this->input->post('kabupaten_date_created') : '0000-00-00';
		//$data['updated_by']        = $this->input->post('kabupaten_updated_by');
		//$data['last_updated']        = $this->input->post('kabupaten_last_updated') ? $this->input->post('kabupaten_last_updated') : '0000-00-00';

		if ($type == 'insert')
		{
			$id = $this->kabupaten_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$return = $this->kabupaten_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------
	
	public function getbyprovinsi()
	{
		$prov = $this->input->get('id_provinsi');
		$json = array(); 
		$recordkabupatens = $this->kabupaten_model->GetByprovinsi($prov);
		if(isset($recordkabupatens) && is_array($recordkabupatens) && count($recordkabupatens)):
			foreach ($recordkabupatens as $record) :
				$json['id'][] = $record->kdkabkota;
				$json['kab'][] = $record->nmkabkota;
			endforeach;
		endif;
		echo json_encode($json);
		die();
	}
	public function getbyprovinsiterpilih()
	{
		$prov = $this->input->get('id_provinsi');
		$json = array(); 
		$recordkabupatens = $this->kabupaten_model->GetByprovinsi($prov);
		if(isset($recordkabupatens) && is_array($recordkabupatens) && count($recordkabupatens)):
			foreach ($recordkabupatens as $record) :
				$json['id'][] = $record->kdkabkota;
				$json['kab'][] = $record->nmkabkota;
			endforeach;
		endif;
		echo json_encode($json);
		die();
	}


}