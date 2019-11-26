<?php

class M_User extends CI_Model {

	private $id;
	private $name;
	private $email;
	private $password;

	public function validate_login($email,$pass) {
		return $this->db->query("SELECT * FROM user WHERE email ='".$email."' AND password ='".$pass."'");
	}

}

?>
