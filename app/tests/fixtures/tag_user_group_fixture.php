<?php 
/* SVN FILE: $Id$ */
/* TagUserGroup Fixture generated on: 2009-12-14 00:59:18 : 1260770358*/

class TagUserGroupFixture extends CakeTestFixture {
	var $name = 'TagUserGroup';
	var $table = 'tag_user_groups';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tag_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'user_group_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'tag_id'  => 1,
		'user_group_id'  => 1,
		'created'  => '2009-12-14 00:59:18',
		'modified'  => '2009-12-14 00:59:18'
	));
}
?>