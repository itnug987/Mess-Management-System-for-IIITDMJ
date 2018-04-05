<?php
//Start the session to see if the user is authenticated user. 
if(!isset($_SESSION['USER_ID'])) session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){  
} 
else{ 
header('location:login.php'); 
exit(); 
} 
	if(isset($_POST['submit'])){
	if($_POST['submit']=='complaint'){
		
  $user=$_SESSION['USER_ID'];
  
  $complaint=$_POST['complaint'];
 
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
		
			$result=mysqli_query($link,"INSERT INTO COMPLAINT VALUES ('$user','$complaint',now())")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		include('complaint.php');
		echo '<h3><b><center>SUCCESSFULLY SUBMITTED</center></b></h3>';
			
		
   
	}}}
	
	
	?>