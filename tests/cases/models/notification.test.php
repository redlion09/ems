<?php
/* Notification Test cases generated on: 2011-10-09 17:35:36 : 1318152936*/
App::import('Model', 'Notification');

class NotificationTestCase extends CakeTestCase {
	var $fixtures = array('app.notification', 'app.user', 'app.group');

	function startTest() {
		$this->Notification =& ClassRegistry::init('Notification');
	}

	function endTest() {
		unset($this->Notification);
		ClassRegistry::flush();
	}

}
