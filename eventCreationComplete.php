<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta name="viewport" content="width=device-width, initial-scale =1.0">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>My EventsEvent Sign-UpCreate a N</title>
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
<div id="nav" style="height: 30px">
	<ul style="width: 918px">
		<li class="auto-style7" style="width: 300px"><a href="eventRegistrationForm.php">My Events</a></li>
		<li class="auto-style7">
		<a href="eventRegistrationForm.php" style="width: 293px">Event Sign-Up</a></li>
		<li style="width: 291px"><a href="createEvent.php">Create a New Event</a></li>
	</ul>
</div>

<?php
echo "<p class='auto-style4'>Booking Successfully Submitted at:</br>";
$date=date_create();
echo date_format($date,"G:i dS F");
'</p>';
?>
<p class="auto-style4">
<span class="auto-style3">Thank you for your booking!</span>
</p>
</body>

</html>
