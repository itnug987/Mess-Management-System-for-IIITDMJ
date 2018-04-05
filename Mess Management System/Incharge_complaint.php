<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>All COMPLAINTS</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
	if(isset($_POST['complaint'])){
	if($_POST['complaint']=='complaint'){
	 
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"SELECT * FROM COMPLAINT ORDER BY DATE DESC")
   
        or die("FAILED TO QUERY DATABASE".mysql_error());
		require('Incharge_iiitlogo.php');
		echo '<div class="container">';
		echo '<center><h1><b><font color=#2A40C9>COMPLAINTS</font></b></h1>';
		echo '<table class="table table-hover">
		<tr><th><font color=#FF8401>ROLL NUMBER</font></th>
		<th><font color=#FF8401>COMPLAINT</font></th>
		<th><font color=#FF8401>DATE</font></th>
		
		</tr>';
		
		while($row=mysqli_fetch_array($result)){
			
			                                     echo "<tr><td><font color=#007BAB>" . $row['ROLL_NO'] . "</font></b></td>
												 <td><font color=#007BAB>" . $row['COMPLAINT'] . "</font></b></td>
												 <td><font color=#007BAB>" . $row['DATE'] . "</font></b></td></tr>";
		
		                                         echo "<br/>";
		}
		echo "</table></center>";
		echo "</div>";
	
		
	}}}
	
	
	?>