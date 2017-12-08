<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_news extends Migration
{
	/**
	 * @var string The name of the database table
	 */
	private $table_name = 'news';

	/**
	 * @var array The table's fields
	 */
	private $fields = array(
		'id' => array(
			'type'       => 'INT',
			'constraint' => 11,
			'auto_increment' => true,
		),
        'title' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => false,
        ),
        'new_date' => array(
            'type'       => 'DATE',
            'null'       => true,
            'default'    => '0000-00-00',
        ),
        'contents' => array(
            'type'       => 'TEXT',
            'null'       => true,
        ),
        'author' => array(
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => true,
        ),
        'meta_keyword' => array(
            'type'       => 'VARCHAR',
            'constraint' => 255,
            'null'       => true,
        ),
        'scope' => array(
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => true,
        ),
        'published_news' => array(
            'type'       => 'VARCHAR',
            'constraint' => 50,
            'null'       => true,
        ),
        'created_on' => array(
            'type'       => 'datetime',
            'default'    => '0000-00-00 00:00:00',
        ),
        'created_by' => array(
            'type'       => 'BIGINT',
            'constraint' => 20,
            'null'       => false,
        ),
        'modified_on' => array(
            'type'       => 'datetime',
            'default'    => '0000-00-00 00:00:00',
        ),
        'modified_by' => array(
            'type'       => 'BIGINT',
            'constraint' => 20,
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