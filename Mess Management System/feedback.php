

<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>FEEDBACK</title>
	</head>
<body>
<?php
   
	require('iiitlogo.php');
	
		echo'
		<div class="container" align="center">
	 
	   <font color=#FF9600><h3>FEEDBACK FORUM</h3></font>
	   <table class="table">
	     <form class="form-inline" action="feedback_check.php" method="POST">
		 <div class="form-group">
		 
		 <tr><td><label for="messid"><font color="white">Mess ID</font></label></td>
		    <div class="col-xs-3">
          <td><select name="messid">
		           <option value="1">1</option>
				   <option value="2">2</option>
		                       </td></tr>
		      </div>	  
		 
		 
		 
		    <input type="hidden"  id="rollno" name="rollno" >
		      
			  
		 
		 <tr><td><label for="date"><font color="white">Date</font></label></td>
		    <div class="col-xs-3">
          <td><input type="date" class="form-control" id="date" name="date"  placeholder="DDMMYYYY"></td></tr>
		      </div>
			  
			  
		<tr><td><label for="session"><font color="white">Session</font></label></td>
		    <div class="col-xs-3">
          <td><input type="radio" name="session" value="breakfast" />Breakfast
				<input type="radio" name="session" value="lunch" />Lunch
				<input type="radio" name="session" value="dinner" />Dinner
				</td></tr>
		      </div>	  
			  
			  
		<tr><td><label for="description"><font color="white">Feedback or Suggesstion</font></label></td>
		    <div class="col-xs-3">
          <td><textarea name="description" cols="30" rows="3" placeholder="TYPE HERE...."></textarea></td></tr>
		      </div>  
		<tr><td><label for="rating"><font color="white">Rating</font></label></td>
		    <div class="col-xs-3">
          <td><select name="rating">
		           <option value="1">1(WORST)</option>
				   <option value="2">2</option>
				   <option value="3">3</option>
				   <option value="4">4</option>
				   <option value="5">5</option>
				   <option value="6">6</option>
				   <option value="7">7</option>
				   <option value="8">8</option>
				   <option value="9">9</option>
				   <option value="10">10(BEST)</option>
		                       </td></tr>
		      </div>	  
			  
	     
		 </div>
		 </table>
		 <button type="submit" class="btn btn-success" name="submit" value="feedback">SUBMIT</button>
       </form></div>';
	   ?>
	
	


</body>
</html>