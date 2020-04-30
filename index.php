<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT s.rollno,s.name,s.mobile,s.email,s.dept,r.subject,r.mark_obtain,r.grade FROM student s,result r WHERE s.rollno=r.rollno");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>
	<center>
		<h2 style="color:red;"> Student Records </h2>
		<table width='80%' border=1%>

	<tr bgcolor='#CCCCCC'>
		
		<td>Roll No</td>
		<td>Name  </td> 
		<td>Email</td>
		<td>Mobile</td>
		<td>Department</td>
		<td>Subject</td>
		<td>Mark</td>
		<td>Grade</td>
		<td>Actions</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";

		echo "<td>".$res['rollno']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['mobile']."</td>";
		echo "<td>".$res['dept']."</td>";
		echo "<td>".$res['subject']."</td>";
		echo "<td>".$res['mark_obtain']."</td>";
		echo "<td>".$res['grade']."</td>";
		
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	</center>

	
</body>
</html>
