<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>BILL</title>
	</head>
<body>
<?php
   
	require('iiitlogo.php');
	
		echo'
		<div class="container" align="center">
	 
	   <h3><font color=#FF8401> MESS BILL </font></h3>
	   <table class="table">
	     <form class="form-inline" action="bill_check.php" method="POST">
		 <div class="form-group">
		 <tr><td><label for="rollno"><font color="white">Roll Number</font></label></td>
		    <div class="col-xs-3">
          <td><input type="text" class="form-control" id="rollno" name="rollno"  placeholder="2016001"></td></tr>
		      </div>
		  <tr><td><label for="month"><font color="white">SELECT MONTH </font></label></td><td>
		    <div class="dropdown">
               <select name="month">
			     <option value="january">January</option>
				 <option value="february">February</option>
				 <option value="march">March</option>
				 <option value="april">April</option>
				 <option value="may">May</option>
				 <option value="june">June</option>
				 <option value="july">July</option>
				 <option value="august">August</option>
				 <option value="september">September</option>
				 <option value="october">October</option>
				 <option value="november">November</option>
				 <option value="december">December</option>
 
 
</div></td></tr></table>
<button type="submit" name="submit" value="bill" class="btn btn-success">GET BILL</button>
 

</form></div>';
	   ?>
	


</body>
</html>