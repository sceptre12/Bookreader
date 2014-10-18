<?php
	class User{

		function createUser($username, $password, $email, $location){
			$con = mysqli_connect("localhost", "root", "blackbox0", "BookDealer", "3306");

			$sql = "INSERT INTO users(username, password, email, location) VALUES ('$username', '$password', '$email', '$location')";
			mysqli_query($con, $sql);

			mysqli_close($con);
		}

		function deleteUser($id){
			$con = mysqli_connect("localhost", "root", "blackbox0", "BookDealer");

			$sql = "DELETE FROM users WHERE user_id = '$id'";

			mysqli_query($con, $sql);

			mysqli_close($con);
		}
	}
?>
