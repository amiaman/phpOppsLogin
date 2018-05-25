<?php
	require_once('session.php');
	require_once('database.php');
	class loginConnect{
		function loginCheck(){
			
			if(isset($_POST['username']) && isset($_POST['password'])){
				$user_name = $_POST['username'];
				$password = $_POST['password'];
				$db = new Database();
				$loginUser = $db->loginUser($user_name,$password);
				$user_data = $loginUser->fetch_assoc();
				$no_rows = mysqli_num_rows($loginUser);
				$username = $user_data['username'];
				$pass = $user_data['password'];
				if($user_name == $username && $password == $pass){
					$session = new session();
					$session->logged();
					$_SESSION['username'] = $user_data['username'];
					header("Location:display.php?message=Login successful.&username=$username");
				}
				else{
					header("Location:login.php");
				}
			}
		}	
	}
$login = new loginConnect();
$login->loginCheck();
?>