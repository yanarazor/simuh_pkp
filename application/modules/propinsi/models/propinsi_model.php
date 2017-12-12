<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Propinsi_model extends BF_Model {

	protected $table_name	= "propinsi";
	protected $key			= "kode";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";

	protected $log_user 	= FALSE;

	protected $set_created	= false;
	protected $set_modified = false;

	/*
		Customize the operations of the model without recreating the insert, update,
		etc methods by adding the method names to act as callbacks here.
	 */
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 		= array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	/*
		For performance reasons, you may require your model to NOT return the
		id of the last inserted row as it is a bit of a slow method. This is
		primarily helpful when running big loops over data.
	 */
	protected $return_insert_id 	= TRUE;

	// The default type of element data is returned as.
	protected $return_type 			= "object";

	// Items that are always removed from data arrays prior to
	// any inserts or updates.
	protected $protected_attributes = array();

	/*
		You may need to move certain rules (like required) into the
		$insert_validation_rules array and out of the standard validation array.
		That way it is only required during inserts, not updates which may only
		be updating a portion of the data.
	 */
	protected $validation_rules 		= array(
		array(
			"field"		=> "propinsi_id",
			"label"		=> "Id",
			"rules"		=> "required|unique[propinsi.id,propinsi.kode]|max_length[11]"
		),
		array(
			"field"		=> "propinsi_prov",
			"label"		=> "Prov",
			"rules"		=> "required|unique[propinsi.prov,propinsi.kode]|max_length[100]"
		),
		array(
			"field"		=> "propinsi_keterangan",
			"label"		=> "Keterangan",
			"rules"		=> "max_length[100]"
		),
		array(
			"field"		=> "propinsi_map_id",
			"label"		=> "Map Id",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "propinsi_created_by",
			"label"		=> "Created By",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "propinsi_date_created",
			"label"		=> "Date Created",
			"rules"		=> ""
		),
		array(
			"field"		=> "propinsi_updated_by",
			"label"		=> "Updated By",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "propinsi_last_updated",
			"label"		=> "Last Updated",
			"rules"		=> ""
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;
	protected $CI;
	protected $role_id="";
	protected $provinsi="";
	
	function __construct()
    {
       	$this->CI = &get_instance();
       	$this->role_id = $this->CI->auth->role_id();
    }//end __construct
	//--------------------------------------------------------------------
	public function find_all()
	{
		 
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		//
		if($this->role_id != "1")
			$this->db->where('id',$this->provinsi);
		
		$this->db->where('stat','1');
		return parent::find_all();
	}
	public function find_all_nofilter()
	{
		 
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		//

        //$data['username'] = $current_user->username;
		 
		return parent::find_all();
	}
	public function getbykode($kode)
	{
		 
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		if($kode!=""){
			$this->db->where('id',$kode);
		}
		return parent::find_all();
	}
	public function find_report($tahun ="",$prov="")
	{
		 
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*,persiapan_provinsi.*,'.$this->table_name.".id as id");
		}
		if($prov!=""){
			$this->db->where('kd_provinsi',$prov);
		}
		  
		if($tahun!="" and $tahun != date("Y")){
			$this->db->where('tahun',$tahun);
		}
		 
		
		$this->db->join('persiapan_provinsi', 'propinsi.id = persiapan_provinsi.kd_provinsi', 'left');
		 
		return parent::find_all();
	}
}
