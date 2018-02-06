<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Queries</title>
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
	font-size: large;
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

//Three table join
$sql = "SELECT  * FROM membersRegisteredForEvents;";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$num_results = mysqli_num_rows ($result);
echo "<p><strong>Three Table Join:</strong></p>";
for($i = 0; $i < $num_results; $i++){
  	$eventID = $row['eventID'] ;
  	$studentNo = $row['studentID'] ;
  	$signupID = $row['signUpID'] ;
  	$sql2 = "select firstName, surname from members where studentID like '%".$studentNo."%'"; 
	$result2 = $db->query($sql2);
	$row2 = mysqli_fetch_assoc($result2);	  	
	$num_results2 = mysqli_num_rows ($result2);
	$sql3 = "select eventName from events where eventID like '%".$eventID."%'"; 
	$result3 = $db->query($sql3);
	$row3 = mysqli_fetch_assoc($result3);	  	
	$num_results3 = mysqli_num_rows ($result3);

	echo "<br/>Student Name: ".$row2['firstName']." ".$row2['surname'];
	echo "<br/>Event Name: ".$row3['eventName'];
	echo "<p></p>";
	$row = mysqli_fetch_assoc($result);

}
 //Summary Function
$sql = "SELECT eventID, eventName FROM events;";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$num_results = mysqli_num_rows ($result);

echo "<p><strong>Summary functions:</strong></p>";
for($i = 0; $i < $num_results; $i++){
  	$eventID = $row['eventID'] ;
  	$sql2 = "select COUNT(studentID) from membersRegisteredForEvents where eventID like '%".$eventID."%'"; 
	$result2 = $db->query($sql2);
	$row2 = mysqli_fetch_assoc($result2);	  	
	$num_results2 = mysqli_num_rows ($result2);
	
	echo "<br/>Event ID: ".$row['eventID'];
	echo "<br/>Event Name: ".$row['eventName'];
	echo "<br/>No of People Attending: ".$row2['COUNT(studentID)'];
	echo "<p></p>";
	$row = mysqli_fetch_assoc($result);

}
 	
?>

</body>

</html>
