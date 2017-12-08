<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_datausulan extends Migration
{
	/**
	 * @var string The name of the database table
	 */
	private $table_name = 'datausulan';

	/**
	 * @var array The table's fields
	 */
	private $fields = array(
		'id' => array(
			'type'       => 'INT',
			'constraint' => 11,
			'auto_increment' => true,
		),
        'kode_eselon' => array(
            'type'       => 'VARCHAR',
            'constraint' => 25,
            'null'       => false,
        ),
        'kode_satker' => array(
            'type'       => 'VARCHAR',
            'constraint' => 25,
            'null'       => false,
        ),
        'no_surat_usulan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => false,
        ),
        'tgl_usulan' => array(
            'type'       => 'DATE',
            'null'       => false,
            'default'    => '0000-00-00',
        ),
        'kategori_usulan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
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