<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="ga" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php
$studentNo = $_POST['StudentNumberInput'];
$firstName = $_POST['FirstNameInput']; 
$surname = $_POST['SurnameInput'];
$email = $_POST['EmailInput'];
$course = $_POST['CourseTitleInput'];
$year = $_POST['YearInCollegeInput'];
$paid = $_POST['PaidRadio'];
$committee = $_POST['CommitteeRadio'];
if(empty($committee)){
echo " empty c";
}
if(empty($paid)){
echo " empty p";
}

include ("detail.php"); 

$sql  = "INSERT INTO members (";
$sql .= "studentID, firstName, surname, email, course, yearOfCollege, paid, committee";
$sql .= ") VALUES (";
$sql .= "'$studentNo', '$firstName', '$surname', '$email ', '$course ', '$year', '$paid', '$committee');";

$result = $db->query($sql); 

echo "<p>Application Successfully Submitted at:</p>";
$date=date_create();
echo date_format($date,"G:i dS F");
'</p>';

?>
<script language="javascript">	
	document.location.replace("applicationComplete.php");
</script>

</body>

</html>
