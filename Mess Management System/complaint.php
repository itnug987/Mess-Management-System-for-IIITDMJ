<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>COMPLAINT</title>
	</head>
<body>
<?php
   
	require('iiitlogo.php');
	
		echo'
		<div class="container" align="center">
	 
	   <h3><font color=#FF8401>COMPLAINT FORUM</font></h3>
	   <table class="table">
	     <form class="form-inline" action="complaint_check.php" method="POST">
		 <div class="form-group">

		  <tr><td><label for="complaint"><font color="white">Complaint</font></label></td>
		     <div class="col-xs-3">
          <td><textarea class="form-control" id="complaint" name="complaint" cols="30" rows="3" placeholder="TYPE HERE...."></textarea></td></tr>
		       </div>
	     
		 </div>
		 </table>
		 <button type="submit" class="btn btn-success" name="submit" value="complaint">SUBMIT</button>
       </form></div>';
	   ?>
	
	


</body>
</html>