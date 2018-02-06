<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="ga" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
body {
  background-image: url("knitting%20top%20image.png"); 
  background-attachment:fixed;
  background-position: top centre;
  background-repeat: no-repeat;
}
#nav {
	width: 100%;
	float: left;
	margin: 0 0 1em 0;
	padding: 0;
	background-color: #f2f2f2;
	border-bottom: 1px solid #ccc;  }
#nav ul {
	list-style: none;
	width: 800px;
	margin: 0 auto;
	padding: 0; }
#nav li {
	float: left; }
#nav li a {
	display: block;
	padding: 8px 15px;
	text-decoration: none;
	font-weight: bold;
	color: #069;
	border-right: 1px solid #ccc; }
#nav li:first-child a {
	border-left: 1px solid #ccc; }
#nav li a:hover {
	color: #c00;
	background-color: #fff; }

.auto-style1 {
	text-align: center;
}

</style>
</head>

<body>

<p><br />
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="nav" style="height: 30px; width: 104%;">
	<ul style="width: 950px">
		<li class="auto-style7" style="width: 150px"><a href="eventRegistrationForm.php">My Events</a></li>
		<li class="auto-style7">
		<a href="eventRegistrationForm.php" style="width: 150px">Event Sign-Up</a></li>
		<li style="width: 200px" class="auto-style7"><a href="createEvent.php">Create a New Event</a></li>
		<li class="auto-style7" style="width: 150px"><a href="queries.php">Queries</a></li>
		<li class="auto-style7" style="width: 150px"><a href="reports.php">Reports</a></li>
	</ul>
</div>
<h1 class="auto-style1">Event Registration Form</h1>
<form action="processEventRegistration.php" method="post" name="membershipForm" id="membershipForm">
	<table style="width: 57%" align="center">
		<tr>
			<td style="width: 207px; height: 26px;"><label id="StudentNumberLabel">Student Number:</label></td>
			<td style="width: 353px; height: 26px;">
			<input name="StudentNumber" value = '<?php session_start(); echo $_SESSION['StudentNumber'];?>'type="text" readonly="readonly" /></td>
		</tr>
		<tr>
		
			<td style="width: 207px"><label id="EventLabel">Event:</label></td>
			<td style="width: 353px">
			<?php
		include ("detail.php");
		$sql = "SELECT eventID, eventName FROM events;";
		$result = $db->query($sql);
		$row = mysqli_fetch_assoc($result);
		$num_results = mysqli_num_rows ($result);
		echo "<select name='eventName' style='width: 146px'>";
		for($i = 0; $i < $num_results; $i++){
  			echo "<option value='" . $row['eventID'] ."'>" . $row['eventName'] ."</option>";
  			$row = mysqli_fetch_assoc($result);
		}
		echo "</select>";
		?>	
			</td>	</tr>	
		<tr>
			<td colspan="2"><div align="center">
			<input type="submit" name="Submit" value="Submit"> <br />
				<br />
				<a href="home.php">
				<img alt="Select here to go to the society's home page" height="49" src="homeImage.png" width="94" class="auto-style1" /></a></div></td>
		</tr>
</table>
<p>
</p>
<p>
</p>
</form>

</body>

</html>
