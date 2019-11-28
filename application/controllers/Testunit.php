<?php

class Testunit extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("unit_test");
	}

	private function testOne ($a,$b) {
		return $a*$b;
	}

	public function index() {
		echo "Testing";
		$test = $this->testOne(3,2);
		$expected_result = 6;
		$name = "testOne result";
		echo $this->unit->run($test,$expected_result,$name);
	}

}

?>
