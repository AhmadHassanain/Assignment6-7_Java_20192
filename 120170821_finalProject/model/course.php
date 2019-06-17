<?php

class course {
	private $courseID;
	private $instructor;
	private $ctime;
	private $room;
	private $section;

	public function set_courseID ($courseID) {
		$this->courseID = $courseID;
	}

	public function get_courseID () {
		return $this->courseID;
	}
    
	public function set_instructor ($instructor) {
		$this->instructor = $instructor;
	}

	public function get_instructor () {
		return $this->instructor;
	}
	public function set_ctime ($ctime) {
		$this->ctime = $ctime;
	}

	public function get_ctime () {
		return $this->ctime;
	}
	public function set_room ($room) {
		$this->room = $room;
	}

	public function get_room () {
		return $this->room;
	}
	public function set_section ($section) {
		$this->section = $section;
	}

	public function get_section () {
		return $this->section;
	}

}

?>