<?php defined('BASEPATH') || exit('No direct script access allowed');

class Satker_model extends BF_Model
{
    protected $table_name	= 'satker';
	protected $key			= 'id';
	protected $date_format	= 'datetime';

	protected $log_user 	= false;
	protected $set_created	= false;
	protected $set_modified = false;
	protected $soft_deletes	= false;


	// Customize the operations of the model without recreating the insert,
    // update, etc. methods by adding the method names to act as callbacks here.
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 	    = array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	// For performance reasons, you may require your model to NOT return the id
	// of the last inserted row as it is a bit of a slow method. This is
    // primarily helpful when running big loops over data.
	protected $return_insert_id = true;

	// The default type for returned row data.
	protected $return_type = 'object';

	// Items that are always removed from data prior to inserts or updates.
	protected $protected_attributes = array();

	// You may need to move certain rules (like required) into the
	// $insert_validation_rules array and out of the standard validation array.
	// That way it is only required during inserts, not updates which may only
	// be updating a portion of the data.
	protected $validation_rules 		= array(
		array(
			'field' => 'kode_eselon',
			'label' => 'lang:satker_field_kode_eselon',
			'rules' => 'required|max_length[25]',
		),
		array(
			'field' => 'kode_satker',
			'label' => 'lang:satker_field_kode_satker',
			'rules' => 'required|max_length[25]',
		),
		array(
			'field' => 'nama_satker',
			'label' => 'lang:satker_field_nama_satker',
			'rules' => 'required|max_length[150]',
		),
	);
	protected $insert_validation_rules  = array();
	protected $skip_validation 			= false;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
	
	
	 public function find_all($title = "", $subkat = "")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*, eselon.nama_eselon');
		}
		$this->db->join('eselon', 'eselon.kode_eselon=satker.kode_eselon', 'left');
		if($title!=""){
			$this->db->where('satker.nama_satker like "%'.$title.'%"');
			$this->db->or_where('satker.kode_satker like "%'.$title.'%"');
		}
		if($subkat!=""){
			$this->db->where('eselon.kode_eselon like "%'.$subkat.'%"');
		}
		$this->db->order_by('id','desc');
		return parent::find_all();
	}
	
	 public function count_all($title = "", $subkat = "")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*, eselon.nama_eselon');
		}
		$this->db->join('eselon', 'eselon.kode_eselon=satker.kode_eselon', 'left');
		if($title!=""){
			$this->db->where('satker.nama_satker like "%'.$title.'%"');
			$this->db->or_where('satker.kode_satker like "%'.$title.'%"');
		}
		if($subkat!=""){
			$this->db->where('eselon.kode_eselon like "%'.$subkat.'%"');
		}
		$this->db->order_by('id','desc');
		return parent::count_all();
	}
	
	
}