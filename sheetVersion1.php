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
table {
    width: 100%;
}
table, tr, th,td {
   border: 1px solid black;
   
}
td {
    padding: 15px;
	height: 65px;
}
.th1{
	width: 100px;
}
.th2{
	width:50%;
}

h2{
	font-family:tahoma;
}
</style>

</head>
<body bgcolor="#FFFF66">
	<!--  -->
	<div style="background:#FFF; width:1024px;">
		<?php
		//http://stackoverflow.com/questions/13686139/php-how-to-get-current-time-in-hourminutesecond
		//http://www.tutorialspoint.com/php/php_date_and_time.htm
		//http://php.net/manual/en/function.date.php
		$time = date("h:i a"); 
		echo "<center><br><h2>".$time."</h2></center>";
		?>
	<script>
		//---------------- TABLE 1
		// http://stackoverflow.com/questions/9751951/generate-html-table-using-for-loop
		var mytable = "<table cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><th class='th1'>1head</th><th class='th1'>2head</th><th class='th2'>3head</th><th class='th1'>4head</th><th class='th1'>5head</th><th class='th1'>6head</th></tr><tr>";
		var n = 30;
		for (var i = 1; i <= n; i++) 
		{
		  if (i % 6 == 1 && i != 1) 
		  {
			mytable += "</tr><tr>";
		  }
		  mytable += "<td>[" + i + "]</td>";
		}

		mytable += "</tr></tbody></table>";

		document.write(mytable);
	</script>
	<br>
	<script>
		
		//---------------- TABLE 2
		var mytable = "<table cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><th class='th1'>1head</th><th class='th1'>2head</th><th class='th2'>3head</th><th class='th1'>4head</th><th class='th1'>5head</th><th class='th1'>6head</th></tr>";
		var j = 5;
		for (var i = 1; i <= j; i++) 
		{
		  mytable += "<tr><td>[pic" + i + "]</td><td>[room" + i + "]</td><td>[prof" + i + "]</td><td>[pre" + i + "]</td><td>[late" + i + "]</td><td>[absent" + i + "]</td></tr>";
		}

		mytable += "</tbody></table>";

		document.write(mytable);
	</script>
		
	</div>
</body>
</html>