<?php defined('BASEPATH') || exit('No direct script access allowed');

class News_model extends BF_Model
{
    protected $table_name	= 'news';
	protected $key			= 'id';
	protected $date_format	= 'datetime';

	protected $log_user 	= true;
	protected $set_created	= true;
	protected $set_modified = true;
	protected $soft_deletes	= false;

	protected $created_field     = 'created_on';
    protected $created_by_field  = 'created_by';
	protected $modified_field    = 'modified_on';
    protected $modified_by_field = 'modified_by';

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
			'field' => 'title',
			'label' => 'lang:news_field_title',
			'rules' => 'required|max_length[255]',
		),
		array(
			'field' => 'new_date',
			'label' => 'lang:news_field_new_date',
			'rules' => '',
		),
		array(
			'field' => 'contents',
			'label' => 'lang:news_field_contents',
			'rules' => '',
		),
		array(
			'field' => 'author',
			'label' => 'lang:news_field_author',
			'rules' => 'max_length[50]',
		),
		array(
			'field' => 'meta_keyword',
			'label' => 'lang:news_field_meta_keyword',
			'rules' => 'max_length[255]',
		),
		array(
			'field' => 'scope',
			'label' => 'lang:news_field_scope',
			'rules' => 'max_length[50]',
		),
		array(
			'field' => 'published_news',
			'label' => 'lang:news_field_published_news',
			'rules' => 'max_length[50]',
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
}