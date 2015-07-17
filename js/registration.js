$(document).ready(function(){
	$("#register").click(function(){
		var firstname =$("#firstname").val();
		var lastname =$("#lastname").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var cpassword = $("#cpassword").val();
		
		if (firstname == '') {
			document.getElementById("firstname").style.border = "1px solid red";
			document.getElementById("labelFirstName").innerHTML ="First Name : <span style='color: red'>*</span>";
		} else {
			document.getElementById("firstname").style.border = "1px solid blue";
			document.getElementById("labelFirstName").innerHTML ="First Name :";
		}

		if (lastname == '') {
			document.getElementById("lastname").style.border = "1px solid red";
			document.getElementById("labelLastName").innerHTML ="Last Name : <span style='color: red'>*</span>";
		} else {
			document.getElementById("lastname").style.border = "1px solid blue";
			document.getElementById("labelLastName").innerHTML ="Last Name :";
		}

		if (email == '') {
			document.getElementById("email").style.border = "1px solid red";
			document.getElementById("labelEmail").innerHTML ="Email : <span style='color: red'>*</span>";
		} else 	{
			document.getElementById("email").style.border = "1px solid black";
			document.getElementById("labelEmail").innerHTML ="Email :";
		}

		if (password == '') {
			document.getElementById("password").style.border = "1px solid red";
			document.getElementById("labelPassword").innerHTML ="Password : <span style='color: red'>*</span>";
		} else {
			document.getElementById("password").style.border = "1px solid black";
			document.getElementById("labelPassword").innerHTML ="Password :";
		}

		if (cpassword != password) {
			document.getElementById("cpassword").style.border = "1px solid red";
			document.getElementById("labelCpassword").innerHTML ="Confirm Password : <span style='color: red'> password didn't match*</span>";
		} else {
			document.getElementById("cpassword").style.border = "1px solid black";
			document.getElementById("labelCpassword").innerHTML ="Confirm Password :";
		}

		if (cpassword == '') {
			document.getElementById("cpassword").style.border = "1px solid red";
			document.getElementById("labelCpassword").innerHTML ="Confirm Password : <span style='color: red'>*</span>";
		} 
		
	})
}) 