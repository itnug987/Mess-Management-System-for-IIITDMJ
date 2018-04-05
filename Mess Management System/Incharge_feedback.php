<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>All FEEDBACKS</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
	if(isset($_POST['feedback'])){
	if($_POST['feedback']=='feedback'){
	 
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"SELECT * FROM FEEDBACK ORDER BY DATE DESC ")
   
        or die("FAILED TO QUERY DATABASE".mysql_error());
		require('Incharge_iiitlogo.php');
		echo '<div class="container">';
		echo '<center><h1><b><font color=#2A40C9>FEEDBACKS</font></b></h1>';
		echo '<table class="table table-hover">
		<tr><th><font color=#FF8401>MESS ID</font></th>
			<th><font color=#FF8401>DATE</font></th>
		<th><font color=#FF8401>ROLL NUMBER</font></th>
			<th><font color=#FF8401>SESSION</font></th>
				<th><font color=#FF8401>RATING</font></th>
		<th><font color=#FF8401>FEEDBACK</font></th>
		
		
		</tr>';
		
		while($row=mysqli_fetch_array($result)){
												echo "<tr><td><b><font color=#007BAB>" . $row['MESS_ID'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['DATE'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['ROLL_NO'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['SESSION'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['RATING'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['DESCRIPTION'] . "</font></b></td></tr>";
		
		                                         echo "<br/>";
		}
		echo "</table></center>";
		echo "</div>";
	
		
	}}}
	
	
	?>