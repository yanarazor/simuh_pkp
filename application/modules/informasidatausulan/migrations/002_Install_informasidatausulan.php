<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_informasidatausulan extends Migration
{
	/**
	 * @var string The name of the database table
	 */
	private $table_name = 'informasidatausulan';

	/**
	 * @var array The table's fields
	 */
	private $fields = array(
		'id' => array(
			'type'       => 'INT',
			'constraint' => 11,
			'auto_increment' => true,
		),
		'eselon' => array(
            'type'       => 'VARCHAR',
            'constraint' => 150,
            'null'       => false,
        ),
        'satker' => array(
            'type'       => 'VARCHAR',
            'constraint' => 150,
            'null'       => false,
        ),
        'tgl_usulan' => array(
            'type'       => 'DATE',
            'null'       => false,
            'default'    => '0000-00-00',
        ),
        'no_surat_usulan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => false,
        ),
        'nilai' => array(
            'type'       => 'VARCHAR',
            'constraint' => 150,
            'null'       => false,
        ),
        'nilai' => array(
            'type'       => 'tahun_perolehan',
            'constraint' => 150,
            'null'       => false,
        ),
        'no_surat_disetujui' => array(
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => false,
        ),
        'tgl_surat_disetujui' => array(
            'type'       => 'DATE',
            'null'       => false,
            'default'    => '0000-00-00',
        ),
        'tgl_surat_ditolak_atau_dikembalikan' => array(
            'type'       => 'DATE',
            'null'       => false,
            'default'    => '0000-00-00',
        ),
        'no_surat_ditolak_atau_dikembalikan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => false,
        ),
        'no_surat_di_itjen' => array(
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => false,
        ),
        'usulan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => false,
        ),
        'keterangan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => false,
        ),
        'status' => array(
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => false,
        ),
	);

	/**
	 * Install this version
	 *
	 * @return void
	 */
	public function up()
	{
		$this->dbforge->add_field($this->fields);
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table($this->table_name);
	}

	/**
	 * Uninstall this version
	 *
	 * @return void
	 */
	public function down()
	{
		$this->dbforge->drop_table($this->table_name);
	}
}