<?php 
/* SVN FILE: $Id$ */
/* ContactTag Fixture generated on: 2009-12-14 00:39:33 : 1260769173*/

class ContactTagFixture extends CakeTestFixture {
	var $name = 'ContactTag';
	var $table = 'contact_tags';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tag_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'contact_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'tag_id'  => 1,
		'contact_id'  => 1,
		'created'  => '2009-12-14 00:39:33',
		'modified'  => '2009-12-14 00:39:33'
	));
}
?>