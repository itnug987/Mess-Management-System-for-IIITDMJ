<?php

   $login=$_POST['login_id'];
   $pass=$_POST['password'];
   
   $link=mysqli_connect('localhost','root','',"dbms_project");
   
   $result=mysqli_query($link,"select ID,PASSWORD from MESS_INCHARGE where ID='$login' and PASSWORD='$pass'")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		$row=mysqli_fetch_array($result);
		if($row['ID']){
		if($row['ID']==$login && $row['PASSWORD']==$pass)
		{
			session_start(); 
		$_SESSION['IS_AUTHENTICATED'] = 1; 
		$_SESSION['USER_ID'] = $login; 	
			header('location:inchargepage.php');
			
		}
		else{
			include('login.php');
			echo "<h3><center>Enter the correct credentials</center></h3>";
			
		}
		}
		else{
			include('login.php');
			echo "<h3><center>Enter the credentials</center></h3>";
		}
?>		