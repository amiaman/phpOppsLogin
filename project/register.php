<?php
	require_once('database.php');
	class register{
		function __construct(){
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$gender = $_POST['gender'];
				$mobile = $_POST['mobile'];
				$designation = $_POST['designation'];
				$image=basename($_FILES['uploadFile']['name']);
				//Update file
				$target_dir="uploads/";
				$target_file=$target_dir.$image;
				$uploadFile =move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file);
				$db = new Database();
				$registerUser = $db->registerUser($username, $firstname, $lastname, $email, $password, $gender, $mobile, $designation, $image);
				if($registerUser){
					header('Location:login.php');
				}
			}	
		}
	}
$submit = new register();
?>