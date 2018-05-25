<?php
	class session{
		function logged(){
			session_start();
		}
		function logout(){
			session_destroy();
			header("Location: login.php");
		}
	}
?>