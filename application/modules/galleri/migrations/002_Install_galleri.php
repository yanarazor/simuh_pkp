<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_galleri extends Migration
{
	/**
	 * @var string The name of the database table
	 */
	private $table_name = 'galleri';

	/**
	 * @var array The table's fields
	 */
	private $fields = array(
		'id' => array(
			'type'       => 'INT',
			'constraint' => 11,
			'auto_increment' => true,
		),
        'nama_galleri' => array(
            'type'       => 'VARCHAR',
            'constraint' => 200,
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