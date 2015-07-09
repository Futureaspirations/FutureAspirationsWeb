<!DOCTYPE html>
<html>
<head>
	<?php include_once "header.php"; ?>
	<title>Register</title>
</head>
<body>
	<p1>This is the Registration Page</p1>
	<div class="top-page">
	<div name="registrationForm" style="width: 250px; border: 2px solid black; margin: 5px;">
		 <form action="register.php" method="post">
                    <table name="login" >
                        <tr>
                            <td> username </td>
                            <td> <input name="user" type="text"></td>
                        </tr>
                        <tr>
                            <td> password </td>
                            <td> <input name="pass" type="password"></td>
                        </tr>
                        <tr>
                            <td> <input type="submit" value="Register"> </td>
                        </tr>
                    </table>
           </form>
    </div>
	</div>
</body>
</html>