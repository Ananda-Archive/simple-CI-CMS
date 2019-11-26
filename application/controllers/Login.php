<?php

class Login extends CI_Controller {

	public function index() {
		$this->load->view("template/head.php");
		$this->load->view("Login");
	}

	public function userlogin() {
		$post = $this->input->post();
		$email = $post['emailLogin'];
		$pass = $post['passLogin'];
		$validate = $this->m_user->validate_login($email,$pass);
		if($validate->num_rows() > 0) {
			$data = $validate->row_array();
			$data_session = array(
				'id' => $data['id'],
				'name' => $data['name'],
				'email' => $data['email'],
				'pass' => $data['password']
			);
			$this->session->set_userdata($data_session);
			redirect('profile');
		} else {
			$this->session->set_flashdata('login_error','Username or Password is Wrong');
			redirect('login');
		}
	}

	public function uselogout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

?>
