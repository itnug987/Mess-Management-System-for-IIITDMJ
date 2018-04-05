<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='bill'){
		
	 $rollno=$_POST['rollno'];
  
  $month=$_POST['month'];
  
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
		 $result=mysqli_query($link,"SELECT ROLL_NO,MONTH FROM BILL WHERE ROLL_NO='$rollno' AND MONTH='$month' ")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		$row=mysqli_fetch_array($result);
		
		$result1=mysqli_query($link,"SELECT NAME FROM STUDENT WHERE ROLL_NO='$rollno'")
		 or die("FAILED TO QUERY DATABASE".mysql_error());
		$row1=mysqli_fetch_array($result1);
		
		if($row['ROLL_NO']==$rollno && $row['MONTH']==$month)
		{
   $result=mysqli_query($link,"SELECT * FROM BILL WHERE ROLL_NO='$rollno' AND MONTH='$month' ")
        or die("FAILED TO QUERY DATABASE".mysql_error());
	 
		require('iiitlogo.php');
		echo '<div class="container">';
		echo '<center><h1><b><font color=#2A40C9> MESS BILL</font></b></h1>';
		echo '<table class="table table-hover">
		<tr><th><font color=#FF8401> ROLL NUMBER ID</font> </th>
		<th><font color=#FF8401> NAME</font></th>
		<th><font color=#FF8401> MONTH</font></th>
		<th><font color=#FF8401> AMOUNT</font></th>
		</tr>';
		
		while($row=mysqli_fetch_array($result)){
			
			                                     echo "<tr><td><b><font color=#007BAB>" . $row['ROLL_NO'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row1['NAME'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['MONTH'] . "</font></b></td>
												 <td><b><font color=#007BAB>" . $row['AMOUNT'] . "</font></b></td></tr>";
		
		                                         echo "<br/>";
		}
		echo "</table></center>";
		echo "</div>";
	}
	else{
		
		 include('bill.php');
  
          echo('<center><h3><font color="white">The bill for the month is not updated!</center></h3></font>');	
		
	}}}}
	?>