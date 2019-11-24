<?php

class Home extends CI_Controller {

	public function index() {
		$a['data'] = $this->m_post->read_posted();
		$this->load->view("template/navbar");
		$this->load->view("template/head.php");
		$this->load->view("home",$a);
	}

}

?>
