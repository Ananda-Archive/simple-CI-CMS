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
		return $this->db->query("SELECT * FROM post WHERE userid = '".$id."' ORDER BY date_updated DESC");
	}

	// public function add() {
	// 	$post = $this->input->post();
	// 	// $this->load->helper('date');
	// 	// $this->title = $post['create-post-title'];
	// 	// $this->content = $post['create-post-desc'];
	// 	// $this->posted = 1;
	// 	// $this->userid = $this->session->userdata('id');
	// 	// $this->date_created = mdate("%Y-%m-%d %H:%i:%s", now());
	// 	// $this->date_updated = mdate("%Y-%m-%d %H:%i:%s", now());
	// 	// $this->db->insert($this->table_post, $this);
	// 	$data = array (

	// 	)
	// }

	public function add_autosave() {
		$post = $this->input->post();
		$data = array(
			'title' => $post['post_title'],
			'content' => $post['post_content'],
			'userid' => $this->session->userdata('id')
		);
		$this->db->insert($this->table_post, $data);
		return $this->db->insert_id();
	}

	public function update($data,$id) {
		$this->db->where('id',$id);
		return $this->db->update($this->table_post,$data);
	}

	public function delete($id) {
		$this->db->where('id',$id);
		return $this->db->delete($this->table_post);
	}

}

?>
