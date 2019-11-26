<?php

class Pages extends CI_Controller {

	public function login() {
		$this->load->view("template/head.php");
		$this->load->view("Login");
	}

	public function user() {
		$this->load->view("template/navbar");
		$this->load->view("template/head.php");
		$this->load->view("user");
	}

	public function view_post($id) {
		$a['data'] = $this->m_post->get_posted($id);
		$this->load->view("template/navbar");
		$this->load->view("template/head.php");
		$this->load->view("View_Post",$a);
	}

	public function profile() {
		$id = $this->session->userdata('id');
		$this->load->view("template/navbar");
		$this->load->view("template/head.php");
		$this->load->view("user/profile");
	}

}

?>
