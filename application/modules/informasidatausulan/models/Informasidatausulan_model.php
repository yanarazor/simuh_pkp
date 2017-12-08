<?php defined('BASEPATH') || exit('No direct script access allowed');

class Informasidatausulan_model extends BF_Model
{
    protected $table_name	= 'informasidatausulan';
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
			'field' => 'eselon',
			'label' => 'lang:informasidatausulan_field_eselon',
			'rules' => 'required|max_length[150]',
		),
		array(
			'field' => 'satker',
			'label' => 'lang:informasidatausulan_field_satker',
			'rules' => 'required|max_length[150]',
		),
		array(
			'field' => 'tgl_usulan',
			'label' => 'lang:informasidatausulan_field_tgl_usulan',
			'rules' => 'required',
		),
		array(
			'field' => 'no_surat_usulan',
			'label' => 'lang:informasidatausulan_field_no_surat_usulan',
			'rules' => 'required|max_length[100]',
		),

		array(
			'field' => 'nilai',
			'label' => 'lang:informasidatausulan_field_nilai',
			'rules' => 'required|max_length[150]',
		),
		array(
			'field' => 'tahun_perolehan',
			'label' => 'lang:informasidatausulan_field_tahun_perolehan',
			'rules' => 'required|max_length[150]',
		),
		array(
			'field' => 'no_surat_disetujui',
			'label' => 'lang:informasidatausulan_field_no_surat_disetujui',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'tgl_surat_disetujui',
			'label' => 'lang:informasidatausulan_field_tgl_surat_disetujui',
			'rules' => 'required',
		),
		array(
			'field' => 'tgl_surat_ditolak_atau_dikembalikan',
			'label' => 'lang:informasidatausulan_field_tgl_surat_ditolak_atau_dikembalikan',
			'rules' => 'required',
		),
				array(
			'field' => 'no_surat_ditolak_atau_dikembalikan',
			'label' => 'lang:informasidatausulan_field_no_surat_ditolak_atau_dikembalikan',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'no_surat_di_itjen',
			'label' => 'lang:informasidatausulan_field_no_surat_di_itjen',
			'rules' => 'max_length[100]',
		),
				array(
			'field' => 'tgl_surat_di_itjen',
			'label' => 'lang:informasidatausulan_field_tgl_surat_di_itjen',
			'rules' => 'required',
		),
		array(
			'field' => 'proses_verifikasi',
			'label' => 'lang:informasidatausulan_field_proses_verifikasi',
			'rules' => 'rmax_length[255]',
		),
		array(
			'field' => 'usulan',
			'label' => 'lang:informasidatausulan_field_usulan',
			'rules' => 'required|max_length[50]',
		),
		array(
			'field' => 'keterangan',
			'label' => 'lang:informasidatausulan_field_keterangan',
			'rules' => 'max_length[255]',
		),
		array(
			'field' => 'status',
			'label' => 'lang:informasidatausulan_field_status',
			'rules' => 'required|max_length[50]',
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



	 public function find_all($eselon="")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*,sly_eselon.nama_eselon');
		}

		
		$this->db->join('sly_eselon', 'sly_eselon.kode_eselon = informasidatausulan.eselon');
	//	$this->db->join('sly_satker', 'sly_satker.kode_satker = informasidatausulan.satker');
		
		if($eselon!=""){

		//	$this->db->where('master_barang.kd_barang like "%'.$title.'%"');
		//	$this->db->or_where('master_barang.nm_barang like "%'.$title.'%"');
		}

	//	if($satker!=""){
	//	$this->db->join('comments', 'comments.id = blogs.id');
//			$this->db->where('master_barang.kd_barang like "%'.$title.'%"');
//			$this->db->or_where('master_barang.nm_barang like "%'.$title.'%"');
//		}

		$this->db->order_by('id','desc');
		return parent::find_all();
	}


	public function getcountbyeselon()
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.eselon,count(eselon) as Jumlah, sly_eselon.nama_eselon');
		}
		$this->db->join('eselon', 'eselon.kode_eselon = informasidatausulan.eselon');
		$this->db->group_by('eselon');   
		  
		return parent::find_all();
	}

	public function countselesai($eselon)
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'*');
		}

		$this->db->where('eselon',$eselon);
		$this->db->where('status','selesai');
	//	$this->db->group_by('eselon');   
		  
		return parent::count_all();
	}

	public function countdisetujui($eselon)
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'*');
		}

		$this->db->where('eselon',$eselon);
			$this->db->where('status like "% Disetujui %"');
//		$this->db->where('status','Disetujui');
	//	$this->db->group_by('eselon');   
		  
		return parent::count_all();
	}


	public function countditolak($eselon)
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'*');
		}

		$this->db->where('eselon',$eselon);
		$this->db->where('status','Di Tolak / Di Kembalikan');
	//	$this->db->group_by('eselon');   
		  
		return parent::count_all();
	}

	public function countdiitjen($eselon)
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'*');
		}

		$this->db->where('eselon',$eselon);
		$this->db->where('status','Di Inspektorat');
	//	$this->db->group_by('eselon');   
		  
		return parent::count_all();
	}

	public function countbelumdiverifikasi($eselon)
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'*');
		}

		$this->db->where('eselon',$eselon);
		$this->db->where('status','');
	//	$this->db->group_by('eselon');   
		  
		return parent::count_all();
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