<?php
	require_once('database.php');
	class register{
		function registration(){
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
				//Upload file
				$target_dir="uploads/";
				$target_file=$target_dir.$image;
				$uploadFile =move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_file);
				//insert data into database
				$db = new Database();
				$existUser = $db->user_existence($username);
				$user = mysqli_fetch_array($existUser, MYSQLI_NUM);
				if($user[0] > 1){
					header('Location:registrationForm.php?message=user already exist');
				}
				else{
					$registerUser = $db->registerUser($username, $firstname, $lastname, $email, $password, $gender, $mobile, $designation, $image);
					if($registerUser){
						header('Location:login.php');
					}
				}
			}	
		}
	}
$submit = new register();
$submit->registration();
?>