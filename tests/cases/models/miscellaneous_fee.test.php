<?php
/* MiscellaneousFee Test cases generated on: 2011-10-09 17:35:35 : 1318152935*/
App::import('Model', 'MiscellaneousFee');

class MiscellaneousFeeTestCase extends CakeTestCase {
	var $fixtures = array('app.miscellaneous_fee', 'app.report');

	function startTest() {
		$this->MiscellaneousFee =& ClassRegistry::init('MiscellaneousFee');
	}

	function endTest() {
		unset($this->MiscellaneousFee);
		ClassRegistry::flush();
	}

}
