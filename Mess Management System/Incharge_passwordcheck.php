
<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='reset'){
	 $oldid=$_POST['oldid'];
  $oldpass=$_POST['oldpassword'];
  $change=$_POST['changepassword'];
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"SELECT ID,PASSWORD FROM MESS_INCHARGE WHERE ID='$oldid' AND PASSWORD='$oldpass'")
        or die("FAILED TO QUERY DATABASE".mysql_error());
		$row=mysqli_fetch_array($result);
		
		if($row['ID']==$oldid && $row['PASSWORD']==$oldpass)
		{
			$query=mysqli_query($link,"UPDATE MESS_INCHARGE SET PASSWORD='$change' WHERE ID='$oldid' AND PASSWORD='$oldpass'");
			require ('Incharge_changepassword.php');
			echo '<center><h3><b>RESET!!</b></h3></center>';
			
		}
		else{
			
			echo "PLEASE CHECK YOUR OLD ID AND PASSWORD!!";
			
		}
	}}}
	
	
	?>