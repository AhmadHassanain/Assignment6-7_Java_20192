<?php
include_once('connection.php');
$status = array("status" => false , "message" => "");
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	if (isset($_POST['ID']) && isset($_POST['name']) && isset($_POST['address'])
	 && isset($_POST['Password']) && isset($_POST['phone'])) {
		
		$name = $_POST['name'];
		$ID = $_POST['ID'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$pass = $_POST['Password'];

		if (!empty($name)&& !empty($ID) && !empty($address)  && !empty($pass) && !empty($phone)) {
			$query = "INSERT INTO s_register (name, ID, phone,pass,address) VALUES ('$name', '$ID', '$phone','md5($pass)', '$address'";
			$connection = DBConnection::get_instance()->get_connection();
			
			$result = mysqli_query($connection, $query);

			if ($result != false) {
				$status["status"] = true;
				$status["message"] = "Added Successfully";
				echo json_encode($status);
			} else {
				$status["message"] = "Internal Server Error";
				echo json_encode($status);
			}
		} else {
			$status["message"] = "Some Data are Missing";
			echo json_encode($status);
		}
	} else {
		$status["message"] = "Some Data are Missing";
		echo json_encode($status);
	}
} /*else {
	$status["message"] = "Method is not Allowed";
	echo json_encode($status);
}*/
?>
