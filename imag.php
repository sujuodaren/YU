<?php
include_once('confg.php');

$sql2 = "SELECT student_img FROM stdinfo   WHERE course_semester='" . $_GET['course_semester']."' ";

$result2 = mysql_query("$sql2") or die("Invalid query: " . mysql_error());

header("Content-type: image/jpeg");
echo mysql_result($result2, 0);
?>
