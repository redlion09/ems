<?php
/* Liquidation Fixture generated on: 2011-10-09 17:35:34 : 1318152934 */
class LiquidationFixture extends CakeTestFixture {
	var $name = 'Liquidation';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lodging' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '6,2'),
		'total' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '7,2'),
		'isAccepted' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e916ae6-ef30-4d40-9f0f-7434ace4e26b',
			'lodging' => 1,
			'total' => 1,
			'isAccepted' => 1,
			'user_id' => 1,
			'location_id' => 1
		),
	);
}
