<?php
/* Rates Test cases generated on: 2011-10-09 19:38:38 : 1318160318*/
App::import('Controller', 'Rates');

class TestRatesController extends RatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rate');

	function startTest() {
		$this->Rates =& new TestRatesController();
		$this->Rates->constructClasses();
	}

	function endTest() {
		unset($this->Rates);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
