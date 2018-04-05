<?php

   $login=$_POST['login_id'];
   $pass=$_POST['password'];
   
  

   
   $link=mysqli_connect('localhost','root','',"dbms_project");

   
   $result=mysqli_query($link,"select ROLL_NO,PASSWORD from student where ROLL_NO='$login' and PASSWORD='$pass'")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		$row=mysqli_fetch_array($result);
		if($row['ROLL_NO']){
		if($row['ROLL_NO']==$login && $row['PASSWORD']==$pass)
		{
			session_start(); 
			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_ID'] = $login; 
			header('location:mainpage.php');
			
		}
		else{
			include('login.php');
			
			
			echo '<h3><center>You have entered incorrect credentials!</center></h3>';
			
		}
		}
		else{
			include('login.php');
			echo '<h3><center>Enter the Credentials</center></h3>';
			
		}
?>		