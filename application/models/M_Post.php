<?php

class M_Post extends CI_Model {

	private $id;
	private $title;
	private $content;
	private $posted;
	private $userid;
	private $date_created;
	private $date_updated;

	public function read_posted() {
		return $this->db->query("SELECT * FROM post WHERE posted = 1 ORDER BY date_created");
	}

	public function get_posted($id) {
		return $this->db->query("SELECT * FROM post WHERE id = '".$id."'");
	}

	public function read_all_post($id) {
		return $this->db->query("SELECT * FROM post WHERE userid = '".$id."' ORDER BY date_updated");
	}

}

?>
