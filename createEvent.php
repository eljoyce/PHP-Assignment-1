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
.auto-style1 {
	border-width: 0px;
}
.auto-style2 {
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
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1 class="auto-style2">Event Creation Form</h1>
<form action="processEventApplication.php" method="post" name="membershipForm" id="membershipForm">
	<table style="width: 57%" align="center">
		<tr>
			<td style="width: 267px">Event Name:</td>
			<td style="width: 353px">
			<input name="EventNameInput" type="text" style="width: 173px" /></td>
		</tr>
		<tr>
			<td style="width: 267px">Description</td>
			<td style="width: 353px">
			<input name="DescriptionInput" type="text" style="width: 173px" /></td>
		</tr>
		<tr>
			<td style="width: 267px">Location<label id="LocationLabel">:</label></td>
			<td style="width: 353px">
			<input name="LocationInput" type="text" style="width: 173px" /></td>
		</tr>
		<tr>
			<td style="width: 267px">Date of Eve<label id="DateLabel">nt: (YYYY-MM-DD)</label></td>
			<td style="width: 353px"><input name="DateInput" type="text" style="width: 173px" /></td>
		</tr>
		<tr>
			<td style="width: 267px; height: 26px;"><label id ="TimeLabel"> Time of 
			Event: (HH:MM)</label></td>
			<td style="width: 353px; height: 26px;"><input name="TimeInput" type="text" style="width: 173px"/></td>
		</tr>
		<tr>
			<td style="width: 267px"><label id="CapacityLabel">Capacity:</label></td>
			<td style="width: 353px"><input name="CapacityInput" type="text" id="capacity" style="width: 173px"/></td>
		</tr>
		<tr>
			<td style="width: 267px; height: 26px;"><label id ="PriceLabel"> Price of 
			Event:</label></td>
			<td style="width: 353px; height: 26px;"><input name="PriceInput" type="text" id ="price" style="width: 173px"/></td>
		</tr>
		<tr>
			<td style="width: 267px; height: 26px;"><label id ="RevenueLabel"> Maximum Revenue Possible:</label></td>
			<?php 
			$rev = PriceInput * CapacityInput;
			?>
			<td style="width: 353px; height: 26px;"><input name="RevenueInput" type="text" id ="revenue" style="width: 173px"/></td>
		</tr>

		<tr>
			<td colspan="2"><div align="center">
			<input type="submit" name="Submit" value="Submit"> <br />
				<br />
				<a href="home.php">
				<img alt="Select here to go to the society's home page" height="49" src="homeImage.png" width="94" class="auto-style1" /></a></div></td>
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
