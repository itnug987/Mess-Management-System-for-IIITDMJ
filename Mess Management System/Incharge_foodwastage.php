<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>FOOD WASTAGE</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
   include('Incharge_iiitlogo.php');
   
   
   echo'
		<div class="container" align="center">
	 
	   <h3><font color=#FF8401>INSERT FOOD WASTAGE </font></h3>
	   <table class="table">
	     <form class="form-inline" action="foodcheck.php" method="POST">
		 <div class="form-group">
		  <tr><td><label for="messid"><font color="white">Mess ID*</font></label></td>
		    <div class="col-xs-3">
          <td><select name="messid">
		        <option value="1">1</option>
                <option value="2">2</option></select>				</td></tr>
		      </div>
		 <tr><td><label for="date"><font color="white">Date</font></label></td>
		    <div class="col-xs-3">
          <td><input type="Date" class="form-control" id="date" name="date"  placeholder="DDMMYYYY"></td></tr>
		      </div>
		  <tr><td><label for="session"><font color="white">Session</font> </label></td>
		     <div class="col-xs-3">
          <td><input type="radio" name="session" value="breakfast"/>Breakfast
		  <input type="radio" name="session" value="lunch"/>Lunch
		  <input type="radio" name="session" value="dinner"/>Dinner
		  
		  </td></tr>
		       </div>
	     <tr><td><label for="wastage"><font color="white">Wastage in KG</font></label></td>
		 <div class="col-xs-3">
          <td><input type="Number" class="form-control" id="wastage" name="wastage"  placeholder="000"></td></tr>
         </div>
		 </div>
		 </table>
		 <button type="submit" class="btn btn-success" name="submit" value="wastage">UPDATE WASTAGE</button>
       </form></div>';
	   ?>
	
	


</body>
</html>