<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>MESS MENU</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='upload'){
	 $id=$_POST['messid'];
	 $url=$_POST['url'];
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"UPDATE IMAGES SET URL='$url' WHERE MESS_ID='$id'")
   
        or die("FAILED TO QUERY DATABASE".mysql_error());
		require('Incharge_iiitlogo.php');
		echo '<center><h1><b>Menu inserted</b></h1>';
		
			
	
		
	}}}
	
	
	?>