<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
$event = $_POST['EventNameInput'];
$description = $_POST['DescriptionInput']; 
$location = $_POST['LocationInput'];
$date = $_POST['DateInput'];
$time = $_POST['TimeInput'];
$capacity = $_POST['CapacityInput'];
$price = $_POST['PriceInput'];

include ("detail.php"); 


$sql  = "INSERT INTO events (";
$sql .= "eventName, description, location, dateOfEvent, timeOfEvent, capacity, price";
$sql .= ") VALUES (";
$sql .= "'$event', '$description', '$location', '$date ', '$time ', '$capacity', '$price');";

$result = $db->query($sql); 
//header("Location: eventCreationComplete.php");


?>
<script language="javascript">	
	document.location.replace("eventCreationComplete.php");
</script>


</body>

</html>
