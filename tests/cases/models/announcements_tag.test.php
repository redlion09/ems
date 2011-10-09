<?php
/* AnnouncementsTag Test cases generated on: 2011-10-09 17:35:33 : 1318152933*/
App::import('Model', 'AnnouncementsTag');

class AnnouncementsTagTestCase extends CakeTestCase {
	var $fixtures = array('app.announcements_tag', 'app.announcement', 'app.user', 'app.tag');

	function startTest() {
		$this->AnnouncementsTag =& ClassRegistry::init('AnnouncementsTag');
	}

	function endTest() {
		unset($this->AnnouncementsTag);
		ClassRegistry::flush();
	}

}
