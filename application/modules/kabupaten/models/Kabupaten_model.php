<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kabupaten_model extends BF_Model {

	protected $table_name	= "kabkota";
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
			"field"		=> "kabupaten_id",
			"label"		=> "Id",
			"rules"		=> "required|unique[kabkota.id,kabkota.kode]|max_length[11]"
		),
		array(
			"field"		=> "kabupaten_kab",
			"label"		=> "Kab",
			"rules"		=> "required|max_length[100]"
		),
		array(
			"field"		=> "kabupaten_keterangan",
			"label"		=> "Keterangan",
			"rules"		=> "max_length[100]"
		),
		array(
			"field"		=> "kabupaten_id_provinsi",
			"label"		=> "Provinsi",
			"rules"		=> "required|max_length[11]"
		),
		array(
			"field"		=> "kabupaten_created_by",
			"label"		=> "Created By",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "kabupaten_date_created",
			"label"		=> "Date Created",
			"rules"		=> ""
		),
		array(
			"field"		=> "kabupaten_updated_by",
			"label"		=> "Updated By",
			"rules"		=> "max_length[11]"
		),
		array(
			"field"		=> "kabupaten_last_updated",
			"label"		=> "Last Updated",
			"rules"		=> ""
		),
	);
	protected $insert_validation_rules 	= array();
	protected $skip_validation 			= FALSE;
	protected $CI;
	protected $role_id="";
	protected $kabupaten="";
	
	function __construct()
    {
        $this->CI = &get_instance();
		$current_user = $this->CI->user_model->find($this->CI->auth->user_id());
        if($current_user){
			$this->role_id = $current_user->role_id;
		}
    }//end __construct
	  
	//--------------------------------------------------------------------
	public function find_all($prov="",$kab="")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*,prov');
		}
		if($prov !="")
			$this->db->where('kdprovinsi',$prov);
		if($kab !="")
			$this->db->where('kab like "%'.$kab.'%"');
			
		 
		$this->db->join('propinsi', 'kabkota.kdprovinsi=propinsi.id', 'left');
		  
		return parent::find_all();
	}
	public function GetByprovinsi($prov="")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		 
		$this->db->where('kdprovinsi',$prov);
		$this->db->join('propinsi', 'kabkota.kdprovinsi=propinsi.id', 'left');
		  
		return parent::find_all();
	}
	public function GetByprovinsiterpilih($prov="")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		$this->db->where('kabkota.id_provinsi',$prov);
		//$this->db->where('status_terpilih',"1");
		//$this->db->where('kode_kawasan != ""');
		$this->db->join('kecamatan', 'kabkota.id = kecamatan.id_kabupaten', 'inner');
		$this->db->join('persiapan_kecamatan', 'persiapan_kecamatan.kecamatan = kecamatan.id', 'inner');
		//$this->db->join('usulan_kawasan', 'persiapan_kecamatan.id_persiapan = usulan_kawasan.id_persiapan_kecamatan', 'inner');
		$this->db->group_by('kabkota.id');
		$this->db->order_by('kab','ASC');
		return parent::find_all();
	}
	public function find_bykode($kode="")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		 
			
		$this->db->where('id',$kode);
		 
		return parent::find_all();
	}
	public function findbykode($id)
	{
		 
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		$this->db->where('id',$id);
		 
		return parent::find_all();
	}

}
