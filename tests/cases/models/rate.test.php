<?php
/* Rate Test cases generated on: 2011-10-09 17:35:36 : 1318152936*/
App::import('Model', 'Rate');

class RateTestCase extends CakeTestCase {
	var $fixtures = array('app.rate');

	function startTest() {
		$this->Rate =& ClassRegistry::init('Rate');
	}

	function endTest() {
		unset($this->Rate);
		ClassRegistry::flush();
	}

}
