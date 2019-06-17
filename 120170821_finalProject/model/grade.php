<?php

class grade {
	private $courseID;
	private $courseGrade;

	public function set_courseID ($courseID) {
		$this->courseID= $courseID;
	}

	public function get_courseID () {
		return $this->courseID;
	}

	public function set_courseGrade ($courseGrade) {
		$this->courseGrade = $courseGrade;
	}

	public function get_courseGrade () {
		return $this->courseGrade;
	}
}

?>