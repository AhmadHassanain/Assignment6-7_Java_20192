<?php

include_once('controller/connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</head>
<body class="bg-dark">
	<div class="container w-50 h-50  mt-5 p-5 rounded border border-primary text-info">
		<div class="row">

			<?php
			$fault_alert = '<div class="col-12"><div class="alert alert-danger">Falied Login</div></div>';

			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				if (isset($_POST['user_name']) && isset($_POST['user_password'])) {
					$username = htmlspecialchars($_POST['user_name']);
					$password = htmlspecialchars($_POST['user_password']);

					$connection = DBConnection::get_instance()->get_connection();
					$sql = "SELECT * FROM s_register WHERE
					 ID = '" . $username . "' 
					 AND pass = '" . $password . "'";	

					$result = mysqli_query($connection, $sql);
					if ($result != false) {
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							session_start();
							$_SESSION["id"] = $row["id"];
							$_SESSION["username"] = $username;
							$_SESSION["logged_in"] = true;

							setcookie("username", $username, time() + (86400 * 30), "/");

							header('Location: http://localhost/120170821_finalProject/view/index.php');
						} else {
							echo $fault_alert;
						}
					} else {
						echo $fault_alert;
					}
				} else {
					echo $fault_alert;
				}
			}
			?>


			<div class="col-12">

				<form method="POST" action="">
					<div class="form-group">
						<label for="user-name">Name</label>
					    <input type="text" name="user_name" class="form-control inline-block" id="user-name" placeholder="User Name">
					</div>

					<div class="form-group ">
						<label for="user-phone">Password</label>
					    <input type="password" name="user_password" class="form-control" id="user-password" placeholder="User password">
					</div>

					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>