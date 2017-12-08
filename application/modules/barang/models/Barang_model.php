<?php defined('BASEPATH') || exit('No direct script access allowed');

class Barang_model extends BF_Model
{
    protected $table_name	= 'barang';
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
			'field' => 'nomor_usulan',
			'label' => 'lang:barang_field_nomor_usulan',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'kode_barang',
			'label' => 'lang:barang_field_kode_barang',
			'rules' => 'max_length[255]',
		),

		array(
			'field' => 'nama_barang',
			'label' => 'lang:barang_field_nama_barang',
			'rules' => 'max_length[255]',
		),
		array(
			'field' => 'merek',
			'label' => 'lang:barang_field_merek',
			'rules' => 'max_length[100]',
		),
		array(
			'field' => 'nup',
			'label' => 'lang:barang_field_nup',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'tahun_perolehan',
			'label' => 'lang:barang_field_tahun_perolehan',
			'rules' => 'max_length[4]',
		),
		array(
			'field' => 'luar',
			'label' => 'lang:barang_field_luar',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'satuan_luas',
			'label' => 'lang:barang_field_satuan_luas',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'jumlah',
			'label' => 'lang:barang_field_jumlah',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'satuan_jumlah',
			'label' => 'lang:barang_field_satuan_jumlah',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'harga_satuan',
			'label' => 'lang:barang_field_harga_satuan',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'nilai_perolehan',
			'label' => 'lang:barang_field_nilai_perolehan',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'nilai_buku',
			'label' => 'lang:barang_field_nilai_buku',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'kondisi',
			'label' => 'lang:barang_field_kondisi',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'sertifikat',
			'label' => 'lang:barang_field_sertifikat',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'imb',
			'label' => 'lang:barang_field_imb',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'stnk',
			'label' => 'lang:barang_field_stnk',
			'rules' => '',
		),
		array(
			'field' => 'kib',
			'label' => 'lang:barang_field_kib',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'bast',
			'label' => 'lang:barang_field_bast',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'kontrak',
			'label' => 'lang:barang_field_kontrak',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'dipa',
			'label' => 'lang:barang_field_dipa',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'foto',
			'label' => 'lang:barang_field_foto',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'lainnya',
			'label' => 'lang:barang_field_lainnya',
			'rules' => 'max_length[5]',
		),
	
		array(
			'field' => 'sptjmtb',
			'label' => 'lang:barang_field_sptjmtb',
			'rules' => 'max_length[5]',
		),
		
		array(
			'field' => 'calon_penerima_hibah',
			'label' => 'lang:barang_field_calon_penerima_hibah',
			'rules' => 'max_length[5]',
		),
		
		array(
			'field' => 'kesediaan_hibah',
			'label' => 'lang:barang_field_kesediaan_hibah',
			'rules' => 'max_length[5]',
		),
		
		array(
			'field' => 'kesediaan_terima_hibah',
			'label' => 'lang:barang_field_kesediaan_terima_hibah',
			'rules' => 'max_length[5]',
		),
		
		array(
			'field' => 'sktiminternal',
			'label' => 'lang:barang_field_sktiminternal',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'laporantiminternal',
			'label' => 'lang:barang_field_laporantiminternal',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'bahasilpenelitian',
			'label' => 'lang:barang_field_bahasilpenelitian',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'bpkb',
			'label' => 'lang:barang_field_bpkb',
			'rules' => 'max_length[5]',
		),
		array(
			'field' => 'keterangan',
			'label' => 'lang:barang_field_keterangan',
			'rules' => '',
		),
	);
	protected $insert_validation_rules  = array();
	protected $skip_validation 			= true;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function find_all($nomor_usulan = "")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}
		if($nomor_usulan != ""){
			$this->db->where('nomor_usulan',$nomor_usulan);
		}
		return parent::find_all();
	}
	
	
	public function find_all_barang($nomor_usulan = "")
	{
		if(empty($this->selects))
		{
			$this->select($this->table_name .'.*');
		}

		if($nomor_usulan != ""){
			$this->db->where('nomor_usulan',$nomor_usulan);
		}
		return parent::find_all();
	}
	
	
	
	public function countverfikasi($nomor_usulan ="")
	{
		if(empty($this->selects))
		{
			$this->select('count(*) as jmlterverifikasi as jumlah');
		}
		 
		if($nomor_usulan != ""){
			$this->db->where('nomor_usulan',$nomor_usulan);
		}
	 	$this->db->where('status_barang like 0');
		return parent::count_all();
	}
}