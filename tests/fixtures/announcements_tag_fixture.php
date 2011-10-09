<?php
/* AnnouncementsTag Fixture generated on: 2011-10-09 17:35:33 : 1318152933 */
class AnnouncementsTagFixture extends CakeTestFixture {
	var $name = 'AnnouncementsTag';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'announcement_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tag_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4e916ae5-b2ac-4fb2-8944-7434ace4e26b',
			'announcement_id' => 'Lorem ipsum dolor sit amet',
			'tag_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
