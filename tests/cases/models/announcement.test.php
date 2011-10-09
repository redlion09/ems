<?php
/* Announcement Test cases generated on: 2011-10-09 17:35:33 : 1318152933*/
App::import('Model', 'Announcement');

class AnnouncementTestCase extends CakeTestCase {
	var $fixtures = array('app.announcement', 'app.user', 'app.tag', 'app.announcements_tag');

	function startTest() {
		$this->Announcement =& ClassRegistry::init('Announcement');
	}

	function endTest() {
		unset($this->Announcement);
		ClassRegistry::flush();
	}

}
