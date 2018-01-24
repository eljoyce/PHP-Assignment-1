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
			<td style="width: 207px"><label id="StudentNumberLabel">Student Number:</label></td>
			<td style="width: 353px">
			<?php 
			session_start();
			?>
			<input name="StudentNumber" value = '<?php echo $_SESSION['StudentNumber']?>' type="text" /></td>
		</tr>
		<tr>
			<td style="width: 207px"><label id="YearInCollegeLabel">Event:</label></td>
			<td style="width: 353px">
			<select name="YearInCollegeInput" style="width: 146px">
			<option></option>
			<option value="Junior Fresh">Junior Fresh</option>
			<option value="Senior Fresh">Senior Fresh</option>
			<option value="Junior Sophister ">Junior Sophister</option>
			<option value="Senior Sophister">Senior Sophister</option>
			<option value="Masters">Masters</option>
			<option value="PHD">PHD</option>
			</select></td>
		</tr>
		<tr>
			<td colspan="2"><div align="center">
			<input type="submit" name="Submit" value="Submit Order"> <br />
				<br />
				<a href="index.html">
				<img alt="Select here to go to the society's home page" height="49" src="homeImage.png" width="94" class="auto-style1" /></a></div></td>
		</tr>

	</table>
</form>

</body>

</html>
