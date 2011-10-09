<?php
/* User Test cases generated on: 2011-10-09 17:35:39 : 1318152939*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
