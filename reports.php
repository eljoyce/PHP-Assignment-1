<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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

.auto-style3 {
	font-size: xx-large;
	text-align: center;
}

.auto-style4 {
	text-align: center;
	font-size: xx-large;
}

</style>

</head>

<body>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
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
<?php

include("detail.php");
$sql = "SELECT * FROM events;";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$num_results = mysqli_num_rows ($result);
echo "<p><strong>Events Table:</strong></p>";
for($i = 0; $i < $num_results; $i++){
  	echo "<p>Event ID: ".$row['eventID'] ;
  	echo "<br/>Event Name: ".$row['eventName'] ;
  	echo "<br/>Event Descrition: ".$row['description'] ;
  	echo "<br/>Event Location: ".$row['location'] ;
  	echo "<br/>Event Date: ".$row['dateOfEvent'] ;
  	echo "<br/>Event Time: ".$row['timeOfEvent'] ;
  	echo "<br/>Event Capacity: ".$row['capacity'] ;
  	echo "<br/>Event Price: ".$row['price'] ;
  	$row = mysqli_fetch_assoc($result);
  	}
$sql = "SELECT * FROM members;";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$num_results = mysqli_num_rows ($result);
echo "<p><strong>Members Table:</strong></p>";
for($i = 0; $i < $num_results; $i++){
  	echo "<p>Student ID: ".$row['studentID'] ;
  	echo "<br/>First Name: ".$row['firstName'] ;
  	echo "<br/>Surname: ".$row['surname'] ;
  	echo "<br/>Email: ".$row['email'] ;
  	echo "<br/>College Course: ".$row['course'] ;
  	echo "<br/>Year in College: ".$row['yearOfCollege'] ;
  	echo "<br/>Paid: ".$row['paid'] ;
  	echo "<br/>Committee: ".$row['committee'] ;
  	$row = mysqli_fetch_assoc($result);
  	}
$sql = "SELECT * FROM membersRegisteredForEvents;";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$num_results = mysqli_num_rows ($result);
echo "<p><strong>Members Registered for Events Table:</strong></p>";
for($i = 0; $i < $num_results; $i++){
  	echo "<p>SignUp ID: ".$row['signUpID'] ;
  	echo "<br/>Student ID: ".$row['studentID'] ;
  	echo "<br/>Event ID: ".$row['eventID'] ;
   	$row = mysqli_fetch_assoc($result);
  	}

?>
 
</body>

</html>
