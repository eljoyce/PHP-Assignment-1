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
<h1>Event Registration Form</h1>
<form action="processApplication.php" method="post" name="membershipForm" id="membershipForm">
	<table style="width: 57%">
		<tr>
			<td style="width: 207px; height: 26px;"><label id="StudentNumberLabel">Student Number:</label></td>
			<td style="width: 353px; height: 26px;">
			<input name="StudentNumber" value = '<?php session_start(); echo $_SESSION['StudentNumber'];?>'type="text" readonly="readonly" /></td>
		</tr>
		<tr>
		
			<td style="width: 207px"><label id="YearInCollegeLabel">Event:</label></td>
			<td style="width: 353px">
			<select name="EventName" style="width: 146px">
			<option></option>
			<option value="Junior Fresh">Junior Fresh</option>
			</select></td>
		</tr>
		<tr>
			<td colspan="2"><div align="center">
			<input type="submit" name="Submit" value="Submit Order"> <br />
				<br />
				<a href="home.html">
				<img alt="Select here to go to the society's home page" height="49" src="homeImage.png" width="94" class="auto-style1" /></a></div></td>
		</tr>
</table>
<p>
<?php
		include ("detail.php");
		$sql = "SELECT eventID, eventName FROM events;";
		$result = $db->query($sql);
		$row = mysqli_fetch_assoc($result);
		$num_results = mysqli_num_rows ($result);
		echo $num_results;
		echo "<select name='eventName' style='width: 146px'>";
		//
		for($i = 0; $i < $num_results; $i++){
  			echo "<option value='" . $row['eventName'] ."'>" . $row['eventName'] ."</option>";
  			$row = mysqli_fetch_assoc($result);
		}
		echo "</select>";

//while ($row = mysqli_fetch_array($result)) {
  //               unset($name);
    //             $name = $row['eventName']; 
      //           echo '<option value="'.$eventName.'">'.$name.'</option>';
                 
		//}
		//echo "</select>";
		// Loop through the query results, outputing the options one by one
				?></p>
<p>
</p>
</form>

</body>

</html>
