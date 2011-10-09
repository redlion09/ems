<?php
/* Location Fixture generated on: 2011-10-09 17:35:35 : 1318152935 */
class LocationFixture extends CakeTestFixture {
	var $name = 'Location';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'class' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'region' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e916ae7-9f04-4eef-b76a-7434ace4e26b',
			'location' => 'Lorem ipsum dolor sit amet',
			'class' => 'Lorem ipsum dolor sit ame',
			'region' => 'Lorem '
		),
	);
}
