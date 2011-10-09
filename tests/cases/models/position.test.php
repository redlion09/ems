<?php
/* Position Test cases generated on: 2011-10-09 17:35:36 : 1318152936*/
App::import('Model', 'Position');

class PositionTestCase extends CakeTestCase {
	var $fixtures = array('app.position', 'app.user');

	function startTest() {
		$this->Position =& ClassRegistry::init('Position');
	}

	function endTest() {
		unset($this->Position);
		ClassRegistry::flush();
	}

}
