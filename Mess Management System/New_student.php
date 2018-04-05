<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>INSERT STUDENT</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
   include('Incharge_iiitlogo.php');
   
   
   echo'
		<div class="container" align="center">
	 
	   <h3><font color=#FF8401>INSERT NEW STUDENT</font> </h3>
	   <table class="table">
	     <form class="form-inline" action="new_studentcheck.php" method="POST">
		 <div class="form-group">
		  <tr><td><label for="rollno"><font color="white">Roll Number*</font></label></td>
		    <div class="col-xs-3">
          <td><input type="text" class="form-control" id="rollno" name="rollno" required="required"  placeholder="Roll Number"></td></tr>
		      </div>
			  <tr><td><label for="messid"><font color="white">Mess ID</font></label></td>
		 <div class="col-xs-3">
          <td><select name="messid">
		           <option value="1">1</option>
				   <option value="2">2</option>
		                       </td></tr></td></tr>
         </div>
		 <tr><td><label for="name"><font color="white">Name</font></label></td>
		    <div class="col-xs-3">
          <td><input type="text" class="form-control" id="name" name="name"  placeholder="Name"></td></tr>
		      </div>
		  <tr><td><label for="password"><font color="white">Password</font> </label></td>
		     <div class="col-xs-3">
          <td><input type="password" class="form-control" id="password" name="password"  placeholder="*******"></td></tr>
		       </div>
	     <tr><td><label for="batch"><font color="white">Batch</font></label></td>
		 <div class="col-xs-3">
          <td><input type="text" class="form-control" id="batch" name="batch"  placeholder="2017"></td></tr>
         </div>
		 </div>
		 </table>
		 <button type="submit" class="btn btn-success" name="submit" value="insert">Add Student</button>
       </form></div>';
	   ?>
	
	


</body>
</html>