<?php

include_once("config.php");

if(isset($_POST['update']))
{	
	$id =$_POST['id'];
	$roll = $_POST['roll'];
	
	$name = $_POST['name'];
	$subject = $_POST['subject'];
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
	
	
		
		$result = mysqli_query($mysqli, "UPDATE student SET name='$name',roll='$roll' WHERE id=$id");
		$result1 = mysqli_query($mysqli, "UPDATE result SET subject='$subject',mark_obtain='$mark' grade='$grade' WHERE id=$id");
		
		
		header("Location: index.php");
		
	}

?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT s.rollno,s.name,s.mobile,s.email,s.dept,r.subject,r.mark_obtain,r.grade FROM student s,result r WHERE s.rollno=r.rollno");

while($res = mysqli_fetch_array($result))
{
	$roll = $res['rollno'];
	$name = $res['name'];
	$subject = $res['subject'];
	$mark = $res['mark_obtain'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Roll Number</td>
				<td><input type="text" name="roll" value="<?php echo $roll;?>"></td>
			</tr>
			<tr> 
				<td>Student Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Subject</td>
				<td><input type="text" name="subject" value="<?php echo $subject;?>"></td>
			</tr>
			<tr> 
				<td>Mark Obtain</td>
				<td><input type="text" name="mark" value="<?php echo $mark;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
