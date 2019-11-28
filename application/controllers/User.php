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
            $this->m_post->delete($this->input->post('create-post-id'));
            redirect('user');
        } else {
            // 	// $this->load->helper('date');
	// 	// $this->title = $post['create-post-title'];
	// 	// $this->content = $post['create-post-desc'];
	// 	// $this->posted = 1;
	// 	// $this->userid = $this->session->userdata('id');
	// 	// $this->date_created = mdate("%Y-%m-%d %H:%i:%s", now());
	// 	// $this->date_updated = mdate("%Y-%m-%d %H:%i:%s", now());
            $post = $this->input->post();
            $id = $post['create-post-id'];
            $this->load->helper('date');
            $data = array(
                'id' => $id,
                'title' => $post['create-post-title'],
                'content' => $post['create-post-desc'],
                'posted' => 1,
                'date_created' => mdate("%Y-%m-%d %H:%i:%s", now()),
                'date_updated' => mdate("%Y-%m-%d %H:%i:%s", now())
            );
            $this->m_post->update($data,$id);
            $this->load->library('twitteroauth');
            $this->load->config('twitter');
            $consumer = $this->config->item('twitter_consumer_token');
            $consumer_secret = $this->config->item('twitter_consumer_secret');
            $access_token = $this->config->item('twitter_access_token');
            $access_token_secret = $this->config->item('twitter_access_secret');
            $connection = $this->twitteroauth->create($consumer, $consumer_secret, $access_token, $access_token_secret);
            $connection->post("statuses/update", ["status" => "This is Header: ".$post['create-post-title']."\nThis is Content: ".$post['create-post-desc']]);

            redirect('profile');
        }
    }

    public function auto_save() {
        $post = $this->input->post();

        if ($post['post_id'] == '') {
            echo $this->m_post->add_autosave();
        } else {
            $id = $post['post_id'];
            $data = array(
                'title' => $post['post_title'],
                'content' => $post['post_content']
            );
            $this->m_post->update($data,$id);
        }
    }

}

?>