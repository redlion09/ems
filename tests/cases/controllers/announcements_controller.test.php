<?php
/* Announcements Test cases generated on: 2011-10-09 19:38:38 : 1318160318*/
App::import('Controller', 'Announcements');

class TestAnnouncementsController extends AnnouncementsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnnouncementsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.announcement', 'app.user', 'app.position', 'app.department', 'app.group', 'app.notification', 'app.liquidation', 'app.location', 'app.report', 'app.miscellaneous_fee', 'app.transportation', 'app.tag', 'app.announcements_tag');

	function startTest() {
		$this->Announcements =& new TestAnnouncementsController();
		$this->Announcements->constructClasses();
	}

	function endTest() {
		unset($this->Announcements);
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
