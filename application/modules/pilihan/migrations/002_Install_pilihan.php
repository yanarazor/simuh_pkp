<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_pilihan extends Migration
{
	/**
	 * @var string The name of the database table
	 */
	private $table_name = 'pilihan';

	/**
	 * @var array The table's fields
	 */
	private $fields = array(
		'id' => array(
			'type'       => 'INT',
			'constraint' => 11,
			'auto_increment' => true,
		),
        'jenis_pilihan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 100,
            'null'       => false,
        ),
        'nama_pilihan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 150,
            'null'       => false,
        ),
        'value_pilihan' => array(
            'type'       => 'VARCHAR',
            'constraint' => 150,
            'null'       => false,
        ),
        'label_pilihan' => array(
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