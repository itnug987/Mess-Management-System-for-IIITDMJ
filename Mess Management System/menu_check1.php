<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>MESS 2</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
	if(isset($_POST['submit'])){
	if($_POST['submit']=='mess2'){
	 
	 
	$link=mysqli_connect('localhost','root','','dbms_project');
	if(!$link){
		          echo "db not accessed";
   
	}
	else{
   $result=mysqli_query($link,"SELECT URL FROM IMAGES WHERE MESS_ID=2")
   
        or die("FAILED TO QUERY DATABASE".mysql_error());
		require('iiitlogo.php');
		echo '<div class="container">';
		echo '<center><h1><b><font color="black">MESS 2</font></b></h1>';
		
		
 while($row = $result->fetch_assoc()){
          $url = $row['URL'];
      }
 ?>


 <img src="<?php echo $url; ?>" />
	<?php	
	}}}
	
	
	?>