<?php 
/* SVN FILE: $Id$ */
/* ContactRelationship Fixture generated on: 2009-12-19 14:49:47 : 1261252187*/

class ContactRelationshipFixture extends CakeTestFixture {
	var $name = 'ContactRelationship';
	var $table = 'contact_relationships';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'contact_relationship_type_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'contact_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'related_contact_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'creator_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'modifier_id' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'contact_relationship_type_id'  => 1,
		'contact_id'  => 1,
		'related_contact_id'  => 1,
		'creator_id'  => 1,
		'modifier_id'  => 1,
		'created'  => '2009-12-19 14:49:47',
		'modified'  => '2009-12-19 14:49:47'
	));
}
?>