<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

if(isset($_POST['Submit'])) {	
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$email =$_POST['email'];
	$mobile =$_POST['mobile'];
	$dept = $_POST['dept'];
	$subject = $_POST['subject'];
	$total_mark = $_POST['total_mark'];	
	$mark_obtain = $_POST['mark_obtain'];
	$result = ($mark_obtain >= 50) ? "pass" : "fail";
	$a=$_POST['mark_obtain'];
	if($a>=90 and $a<100 )
		$grade="S";
	if($a>=80 and $a<100)
		$grade="A+";
	if($a>=70 and $a<100)
		$grade="A";
	elseif($a>=60 and $a<100)
		$grade="B";
	elseif($a>=50 and $a<100)
		$grade="C";
	else
		$grade="RA";

$host='localhost';
$user='root';
$pass='';
$db='test';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
   echo 'connected successfully to student database';
   echo "<br>";

$sql="insert into student (name,rollno,email,mobile,dept) values ('$name','$roll','$email','$mobile','$dept')";

$query=mysqli_query($con,$sql);

if($query==1)
{
	$sql2="insert into result (rollno,subject,total_mark,mark_obtain,result,grade)
	values ('$roll','$subject','$total_mark','$mark_obtain','$result','$grade')";
	$query=mysqli_query($con,$sql2);
	if($query==1)
	{
		echo "data inserted successfully";
	}
}

   	
}

?>
<br>
<center><a href="index.php">Home</a></center>

</body>
</html>

