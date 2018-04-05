<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>MENU</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
	include('Incharge_iiitlogo.php');
	echo'
		<div class="container" align="center">
	 
	   <h3><font color=#FF8401>MESS MENU</font></h3>
	   <table class="table">
	     <form class="form-inline" action="inchargemenu_check.php" method="POST">
		 <div class="form-group">
		 
		 <tr><td><label for="messid">Mess ID</label></td>
		    <div class="col-xs-3">
          <td><select name="messid">
		           <option value="1">1</option>
				   <option value="2">2</option>
		                       </td></tr>
		      </div>
		 
		 <tr><td><label for="url">URL</label></td>
		    <div class="col-xs-3">
          <td><input type="text" class="form-control" id="url" name="url"  placeholder=""></td></tr>
		      </div>

	     
		 </div>
		 </table>
		 <button type="submit" class="btn btn-success" name="submit" value="upload">UPLOAD</button>
       </form></div>';
	   ?>
	
