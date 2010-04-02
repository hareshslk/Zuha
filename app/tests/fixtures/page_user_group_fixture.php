<?php 
/* SVN FILE: $Id$ */
/* PageUserGroup Fixture generated on: 2009-12-14 00:55:36 : 1260770136*/

class PageUserGroupFixture extends CakeTestFixture {
	var $name = 'PageUserGroup';
	var $table = 'page_user_groups';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'page_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'user_group_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'page_id'  => 1,
		'user_group_id'  => 1,
		'created'  => '2009-12-14 00:55:36',
		'modified'  => '2009-12-14 00:55:36'
	));
}
?>