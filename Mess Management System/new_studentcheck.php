<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='insert'){
	 $rollno=$_POST['rollno'];
  $name=$_POST['name'];
  $pass=$_POST['password'];
  $batch=$_POST['batch'];
  $messid=$_POST['messid'];	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"INSERT INTO STUDENT VALUES ('$rollno','$name','$pass','$batch')")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		 $result2=mysqli_query($link,"INSERT INTO MESS VALUES ('$messid','$rollno')")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		include('New_student.php');
		echo '<h3><b><center>INSERTED</center></b></h3>';
		
	}}}
	
	
	?>