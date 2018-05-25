<?php
	require_once("config.php");
	class Database {
		public function registerUser($username, $firstname, $lastname, $email, $password, $gender, $mobile, $designation, $image){
			$connection_db = new connection_db();
			$connection_db->set_connection();
			$insertQuery = "INSERT INTO user_info(username, firstname, lastname, email, password, gender, mobile, designation, image)
				VALUES('$username', '$firstname', '$lastname', '$email', '$password',
				'$gender', '$mobile', '$designation', '$image')";
			return mysqli_query($connection_db->conn, $insertQuery);
		}
		public function loginUser($user_name,$password){
			$connection_db = new connection_db();
			$connection_db->set_connection();
			$loginSelect_query = "SELECT username, password from user_info WHERE username = '".$user_name."' AND password = '".$password."'";
			return mysqli_query($connection_db->conn, $loginSelect_query);
		}
		public function displayData($username){
			$connection_db = new connection_db();
			$connection_db->set_connection();
			$displaySelect_query = "SELECT * from user_info where username = '".$username."'";
			return mysqli_query($connection_db->conn, $displaySelect_query);
		}
		public function user_existence($username){
			$connection_db = new connection_db();
			$connection_db->set_connection();
			$select_existUser = "SELECT * FROM user_info WHERE username = '$username'";
			return mysqli_query($connection_db->conn, $select_existUser);
		}
	}
$db = new Database();
?>