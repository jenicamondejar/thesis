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
a.radio-picture {
    border: 2px solid transparent;
    display: inline-block;
    height: 100px;
    text-decoration: none;
    width: 100px;
}
a.radio-picture:hover {
	border:2px dashed red;
}
a.green-border {
	border:2px solid green;
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
.present{}
.late{}
.absent{}
</style>

</head>
<body bgcolor="#FFFF66">
	<!--  -->
	<div style="background:#FFF; width:1024px;">
		<?php
		$time = date("h:i a"); 
		echo "<center><br><h2>".$time."</h2></center>";
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
		var mytable = "<table cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><th class='th1'>1head</th><th class='th1'>2head</th><th class='th2'>3head</th><th class='th1'>4head</th><th class='th1'>5head</th><th class='th1'>6head</th></tr>";
		
		//VARIABLE J number of professors in that particular time
		/*
		////
		<tr><td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left' ></td><td class='rm'>[room" + i + "]</td><td class='prof'>[prof" + i + "]</td><td class='present'>[pre" + i + "]</td><td class='late'>[late" + i + "]</td><td class='absent'>[absent" + i + "]</td></tr>
		////
		<tr>
			<td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left' ></td>
			<td class='rm'>[room" + i + "]</td><td class='prof'>[prof" + i + "]</td>
			<td class='present' name='group" + i + "'><img src='btns/p.jpg' width='100' height='100'></td>
			<td class='late' name='group" + i + "'><img src='btns/l.jpg' width='100' height='100'></td>
			<td class='absent' name='group" + i + "'><img src='btns/a.jpg' width='100' height='100'></td>
		</tr>
		////
		mytable += "<tr><td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left' ></td><td class='rm'>[room" + i + "]</td><td class='prof'>[prof" + i + "]</td><td class='present'><input type='radio' name='group" + i + "' value='Present'> Present</td><td class='late'><input type='radio' name='group" + i + "' value='Late'> Late</td><td class='absent'><input type='radio' name='group" + i + "' value='Absent'> Absent</td></tr>";
		/////
		<tr>
			<td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left' ></td>
			<td class='rm'>[room" + i + "]</td>
			<td class='prof'>[prof" + i + "]</td>
			<td class='present'>
				<input type='radio' name='group" + i + "' value='Present' class="hidden"> Present
				<a class='radio-picture'>
					<img id='group" + i + "' src='p.jpg' width="100" height="100"/>
				</a>
			</td>
			<td class='late'>
				<input type='radio' name='group" + i + "' value='Late' class='hidden'> Late
				<a class='radio-picture'>
					<img id='group" + i + "' src='l.jpg' width='100' height='100'/>
				</a>
			</td>
			<td class='absent'>
				<input type='radio' name='group" + i + "' value='Absent' class="hidden"> Absent
				<a class='radio-picture'>
					<img id='group" + i + "' src='a.jpg' width='100' height='100'/>
				</a>
			</td>
		</tr>
		*/
		var j = 5;
		for (var i = 1; i <= j; i++) 
		{
		  mytable += "<tr><td class='pic'><img src='btns/noImg.jpg' width='100' height='100' align='left' ></td><td class='rm'>[room" + i + "]</td><td class='prof'>[prof" + i + "]</td><td class='present'><input type='radio' name='group" + i + "' value='Present'> Present</td><td class='late'><input type='radio' name='group" + i + "' value='Late'> Late</td><td class='absent'><input type='radio' name='group" + i + "' value='Absent'> Absent</td></tr>";
		}
		

		mytable += "</tbody></table>";

		document.write(mytable);
	</script>
		
	</div>
</body>
</html>