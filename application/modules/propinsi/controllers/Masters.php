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

		$this->auth->restrict('Propinsi.Masters.View');
		$this->load->model('propinsi_model', null, true);
		$this->lang->load('propinsi');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
		Template::set_block('sub_nav', 'masters/_sub_nav');

		Assets::add_module_js('propinsi', 'propinsi.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->propinsi_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('propinsi_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('propinsi_delete_failure') . $this->propinsi_model->error, 'error');
				}
			}
		}

		$records = $this->propinsi_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage propinsi');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a propinsi object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Propinsi.Masters.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_propinsi())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('propinsi_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'propinsi');

				Template::set_message(lang('propinsi_create_success'), 'success');
				redirect(SITE_AREA .'/masters/propinsi');
			}
			else
			{
				Template::set_message(lang('propinsi_create_failure') . $this->propinsi_model->error, 'error');
			}
		}
		Assets::add_module_js('propinsi', 'propinsi.js');

		Template::set('toolbar_title', lang('propinsi_create') . ' propinsi');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of propinsi data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('propinsi_invalid_id'), 'error');
			redirect(SITE_AREA .'/masters/propinsi');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Propinsi.Masters.Edit');

			if ($this->save_propinsi('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('propinsi_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'propinsi');

				Template::set_message(lang('propinsi_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('propinsi_edit_failure') . $this->propinsi_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Propinsi.Masters.Delete');

			if ($this->propinsi_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('propinsi_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'propinsi');

				Template::set_message(lang('propinsi_delete_success'), 'success');

				redirect(SITE_AREA .'/masters/propinsi');
			}
			else
			{
				Template::set_message(lang('propinsi_delete_failure') . $this->propinsi_model->error, 'error');
			}
		}
		Template::set('propinsi', $this->propinsi_model->find($id));
		Template::set('toolbar_title', lang('propinsi_edit') .' propinsi');
		Template::render();
	}
	public function getjsonkoordinat()
	{
		$year = $this->input->get('year') ? $this->input->get('year') : date("Y");
		$kwsn = $this->input->get('kwsn');
		$recordwilayahs = $this->propinsi_model->find_all();
		$json[] =array();
		$id= "";
		if (isset($recordwilayahs) && is_array($recordwilayahs) && count($recordwilayahs)) :
		foreach ($recordwilayahs as $record) : 
			
			
			if($record->koordinat != "")
			{
				$color = "#008d4c";
				
				$jsonwilayah = null;
				$coordslastsungai = null;
				$coordslastsungai[$record->id] = "";
				$json['id'][] = $record->id;
				$json['prov'][] = $record->prov;
				$json['color'][] = $color;
			
				$values   = explode(" ", trim($record->koordinat));
				$coords   = array();
				$coordslast   = array();
				$windowscontent = array();
				$windowscontentsungai = "Provinsi : ".$record->prov;
				foreach($values as $value) {    
					$args     = explode(",", $value);
					$args0 = isset($args[0]) ? $args[0] : "";
					$args1 = isset($args[1]) ? $args[1] : "";
					$args2 = isset($args[2]) ? $args[2] : "";
					$coords[] = array($args0, $args1, $args2);
					
					$jsonwilayah[] = array("lat" => (float)$args1, "lng" => (float)$args0);
					if($id != $record->id){
						$json['lastlat'][] = $args1;
						$json['lastlng'][] = $args0;
						$id = $record->id;
					}
					
				}
				 
				//echo $jsonwilayah;
				$json['jsonwilayah'][] = $jsonwilayah;
				$json['windowscontentsungai'][] = $windowscontentsungai;
			}
		endforeach;
		endif;
			
			
		  
		echo json_encode($json); //display records in json format using json_encode
		
		exit();
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
	private function save_propinsi($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['kode'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['id']        = $this->input->post('propinsi_id');
		$data['prov']        = $this->input->post('propinsi_prov');
		$data['keterangan']        = $this->input->post('propinsi_keterangan');
		$data['map_id']        = $this->input->post('propinsi_map_id');
		$data['koordinat_y']        = $this->input->post('koordinat_y');
		$data['koordinat_x']        = $this->input->post('koordinat_x');
		$data['koordinat']        = $this->input->post('koordinat');
		//$data['created_by']        = $this->input->post('propinsi_created_by');
		//$data['date_created']        = $this->input->post('propinsi_date_created') ? $this->input->post('propinsi_date_created') : '0000-00-00';
		//$data['updated_by']        = $this->input->post('propinsi_updated_by');
		//$data['last_updated']        = $this->input->post('propinsi_last_updated') ? $this->input->post('propinsi_last_updated') : '0000-00-00';
		
		if ($type == 'insert')
		{
			$id = $this->propinsi_model->insert($data);

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
			$return = $this->propinsi_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}