<?php defined('SYSPATH') or die('No direct script access.');

/**
* Comments Table Model
*/

class Comment_Model extends ORM
{
	protected $has_many = array('rating');
	
	// Database table name
	protected $table_name = 'comment';
}