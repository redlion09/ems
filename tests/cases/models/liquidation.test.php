<?php
/* Liquidation Test cases generated on: 2011-10-09 17:35:34 : 1318152934*/
App::import('Model', 'Liquidation');

class LiquidationTestCase extends CakeTestCase {
	var $fixtures = array('app.liquidation', 'app.user', 'app.location', 'app.report');

	function startTest() {
		$this->Liquidation =& ClassRegistry::init('Liquidation');
	}

	function endTest() {
		unset($this->Liquidation);
		ClassRegistry::flush();
	}

}
