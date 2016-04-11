<!---
Welcome to the Sourcecodester.com
For more tutorials, kindly visit this website:
 
http://www.sourcecodester.com/
-->
<!DOCTYPE html>
<html>
<head>
<title>Barangay West Rembo</title>
<center>
<style type="text/css">
.rotate-image {
	height: 110px;
	width: 110px;
	margin: 10px;
	text-align:center;
	border-radius: 50%;
	-webkit-transition: all ease 0.3s;
	-moz-transition: all ease 0.3s;
	-o-transition: all ease 0.3s;
	-ms-transition: all ease 0.3s;
	transition: all ease 0.3s;
}
 
.rotate-image:hover {
	box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.8);
	-webkit-transform:rotate(360deg);
	-moz-transform:rotate(360deg);
	-o-transform:rotate(360deg);
	-ms-transform:rotate(360deg);
	transform:rotate(360deg);
}
 
.table_style {
	border:3px groove #CCC;
}
 
td {
	text-align:center;
	font-weight:bold;
}
</style>
</head>
<body>
 
<a href="#"><h1>LOG OUT</h1></a>
 
<table border="1" class="table_style" cellspacing="10" cellpadding="10">
	<tr>
		<td colspan="5">
			<h3>WELCOME ADMIN!</h3>
		</td>
	</tr>
	<tr>
			<td>
				<div class="rotate-image"><img src="img/mail.jpg" /></div>
			</td>
			<td>
				<div class="rotate-image"><img src="img/cal.jpg" /></div>
			</td>
			<td>
				<div class="rotate-image"><img src="img/truck.png" /></div>
			</td>
			<td>
				<a href="viewusers.php"><div class="rotate-image"><img src="img/users.png" /></div></a>
			</td>
	</tr>
	<tr>
			<td>
				<span>Complaints Received</span>
			</td>
			<td>
				<span>All Announcements</span>
			</td>
			<td>
				<span>Truck Schedule</span>
			</td>
			<td>
				<span>All Users</span>
			</td>
	</tr>
	</center>
</table>
 
</body>
</html>