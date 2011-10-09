<?php
/* Department Fixture generated on: 2011-10-09 17:35:34 : 1318152934 */
class DepartmentFixture extends CakeTestFixture {
	var $name = 'Department';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'department' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 29, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e916ae6-89c8-461d-a89a-7434ace4e26b',
			'department' => 'Lorem ipsum dolor sit amet'
		),
	);
}
