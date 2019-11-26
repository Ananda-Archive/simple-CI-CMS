<?php

class M_Post extends CI_Model {

	private $table_post = 'post';
	public $id;
	public $title;
	public $content;
	public $posted;
	public $userid;
	public $date_created;
	public $date_updated;

	public function read_posted() {
		return $this->db->query("SELECT * FROM post WHERE posted = 1 ORDER BY date_created DESC");
	}

	public function get_posted($id) {
		return $this->db->query("SELECT * FROM post WHERE id = '".$id."'");
	}

	public function read_all_post($id) {
		return $this->db->query("SELECT * FROM post WHERE userid = '".$id."' ORDER BY date_updated");
	}

	public function add() {
		$post = $this->input->post();
		$this->load->helper('date');
		$this->title = $post['create-post-title'];
		$this->content = $post['create-post-desc'];
		$this->posted = 1;
		$this->userid = $this->session->userdata('id');
		$this->date_created = mdate("%Y-%m-%d %H:%i:%s", now());
		$this->date_updated = mdate("%Y-%m-%d %H:%i:%s", now());
		$this->db->insert($this->table_post, $this);
	}

}

?>
