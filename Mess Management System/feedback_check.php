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
	if($_POST['submit']=='feedback'){
		
		
	$messid=$_POST['messid'];	
    $user=$_SESSION['USER_ID'];
  
  $feed=$_POST['description'];
  $date=$_POST['date'];
  $rating=$_POST['rating'];
  $session=$_POST['session'];
 
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
			
		if(strtotime($date)<time()){
			$result1=mysqli_query($link,"INSERT INTO FEEDBACK VALUES ('$date','$session','$feed','$rating','$user','$messid')");
       
		include('feedback.php');
		echo '<h3><b><center>SUCCESSFULLY SUBMITTED</center></b></h3>';
		}
			else{
				include('feedback.php');
				echo '<h3><b><center>Enter correct CREDENTIALS</center></b></h3>';

				
			}
			
		
		
		
		
	}}}
	
	
	?>