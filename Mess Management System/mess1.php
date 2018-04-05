<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>FOOD WASTAGE PAGE</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='mess1'){
	 
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"SELECT * FROM FOOD_WASTAGE WHERE MESS_ID=1")
   
        or die("FAILED TO QUERY DATABASE".mysql_error());
		require('iiitlogo.php');
		echo '<div class="container">';
		echo '<center><h1><b><font color=#2A40C9>FOOD WASTAGE</font></b></h1>';
		echo '<table class="table table-hover">
		<tr><th><font color=#FF9600>MESS ID</font></th>
		<th><font color=#FF9600>DATE</font></th>
		<th><font color=#FF9600>SESSION</font></th>
		<th><font color=#FF9600>WASTAGE</font></th>
		</tr>';
		
		while($row=mysqli_fetch_array($result)){
			
			                                     echo "<tr><td><b><font color=#007BAB>" . $row['MESS_ID'] . "</b></font></td>
												 <td><b><font color=#007BAB>" . $row['DATE'] . "</b></font></td>
												 <td><b><font color=#007BAB>" . $row['SESSION'] . "</b></font></td>
												 <td><b><font color=#007BAB>" . $row['WASTAGE'] . "</b></font></td></tr>";
		
		                                         echo "<br/>";
		}
		echo "</table></center>";
		echo "</div>";
	
		
	}}}
	
	
	?>