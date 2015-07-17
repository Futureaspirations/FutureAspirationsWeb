<!DOCTYPE html>
<html>
	<head>
		<title>User Registration Page</title>
		<link rel="stylesheet" href="css/registercss.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/registration.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="main">
				<form class="form" method="post" action="#">
					<div class="field">
						<label id="labelFirstName">First Name :</label>
						<input type="text" name="dfirstname" id="firstname">
					</div>
					<div class="field">
						<label id="labelLastName">Last Name :</label>
						<input type="text" name="dlastname" id="lastname">
					</div>
					<div class="field">
						<label id="labelEmail">Email :</label>
						<input type="text" name="demail" id="email">
					</div>
					<div class="field">
						<label id="labelPassword">Password :</label>
						<input type="password" name="password" id="password">
					</div>
					<div class="field">
						<label id="labelCpassword">Confirm Password :</label>
						<input type="password" name="cpassword" id="cpassword">
					</div>
						<div class="field">
						<input type="button" name="register" id="register" value="Register">
					</div>
				</form>
			</div>
		</div>
	</body>