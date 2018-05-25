<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/empValidation.js" type="text/javascript"></script>
</head>
<body>
	<form name="registrationForm" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
		<table align="center">
			<tr>
				<th colspan="3">Employee Registration Form</th>
			</tr>
			<tr>
				<td>First Name :</td>
				<td><input type="text" name="firstname" placeholder="First Name" ></td>
				<td><span id="errfName"></span></td>
			</tr>
			<tr>
				<td>Last Name :</td>
				<td><input type="text" name="lastname" PlaceHolder="Last Name"></td>
				<td><span id="errlName"></span></td>
			</tr>
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username" PlaceHolder="User Name"></td>
				<td><span id="errusName"></span></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email" placeholder="abc@xyz.com"></td>
				<td><span id="errEmail"></span></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" placeholder="Password"></td>
				<td><span id="errPass"></span></td>
			</tr>
			<tr>
				<td>Confirm Password :</td>
				<td><input type="password" name="conPassword" placeholder="Repeat Password" id="errInput"></td>
				<td><span id="errConpass"></span></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td>
					<input type="radio" name="gender" value="male" checked>Male
					<input type="radio" name="gender" value="female">Female
				</td>
			</tr>
			<tr>
				<td>Mobile Number :</td>
				<td><input type="text" name="mobile" placeholder="Mobile Number"></td>
				<td><span id="errMobile"></span></td>
			</tr>
			<tr>
				<td>Designation :</td>
				<td>
					<select name="designation">
						<option value="select" selected>Select</option>
						<option value="manager">Manager</option>
						<option value="seniorDeveloper">Senior Developer</option>
						<option value="developer">Developer</option>
					</select>
				</td>
				<td><span id="errDesignation"></span></td>
			</tr>
			<tr>
				<td>Upload Your Image :</td>
				<td><input type="file" name="uploadFile" id="uploadFile" value="uploadFile"></td>
				<td><span id="errImage"></span></td>
			</tr>
			<tr>
				<td colspan="3" id="center"><input type="submit" name="submit" value="submit" ></td>
			</tr>
		</table>
	</form>
	</body>
</html>