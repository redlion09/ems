<?php
/* Reports Test cases generated on: 2011-10-09 19:38:38 : 1318160318*/
App::import('Controller', 'Reports');

class TestReportsController extends ReportsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReportsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.report', 'app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.announcement', 'app.tag', 'app.announcements_tag', 'app.liquidation', 'app.location', 'app.miscellaneous_fee', 'app.transportation');

	function startTest() {
		$this->Reports =& new TestReportsController();
		$this->Reports->constructClasses();
	}

	function endTest() {
		unset($this->Reports);
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
