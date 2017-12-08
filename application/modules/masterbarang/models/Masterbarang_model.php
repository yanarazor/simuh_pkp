<?php defined('BASEPATH') || exit('No direct script access allowed');

class Masterbarang_model extends BF_Model
{
    protected $table_name	= 'master_barang';
	protected $key			= 'id';
	protected $date_format	= 'datetime';

	protected $log_user 	= true;
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
			'field' => 'kd_barang',
			'label' => 'lang:masterbarang_field_kd_barang',
			'rules' => 'required|max_length[255]',
		),
		array(
			'field' => 'nm_barang',
			'label' => 'lang:masterbarang_field_nm_barang',
			'rules' => 'required|max_length[255]',
		),
		array(
			'field' => 'type',
			'label' => 'lang:masterbarang_field_type',
			'rules' => 'max_length[255]',
		),
		array(
			'field' => 'Spesifikasi',
			'label' => 'lang:masterbarang_field_Spesifikasi',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'stok',
			'label' => 'lang:masterbarang_field_stok',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'satuan',
			'label' => 'lang:masterbarang_field_satuan',
			'rules' => 'max_length[50]',
		),
		array(
			'field' => 'keterangan',
			'label' => 'lang:masterbarang_field_keterangan',
			'rules' => '',
		),
		array(
			'field' => 'kd_kategori',
			'label' => 'lang:masterbarang_field_kd_kategori',
			'rules' => 'max_length[50]',
		),
		array(
			'field' => 'tahun',
			'label' => 'lang:masterbarang_field_tahun',
			'rules' => 'max_length[4]',
		),
		array(
			'field' => 'aktif',
			'label' => 'lang:masterbarang_field_aktif',
			'rules' => 'max_length[1]',
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
	
	 public function find_all($title = "")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}

		if($title!=""){
			$this->db->where('master_barang.kd_barang like "%'.$title.'%"');
			$this->db->or_where('master_barang.nm_barang like "%'.$title.'%"');
		}

		$this->db->order_by('id','desc');
		return parent::find_all();
	}
	 public function count_all($title = "")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}

		if($title!=""){
	$this->db->where('master_barang.kd_barang like "%'.$title.'%"');
			$this->db->or_where('master_barang.nm_barang like "%'.$title.'%"');
		}

		$this->db->order_by('id','desc');
		return parent::count_all();
	}
	
	
}