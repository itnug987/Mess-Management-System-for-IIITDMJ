<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='reset'){
	 $oldroll=$_POST['oldrollnumber'];
  $oldpass=$_POST['oldpassword'];
  $change=$_POST['changepassword'];
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"SELECT ROLL_NO,PASSWORD FROM student WHERE ROLL_NO='$oldroll' AND PASSWORD='$oldpass'")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		$row=mysqli_fetch_array($result);
		
		if($row['ROLL_NO']==$oldroll && $row['PASSWORD']==$oldpass)
		{
			$query=mysqli_query($link,"UPDATE STUDENT SET PASSWORD='$change' WHERE ROLL_NO='$oldroll' AND PASSWORD='$oldpass'");
			require ('change_password.php');
			echo '<center><h3><b>RESET!!</b></h3></center>';
			
		}
		else{
			
			echo "PLEASE CHECK YOUR OLD ROLL NO. AND PASSWORD!!";
			
		}
	}}}
	
	
	?>