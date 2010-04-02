<?php 
/* SVN FILE: $Id$ */
/* ContactActivityMedium Fixture generated on: 2009-12-14 00:28:18 : 1260768498*/

class ContactActivityMediumFixture extends CakeTestFixture {
	var $name = 'ContactActivityMedium';
	var $table = 'contact_activity_media';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'medium_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'contact_activity_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'medium_id'  => 1,
		'contact_activity_id'  => 1,
		'created'  => '2009-12-14 00:28:18',
		'modified'  => '2009-12-14 00:28:18'
	));
}
?>