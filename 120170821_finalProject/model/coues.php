<?php
class coues{
private $courseID;
	private $courseName;
	public function set_courseID ($courseID) {
		$this->courseID = $courseID;
	}

	public function get_courseID () {
		return $this->courseID;
	}
    
    public function set_courseName ($courseName) {
		$this->courseName = $courseName;
	}

	public function get_courseName () {
		return $this->courseName;
	}
}
?>