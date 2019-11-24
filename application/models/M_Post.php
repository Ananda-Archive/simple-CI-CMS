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
		$query = $this->db->query("SELECT * FROM post WHERE posted = 1 ORDER BY date_created");
		return $query;
	}

}

?>
