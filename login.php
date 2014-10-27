<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.loginPad{	
	width: 400px;
	height: 250px;

	border: 10px #888888 outset;

	background-color: #fcfcfc;

	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}
.btn-login {
	-moz-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	-webkit-box-shadow:inset 0px 1px 3px 0px #91b8b3;
	box-shadow:inset 0px 1px 3px 0px #91b8b3;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
	background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
	background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
	background-color:#768d87;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #566963;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:10px 30px;
	text-decoration:none;
	text-shadow:0px -1px 0px #2b665e;
}
.btn-login:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #6c7c7c), color-stop(1, #768d87));
	background:-moz-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-webkit-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-o-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:-ms-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
	background:linear-gradient(to bottom, #6c7c7c 5%, #768d87 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c7c7c', endColorstr='#768d87',GradientType=0);
	background-color:#6c7c7c;
}
.btn-login:active {
	position:relative;
	top:1px;
}
</style>

<script>
</script>
</head>
<body>
	<!-- bgcolor="#FFFF66" -->
	<div style="background:#FFFF66; width:1024px;height:600px;">
		<div style="background:#FFFF66; width:1024px;height:150px;"></div>
		<center>
		<div class="loginPad">
			<h2 style="font-family:tahoma; color:#555;">Login</h2>
			<hr noshade width="85%">
			
			<form name="form1" method="post" action="checklogin.php">
				<br>
				<input name="myusername" type="text" id="myusername" placeholder="Username">
				<br><br>
				<input name="mypassword" type="text" id="mypassword" placeholder="Password">
				<br><br>
				<input class="btn-login" type="submit" name="Submit" value="Login">
			</form>
			
		</div>
		</center>
	</div>
</body>
</html>