<?php
/* Tag Test cases generated on: 2011-10-09 17:35:37 : 1318152937*/
App::import('Model', 'Tag');

class TagTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.announcement', 'app.user', 'app.announcements_tag');

	function startTest() {
		$this->Tag =& ClassRegistry::init('Tag');
	}

	function endTest() {
		unset($this->Tag);
		ClassRegistry::flush();
	}

}
