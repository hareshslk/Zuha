<?php
class ProjectIssuePriorityType extends AppModel {

	var $name = 'ProjectIssuePriorityType';
	var $validate = array(
		'name' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'ProjectIssue' => array(
			'className' => 'ProjectIssue',
			'foreignKey' => 'project_issue_priority_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>