<?php
/* MiscellaneousFee Fixture generated on: 2011-10-09 17:35:35 : 1318152935 */
class MiscellaneousFeeFixture extends CakeTestFixture {
	var $name = 'MiscellaneousFee';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2'),
		'report_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e916ae7-5160-4d88-80be-7434ace4e26b',
			'description' => 'Lorem ipsum dolor sit amet',
			'amount' => 1,
			'report_id' => 1
		),
	);
}
