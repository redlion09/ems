<?php
/* Report Fixture generated on: 2011-10-09 17:35:37 : 1318152937 */
class ReportFixture extends CakeTestFixture {
	var $name = 'Report';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'day' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 9, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'breakfast' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'lunch' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'dinner' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'liquidation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e916ae9-0b60-498c-85ad-7434ace4e26b',
			'day' => 'Lorem i',
			'date' => '2011-10-09',
			'breakfast' => 1,
			'lunch' => 1,
			'dinner' => 1,
			'user_id' => 1,
			'liquidation_id' => 1
		),
	);
}
