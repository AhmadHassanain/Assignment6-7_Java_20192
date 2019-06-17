<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

} else {
    header('Location: http://localhost/120170821_finalProject/login.php');
}
include_once('../model/grade.php');
include_once('../model/course.php');

include_once('../model/coues.php');
include_once('connection.php');
include_once('../view/tables.php');

class controller {

	public static function get_course () {
		$connection = DBConnection::get_instance()->get_connection();

		$query = "SELECT * FROM studenttimetable";
		$result = mysqli_query($connection, $query);

		$courses = array();

		if ($result != false) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$course = new course();
					$course->set_courseID($row["courseID"]);
					$course->set_section($row["section"]);
					$course->set_instructor($row["instructor"]);
					$course->set_ctime($row["ctime"]);
					$course->set_room($row["room"]);
					array_push($courses, $course);
				}
			}
		}

		return new Table_course($courses);
	}

	public static function get_grade () {
		$connection = DBConnection::get_instance()->get_connection();

		$query = "SELECT * FROM studentGrade";
		$result = mysqli_query($connection, $query);

		$grades = array();

		if ($result != false) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$grade = new grade();
					$grade->set_courseID($row["courseID"]);
					$grade->set_courseGrade($row["courseGrade"]);
					array_push($grades, $grade);
				}
			}
		}

		return new Table_grade($grades);
	}

   public static function get_course_currnt_semester(){
     $connection = DBConnection::get_instance()->get_connection();

   $query='select * from course WHERE course.semester=2';
    
		$result = mysqli_query($connection, $query);

		$courses = array();

		if ($result != false) {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$course = new couse();
					$course->set_courseID($row["ID"]);
					$course->set_courseName($row["name"]);
					
					array_push($courses, $course);
				}
			}
		}

		return new table_view_course($courses);
	}
   
	

}