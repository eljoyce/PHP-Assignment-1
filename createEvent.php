<em><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
.auto-style1 {
	border-width: 0px;
}
.auto-style2 {
	text-align: center;
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

.auto-style4 {
	font-style: normal;
}

</style>

</head>

<body>
<?php
$name = $description = $location = $date = $time = $capacity = $price = "";
$nameErr = $descErr = $location = $dataErr = $timeErr = $capacityErr = $priceErr ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["EventNameInput"])) {
    $nameErr = "An event name is required";
  } else {
  	$name = test_input($_POST["EventNameInput"]);
   if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
 	 $nameErr = "Only letters and white space allowed"; 
	}
   
  }
  if (empty($_POST["DescriptionInput"])) {
    $descriptionErr = "A description of the event is required";
  } else {
    $description = test_input($_POST["DescriptionInput"]);
  }

  if (empty($_POST["LocationInput"])) {
    $locationErr = "A location is required";
  } else {
    $location = test_input($_POST["LocationInput"]);
  }
    $date = $_POST["DateInput"]; 
    //Couldn't get validation to work for date

  if (empty($_POST["TimeInput"])) {
    $timeErr = "A time is required";
  } else {
    $time = test_input($_POST["TimeInput"]);
    if (!preg_match("/(2[0-4]|[01][1-9]|10):([0-5][0-9])/",$time)) {
  		$timeErr = "You must enter a valid time on the 24 hour clock"; 
	}
  }

  if (empty($_POST["CapacityInput"])) {
    $capacityErr = "A capacity for your event is required";
  } else {
    $capacity = test_input($_POST["CapacityInput"]);
  }
    if (empty($_POST["PriceInput"])) {
    $priceErr = "A price for your event is required";
  } else {
    $price = test_input($_POST["PriceInput"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(
!empty($name) && 
!empty($description) && 
!empty($location) && 
!empty($date) && 
!empty($time) && 
!empty($capacity) &&
!empty($price) &&
empty($nameErr) && 
empty($descErr) && 
empty($locationErr) && 
empty($dateErr) && empty($timeErr) && empty($capacityErr)&& empty($priceErr))
{
include ("processEventApplication.php");
}

?>

<p>&nbsp;</p>
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
<h1 class="auto-style2"><em>Event Creation Form</em></h1>
<p class="auto-style2"><span class="error"><em>* required field.</em></span></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="eventCreationForm" id="eventCreationForm">
	<table style="width: 57%" align="center">
		<tr>
			<td style="width: 267px"><em class="auto-style4">Event Name:</em></td>
			<td style="width: 353px">
			<input name="EventNameInput" type="text" value="<?php echo $name;?>"style="width: 173px" />
			<span class="error">* <?php echo $nameErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 267px"><em class="auto-style4">Description</em></td>
			<td style="width: 353px">
			<em>
			<input name="DescriptionInput" type="text" style="width: 173px" value="<?php echo $description;?>"/></em>
			<span class="error">* <?php echo $descErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 267px"><em class="auto-style4">Location</em><label id="LocationLabel"><em class="auto-style4">:</em></label></td>
			<td style="width: 353px">
			<em>
			<input name="LocationInput" type="text" style="width: 173px" value="<?php echo $location;?>" /></em>
			<span class="error">* <?php echo $locationErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 267px"><em class="auto-style4">Date of Eve</em><label id="DateLabel"><em class="auto-style4">nt: (YYYY-MM-DD)</em></label></td>
			<td style="width: 353px"><em>
			<input name="DateInput" type="text" style="width: 173px" value="<?php echo $date;?>"/></em>
			<span class="error">* <?php echo $dateErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 267px; height: 26px;"><label id ="TimeLabel"> 
			<em class="auto-style4">Time of 
			Event: (HH:MM)</em></label></td>
			<td style="width: 353px; height: 26px;">
			<em>
			<input name="TimeInput" type="text" style="width: 173px" value="<?php echo $time;?>"/></em>
			<span class="error">* <?php echo $timeErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 267px"><label id="CapacityLabel">
			<em class="auto-style4">Capacity:</em></label></td>
			<td style="width: 353px">
			<em>
			<input name="CapacityInput" type="text" id="capacity" style="width: 173px" value="<?php echo $capacity;?>"/></em>
			<span class="error">* <?php echo $capacityErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 267px; height: 26px;"><label id ="PriceLabel"> 
			<em class="auto-style4">Price of 
			Event:</em></label></td>
			<td style="width: 353px; height: 26px;">
			<em>
			<input name="PriceInput" type="text" id ="price" style="width: 173px"value="<?php echo $price;?>"/></em>
			<span class="error">* <?php echo $priceErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 267px; height: 26px;"><label id ="RevenueLabel"> 
			<em class="auto-style4">Maximum Revenue Possible:</em></label></td>
			<td style="width: 353px; height: 26px;"><em>
			<input name="RevenueInput" type="text" id ="revenue" style="width: 173px"/></em></td>
		</tr>

		<tr>
			<td colspan="2"><div align="center">
				<em>
			<input type="submit" name="Submit" value="Submit"></em> <br />
				<br />
				<a href="home.php">
				<em class="auto-style4">
				<img alt="Select here to go to the society's home page" height="49" src="homeImage.png" width="94" class="auto-style1" /></em></a></div></td>
		</tr>

	</table>
</form>
<script type="text/javascript">
$('input').keyup(function(){ // run anytime the value changes


    var firstValue = Number($('#price').val()); // get value of field
    var secondValue = Number($('#capacity').val()); // convert it to a float
    $('#revenue').html(firstValue * secondValue); // add them and output it
});
function getCapacity()
{
    //Assume form with id="theform"
    var theForm = document.forms["membershipForm"];
    //Get a reference to the TextBox
    var quantity = theForm.elements["capacity"];
    var howmany =0;
    //If the textbox is not blank
    if(quantity.value!="")
    {
        howmany = parseInt(capacity.value);
    }
return howmany;
}
function getPrice()
{
    //Assume form with id="theform"
    var theForm = document.forms["membershipForm"];
    //Get a reference to the TextBox
    var price = theForm.elements["price"];
    var howmany =0;
    //If the textbox is not blank
    if(price.value!="")
    {
        howmany = parseInt(price.value);
    }
return howmany;
}
function getTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var revenue = getPrice() + getCapacity();
 
    //display the result
    document.getElementById('revenue').innerHTML = revenue;
 
}

</script>
</body>

</html>

</em>