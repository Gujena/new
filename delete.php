<?php

include("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE s.rollno,s.name,s.mobile,s.email,s.dept,r.subject,r.mark_obtain,r.grade FROM student s,result r WHERE id=$id");

header("Location:index.php");
?>

