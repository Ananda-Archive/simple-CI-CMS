<?php

class Pages extends CI_Controller {

	public function login() {
		$this->load->view("template/head.php");
		$this->load->view("login");
	}

	public function user() {
		$this->load->view("template/navbar");
		$this->load->view("template/head.php");
		$this->load->view("user");
	}

	public function view_post($id) {

		$this->load->view("template/navbar");
		$this->load->view("template/head.php");
	}

}

?>
