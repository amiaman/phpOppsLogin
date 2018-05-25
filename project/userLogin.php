<?php
	require_once('database.php');
	class loginConnect{
		function __construct(){
			if(isset($_POST['username']) && isset($_POST['password'])){
				session_start();
				$db = new Database();
				$loginUser = $db->loginUser($_POST['username'],$_POST['password']);
				$user_data = $loginUser->fetch_assoc();
				$no_rows = mysqli_num_rows($loginUser);
				$username = $user_data['username'];
				if($no_rows == 1){
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
?>