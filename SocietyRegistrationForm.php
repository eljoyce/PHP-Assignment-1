<em><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="ga" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration</title>
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
.auto-style3 {
	text-align: left;
}
.auto-style4 {
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
<p>&nbsp;</p>
<?php
$studentNo = $firstName = $surname = $email = $course = $year = $paid = $committee = "";
$stNoErr = $fNameErr = $sNameErr = $emailErr = $courseErr = $yearErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["StudentNumberInput"])) {
    $stNoErr = "A student number is required";
  } else {
  	$studentNo = test_input($_POST["StudentNumberInput"]);
  	if(!is_numeric($studentNo)){
    $stNoErr = "Your student number must only contain numbers";
    }    
  }
  if (empty($_POST["FirstNameInput"])) {
    $fNameErr = "A first name is required";
  } else {
    $firstName = test_input($_POST["FirstNameInput"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
 	 $fNameErr = "Only letters and white space allowed"; 
	}
  }

  if (empty($_POST["SurnameInput"])) {
    $sNameErr = "A surname is required";
  } else {
    $surname = test_input($_POST["SurnameInput"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
  		$sNameErr = "Only letters and white space allowed"; 
	}
  }

  if (empty($_POST["EmailInput"])) {
    $emailErr = "An email is required";
  } else {
    $email = test_input($_POST["EmailInput"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$emailErr = "Invalid email format"; 
	}
  }

  if (empty($_POST["CourseTitleInput"])) {
    $courseErr = "A course is required";
  } else {
    $course = test_input($_POST["CourseTitleInput"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$course)) {
  		$courseErr = "Only letters and white space allowed"; 
	}
  }

  if (empty($_POST["YearInCollegeInput"])) {
    $yearErr = "A year in college is required";
  } else {
    $year = test_input($_POST["YearInCollegeInput"]);
  }
    $paid = test_input($_POST["PaidRadio"]);
    $committee = test_input($_POST["CommitteeRadio"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(
!empty($studentNo) && 
!empty($firstName) && 
!empty($surname) && 
!empty($email) && 
!empty(course) && 
!empty($year) &&
empty($stNoErr) && 
empty($fNameErr) && 
empty($sNameErr) && 
empty($emailErr) && empty($courseErr) && empty($yearErr))
{
include ("processApplication.php");
}
?>
<h1>Society Membership Form</h1>
<p><span class="error">* required field.</span></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" name="membershipForm" id="form">
	<table style="width: 79%" align="left">
		<tbody class="auto-style3">
		<tr>
			<td style="width: 138px" class="auto-style3"><label id="StudentNumberLabel">Student Number:</label></td>
			<td style="width: 353px">
			<input name="StudentNumberInput" type="text" value="<?php echo $studentNo;?>"/>
			<span class="error">* <?php echo $stNoErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 138px" class="auto-style3"><label id="FirstNameLabel">First Name:</label></td>
			<td style="width: 353px">
			<input name="FirstNameInput" type="text" value="<?php echo $firstName;?>"/>
			<span class="error">* <?php echo $fNameErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 138px" class="auto-style3"><label id="SurnameLabel">Surname:</label></td>
			<td style="width: 353px"><input name="SurnameInput" type="text" value="<?php echo $surname;?>"/>
			<span class="error">* <?php echo $sNameErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 138px" class="auto-style3"><label id="EmailLabel">Email Address:</label></td>
			<td style="width: 353px"><input name="EmailInput" type="text" value="<?php echo $email;?>"/>
			<span class="error">* <?php echo $emailErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 138px" class="auto-style3"><label id ="CourseTitleLabel"> Course Title:</label></td>
			<td style="width: 353px"><input name="CourseTitleInput" type="text" value="<?php echo $course;?>"/>
			<span class="error">* <?php echo $courseErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 138px" class="auto-style3"><label id="YearInCollegeLabel">Year in College:</label></td>
			<td style="width: 353px">
			<select name="YearInCollegeInput" style="width: 146px">
			<option></option>
			<option value="Junior Fresh">Junior Fresh</option>
			<option value="Senior Fresh">Senior Fresh</option>
			<option value="Junior Sophister ">Junior Sophister</option>
			<option value="Senior Sophister">Senior Sophister</option>
			<option value="Masters">Masters</option>
			<option value="PHD">PHD</option>
			</select>
			<span class="error">* <?php echo $yearErr;?></span></td>
		</tr>
		<tr>
			<td style="width: 138"><label id="paidLabel">Paid membership fee?</label></td>
			<td style="width: 353px">
			<input name="PaidRadio" type="radio" value="0" checked="checked" /><label id="Label8">Paid
			</label><input name="PaidRadio" type="radio" value="1" /><label id="Label9">Not 
			Paid</label></td>			
		</tr>
		<tr>
			<td style="width: 138px" class="auto-style3"><label id="committeeLabel">Part of Committee?</label></td>
			<td style="width: 353px">
			<input name="CommitteeRadio" type="radio" value="0" checked="checked" /><label id="Label8">Yes
			</label><input name="CommitteeRadio" type="radio" value="1" /><label id="Label9">No</label>
			</td>
		</tr>
		<tr>
			<td colspan="2"><div class="auto-style4">
			&nbsp;<em><input type="submit" name="Submit" value="Submit"></em><br />
				<br />
				<a href="index.html">
				<img alt="Select here to go to the society's home page" height="49" src="homeImage.png" width="94" class="auto-style1" /></a></div></td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
	</table>
</form>
		<script language="javascript" type="function">
</script>

</body>

</html>

</em>