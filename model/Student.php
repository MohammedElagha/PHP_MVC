<?php

class Student {
	private $id;
	private $name;
	private $phone;
	private $email;

	public function set_id ($id) {
		$this->id = $id;
	}

	public function get_id () {
		return $this->id;
	}

	public function set_name ($name) {
		$this->name = $name;
	}

	public function get_name () {
		return $this->name;
	}

	public function set_phone ($phone) {
		$this->phone = $phone;
	}

	public function get_phone () {
		return $this->phone;
	}

	public function set_email ($email) {
		$this->email = $email;
	}

	public function get_email () {
		return $this->email;
	}
}

?>