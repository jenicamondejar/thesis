<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css"/>
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
td {
	height: 65px;
}
.th1{
	width: 100px;
	height: 50px;
}
.th2{
	width:50%;
	height: 50px;
}

h2{
	font-family:tahoma;
}


.hidden {
    left: -10000px;
    position: absolute;
    top: -1000px;
}

.pic{}
.rm{
	background-color: #E1AA4C;
}
.prof{}
.present{
	background-color: #9FF781;
}
.late{
	background-color: #FE9A2E;
}
.absent{
	background-color: #FE2E2E;
}

.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:18px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#26ADE4;}

</style>

</head>
<body bgcolor="#FFFF66">
	<!--  -->
	<div style="background:#FFF; width:1024px;">
		<?php
		$time = date("h:i a"); 
		//echo "<center><br><h2>".$time."</h2></center>";
		?>
	<script type="text/javascript">

	$(document).ready(function() {
		$("a.radio-picture").click(function(){
			var $id = $(this).attr('id');
			$("a.radio-picture").removeClass('green-border');
			$("a#" + $id).addClass('green-border');
		});
	});

	</script>
	<script>
		//---------------- TABLE 2 based sheetVersion1.php
		var mytable = "<table class='tg' cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><th><a href=''><img src='btns/back.png' width='75' height='75' align='left'></a></th><th colspan='4'><?php echo "<center><h2>".$time."</h2></center>"; ?></td><th><a href=''><img src='btns/save.png' width='75' height='75' align='left'></a></th></tr><tr><th class='th1'>Image</th><th class='th1'>Room</th><th class='th2'>Professor & Class</th><th class='th1'>Present</th><th class='th1'>Late</th><th class='th1'>Absent</th></tr>";
		
		//VARIABLE J number of professors in that particular time
		/*
		//---------ORIGINAL
			mytable += "<tr><td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left' ></td><td class='rm'>[room" + i + "]</td><td class='prof'>[prof" + i + "]</td><td class='present'><input type='radio' name='group" + i + "' value='Present'> Present</td><td class='late'><input type='radio' name='group" + i + "' value='Late'> Late</td><td class='absent'><input type='radio' name='group" + i + "' value='Absent'> Absent</td></tr>";
		//---------^ ORIGINAL ^
		<tr>
		<td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left'></td>
		<td class='rm'>[room" + i + "]</td>
		<td class='prof'>[prof" + i + "]</td>
		<td class='present'>
			<input type='radio' name='group" + i + "' id='radio1' class='chkbx' />
			<label for='radio1' class='lbl group" + i + "'></label>
		</td>
		<td class='late'>
			<input type='radio' name='group" + i + "' id='radio2' class='chkbx' />
			<label for='radio2' class='lbl group" + i + "'></label>
		</td>
		<td class='absent'>
			<input type='radio' name='group' + i + "' id='radio3' class='chkbx' />
			<label for='radio3' class='lbl group" + i + "'></label>
		</td>
		</tr>

		*/
		var j = 5;
		for (var i = 1; i <= j; i++) 
		{
		  mytable += "<tr><td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left'></td><td class='rm'>[room" + i + "]</td><td class='prof'>[prof" + i + "]</td><td class='present'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='group" + i + "' id='radio" + i + "-1' class='chkbx' /><label for='radio" + i + "-1' class='lbl group" + i + "'></label></td><td class='late'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='group" + i + "' id='radio" + i + "-2' class='chkbx' /><label for='radio" + i + "-2' class='lbl group" + i + "'></label></td><td class='absent'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='group" + i + "' id='radio" + i + "-3' class='chkbx' /><label for='radio" + i + "-3' class='lbl group" + i + "'></label></td></tr>";
		}
		mytable += "</tbody></table>";

		document.write(mytable);
	</script>
		
	</div>
</body>
</html>