<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Change Password</title>
	</head>
<body background="back.jpg">
<?php
   
	require('iiitlogo.php');
	
		echo'
		<div class="container" align="center">
	 
	 <font color=#FF8401>  <h3><b> Change Password </b></h3></font>
	   <table class="table">
	     <form class="form-inline" action="password_check.php" method="POST">
		 <div class="form-group">
		 <tr><td><label for="oldrollnumber"><font color="white">Roll Number</font></label></td>
		    <div class="col-xs-3">
          <td><input type="text" class="form-control" id="oldrollnumber" name="oldrollnumber"  placeholder="2016001"></td></tr>
		      </div>
		  <tr><td><label for="oldpassword"><font color="white">Old Password</font> </label></td>
		     <div class="col-xs-3">
          <td><input type="password" class="form-control" id="oldpassword" name="oldpassword"  placeholder="*******"></td></tr>
		       </div>
	     <tr><td><label for="newpassword"><font color="white">New Password</font> </label></td>
		 <div class="col-xs-3">
          <td><input type="password" class="form-control" id="changepassword" name="changepassword"  placeholder="*******"></td></tr>
         </div>
		 </div>
		 </table>
		 <button type="submit" class="btn btn-success" name="submit" value="reset">Reset Password</button>
       </form></div>';
	   ?>
	
	


</body>
</html>