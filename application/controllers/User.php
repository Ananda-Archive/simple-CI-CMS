<?php

class User extends CI_Controller {

    public function index() {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('user/Create_Post');
    }

    public function create_post() {
        $this->form_validation->set_rules('create-post-title','Post Title','required|min_length[4]|max_length[50]');
        
        if ($this->form_validation->run() == FALSE) {
            redirect('user');
        } else {
            $this->m_post->add();
            redirect('profile');
        }
    }

}

?>