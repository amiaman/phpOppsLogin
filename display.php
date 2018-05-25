<?php
	require_once("session.php");
	$session = new session;
	$session->logged();
	if($_SESSION['username'] == $_GET['username']){
		$username = $_GET['username'];
		require_once("database.php");
		$db = new Database();
		$displayUser = $db->displayData($username);
		$result = $displayUser->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/displayStyle.css">
	<script src="js/empValidation.js" type="text/javascript"></script>
</head>
<body>
	<div align="right">
			<ul>
				<li>Hi,<?php echo " ".$result['firstname']." ".$result['lastname'];?>!!!</li>
				<li>
					<a href="logout.php" id="logout"><b>Logout</b></a>
				</li>
			</ul>
	</div>
	<form name="registrationForm" action="" method="post" enctype="multipart/form-data" >
		<table align="center">
			<tr>
				<th colspan="3"><?php echo $result['firstname']." ".$result['lastname']." ";?>Profile<hr /></th>
			</tr>
			<tr>
				<td>First Name :</td>
				<td><?php echo $result['firstname'];?></td>
				<td rowspan="4"><img src='uploads/<?php echo $result['image'];?>' height='100px' width='100px'></td>
			</tr>
			<tr>
				<td>Last Name :</td>
				<td><?php echo $result['lastname'];?></td>
			</tr>
			<tr>
				<td>User Name :</td>
				<td><?php echo $result['username'];?></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><?php echo $result['email'];?></td>
			</tr>
			<tr>
				<td>Mobile Number :</td>
				<td><?php echo $result['mobile'];?></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td><?php echo $result['gender'];?></td>
			</tr>
			<tr>
				<td>designation :</td>
				<td><?php echo $result['designation'];?></td>
			</tr>
		</table>
	</form>
	</body>
</html>
<?php
	}
	else{
		header("Location:login.php");
	}
?>
		