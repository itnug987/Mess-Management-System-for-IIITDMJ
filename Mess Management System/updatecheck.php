<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='bill'){
	 $rollno=$_POST['rollno'];
  
  $month=$_POST['month'];
  $amount=$_POST['amount'];
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
		 $result=mysqli_query($link,"SELECT ROLL_NO FROM student WHERE ROLL_NO='$rollno' ")	 
        or die("FAILED TO QUERY DATABASE".mysql_error());
		$row=mysqli_fetch_array($result);
		
		$result2=mysqli_query($link,"SELECT ROLL_NO,MONTH FROM BILL WHERE ROLL_NO='$rollno' AND MONTH='$month'")
		or die("FAILED TO QUERY DATABASE".mysql_error());
		$row2=mysqli_fetch_array($result2);
		
		$result3=mysqli_query($link,"SELECT NAME FROM BILL WHERE ROLL_NO='$rollno'")
		or die("FAILED TO QUERY DATABASE".mysql_error());
		$row3=mysqli_fetch_array($result3);
		if($row['ROLL_NO']==$rollno)
		{
			if($row2['ROLL_NO']){
				$result3=mysqli_query($link,"UPDATE BILL SET AMOUNT='$amount' WHERE ROLL_NO='$rollno' AND MONTH='$month'")
				or die("FAILED TO QUERY DATABASE".mysql_error());
		include('Update_bill.php');
		echo '<h3><b><center>BILL UPDATED</center></b></h3>';
			}
			
			else 
			{
				$name=$row3['NAME'];
				$result=mysqli_query($link,"INSERT INTO BILL VALUES ('$rollno','$name','$month','$amount')")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		include('Update_bill.php');
		echo '<h3><b><center>INSERTED</center></b></h3>';
			}
			
			
			}
		
		else {include('update_bill.php');
		echo "<h3><b><center>STUDENT NOT EXISTS</center></b></h3>";}
	}}}
	
	
	?>