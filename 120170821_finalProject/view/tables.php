<?php
class Table_course {
	private $courses;

	public function __construct ($courses) {
		$this->courses = $courses;
	}

	public function render () {
		foreach ($this->courses as $key => $course) {
			echo '<tr>
				<td>'.$course->get_courseID().'</td>
				<td>'.$course->get_section().'</td>
				<td>'.$course->get_instructor().'</td>
				<td>'.$course->get_ctime().'</td>
				<td>'.$course->get_room().'</td>
			</tr>';
		}
	}
}
class Table_grade {
	private $Grades;

	public function __construct ($Grades) {
		$this->Grades = $Grades;
	}

	public function render () {
		foreach ($this->Grades as $key => $Grade) {
			echo '<tr>
				<td>'.$Grade->get_courseID().'</td>
				<td>'.$Grade->get_courseGrade().'</td>
			
			
			</tr>';
		}
	}
}


/**
 * 
 */
class table_view_course 
{
	private $courses;
	function __construct($courses)
	{
		$this->courses=$courses;
	}

		public function render () {
		foreach ($this->Grades as $key => $Grade) {
			echo '<tr>
				<td>'.$Grade->get_courseID().'</td>
				<td>'.$Grade->get_courseGrade().'</td>
			
			
			</tr>';
		}
	}   
                    
            
                       
}
?>