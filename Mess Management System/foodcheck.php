<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='wastage'){
		
  $messid=$_POST['messid'];
  $date=$_POST['date'];
  $session=$_POST['session'];
  $wastage=$_POST['wastage'];
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
		if(strtotime($date)<time()){
			
   $result=mysqli_query($link,"INSERT INTO FOOD_WASTAGE VALUES ('$messid','$date','$session','$wastage')")
        or die("FAILED QUERY".mysql_error());
		include('Incharge_foodwastage.php');
		echo '<h3><b><center>INSERTED</center></b></h3>';
		}
		else{
				include('Incharge_foodwastage.php');
				echo '<h3><b><center>Enter correct CREDENTIALS</center></b></h3>';
		}
	}}}
	
	
	?>