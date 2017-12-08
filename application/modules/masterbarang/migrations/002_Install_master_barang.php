<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_master_barang extends Migration
{
	/**
	 * @var string The name of the database table
	 */
	private $table_name = 'master_barang';

	/**
	 * @var array The table's fields
	 */
	private $fields = array(
		'id' => array(
			'type'       => 'INT',
			'constraint' => 11,
			'auto_increment' => true,
		),
        'kd_barang' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => false,
        ),
        'nm_barang' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => false,
        ),
        'type' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => true,
        ),
        'Spesifikasi' => array(
            'type'       => 'TEXT',
            'null'       => true,
        ),
        'stok' => array(
            'type'       => 'INT',
            'constraint' => 5,
            'null'       => true,
        ),
        'satuan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => true,
        ),
        'keterangan' => array(
            'type'       => 'BIGINT',
            'null'       => true,
        ),
        'kd_kategori' => array(
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => true,
        ),
        'tahun' => array(
            'type'       => 'VARCHAR',
            'constraint' => 4,
            'null'       => true,
        ),
        'aktif' => array(
            'type'       => 'BOOLEAN',
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