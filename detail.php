<?php

$host = "localhost";

$database = "eljoyce_db";

$user = "eljoyce";

$password = "chiX5Uin";




@ $db = mysqli_connect($host, $user, $password, $database);

$db->select_db($database);


if (mysqli_connect_errno())
{
echo 'Error connecting to the db.';
exit;
}


?>


