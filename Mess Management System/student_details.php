<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>All STUDENT DETAILS</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
	if(isset($_POST['student_details'])){
	if($_POST['student_details']=='student_details'){
	 
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"SELECT * FROM STUDENT ORDER BY ROLL_NO ")
   
        or die("FAILED TO QUERY DATABASE".mysql_error());
		require('Incharge_iiitlogo.php');
		echo '<div class="container">';
		echo '</br></br><center><h1><b><font color=#2A40C9>ALL STUDENT DETAILS</font></b></h1>
		<table class="table table-hover" >
		<tr><th><font color=#FF8401>ROLL NUMBER</font></th>
			<th><font color=#FF8401>NAME</font></th>
		<th><font color=#FF8401>PASSWORD</font></th>
			<th><font color=#FF8401>BATCH</font></th>
		</tr>';
		
		while($row=mysqli_fetch_array($result)){
			
			                                     echo "<tr><td><b><font color=#007BAB>" . $row['ROLL_NO'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['NAME'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['PASSWORD'] . "</font></b></td>

												 <td><b><font color=#007BAB>" . $row['BATCH'] . "</font></b></td></tr>";
		
		                                         echo "<br/>";
		}
		echo "</table></center>";
		echo "</div>";
	
		
	}}}
	
	
	?>