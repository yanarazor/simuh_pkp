<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_barang extends Migration
{
	/**
	 * @var string The name of the database table
	 */
	private $table_name = 'barang';

	/**
	 * @var array The table's fields
	 */
	private $fields = array(
		'id' => array(
			'type'       => 'INT',
			'constraint' => 11,
			'auto_increment' => true,
		),
        'nomor_usulan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 10,
            'null'       => true,
        ),
        'nama_barang' => array(
            'type'       => 'VARCHAR',
            'constraint' => 200,
            'null'       => true,
        ),
        'merek' => array(
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => true,
        ),
        'nup' => array(
            'type'       => 'VARCHAR',
            'constraint' => 20,
            'null'       => true,
        ),
        'tahun_perolehan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 4,
            'null'       => true,
        ),
        'luar' => array(
            'type'       => 'VARCHAR',
            'constraint' => 10,
            'null'       => true,
        ),
        'satuan_luas' => array(
            'type'       => 'VARCHAR',
            'constraint' => 10,
            'null'       => true,
        ),
        'jumlah' => array(
            'type'       => 'VARCHAR',
            'constraint' => 20,
            'null'       => true,
        ),
        'satuan_jumlah' => array(
            'type'       => 'VARCHAR',
            'constraint' => 20,
            'null'       => true,
        ),
        'harga_satuan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 10,
            'null'       => true,
        ),
        'nilai_perolehan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 10,
            'null'       => true,
        ),
        'nilai_buku' => array(
            'type'       => 'VARCHAR',
            'constraint' => 10,
            'null'       => true,
        ),
        'kondisi' => array(
            'type'       => 'VARCHAR',
            'constraint' => 20,
            'null'       => true,
        ),
        'sertifikat' => array(
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'imb' => array(
            'type'       => 'CHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'stnk' => array(
            'type'       => 'BIGINT',
            'null'       => true,
        ),
        'kib' => array(
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'bast' => array(
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'kontrak' => array(
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'dipa' => array(
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'foto' => array(
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'lainnya' => array(
            'type'       => 'VARCHAR',
            'constraint' => 5,
            'null'       => true,
        ),
        'keterangan' => array(
            'type'       => 'TEXT',
            'null'       => true,
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