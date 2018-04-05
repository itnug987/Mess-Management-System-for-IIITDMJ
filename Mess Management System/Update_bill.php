<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>UPDATE BILL</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
   include('Incharge_iiitlogo.php');
   
   
   echo'
		<div class="container" align="center">
	 
	   <h3><font color=#FF9600>UPDATE BILL </font></h3>
	   <table class="table">
	     <form class="form-inline" action="updatecheck.php" method="POST">
		 <div class="form-group">
		  <tr><td><label for="rollno"><font color="white">Roll Number*</font></label></td>
		    <div class="col-xs-3">
          <td><input type="text" class="form-control" id="rollno" name="rollno" required="required"  placeholder="Roll Number"></td></tr>
		      </div>
		  <tr><td><label for="month"><font color="white">Month </font></label></td>
		     <div class="col-xs-3">
          <td><select name="month">
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
				 <option value="december">December</option></td></tr>
		       </div>
	     <tr><td><label for="amount"><font color="white">Amount</font></label></td>
		 <div class="col-xs-3">
          <td><input type="Number" class="form-control" id="amount" name="amount"  placeholder="00000"></td></tr>
         </div>
		 </div>
		 </table>
		 <button type="submit" class="btn btn-success" name="submit" value="bill">UPDATE BILL</button>
       </form></div>';
	   ?>
	
	


</body>
</html>