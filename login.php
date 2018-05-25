<!DOCTYPE HTML>
<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body class="body">
		<form name="loginForm" method="post" action="userLogin.php" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<th colspan="2">Login Form</th>
				</tr>
				<tr>
					<td><b>User Name :</b></td>
					<td>
						<input type="text" name="username" required autofocus placeholder="User Name" class="text-field">
					</td>
				</tr>
				<tr>
					<td><b>Password :</b></td>
					<td>
						<input type="password" name="password" required autofocus placeholder="Password" class="text-field">
					</td>
				</tr>
				<tr>
					<td colspan="2" id="center">
						<input type ="submit"  name ="login" value ="login" class="button"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" id="center">
						<a href="registrationForm.php">Register new user!</a>
					</td>
				</tr>
			</table>
		</form>	
	</body>
</html>