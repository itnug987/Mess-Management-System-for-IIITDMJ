<html>
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body background="back.jpg">

	<div class="container"><center><img src="institute_logo1.png" height="107" width="800"></center>
	<br/><br/>
	<center>
	<table width="1000">  
<tr><td><a href="mainpage.php" ><font color="blue"><b><h4>Home</h4></b></font></a></td> 
<td align="right"><a href="Login.php"><font color="white"><b><h4>Log Out</h4></b></font> </a></td> 
</tr> 

</table></center></div>';

<div class="container" align="center">
<form class="form-inline" method="POST">
<button type="submit" name="menu" value="menu" class="btn btn-primary" formaction="menu.php">Menu</button>
<button type="submit" name="food_wastage" value="food_wastage" class="btn btn-danger" formaction="food_wastage.php">Food Wastage</button>
<button type="submit" name="feedback" value="feedback" class="btn btn-primary" formaction="feedback.php">Feedback</button>
<button type="submit" name="complaint" value="complaint" class="btn btn-primary" formaction="complaint.php">Complaint</button>
<button type="submit" name="bill" value="bill" class="btn btn-primary" formaction="bill.php">Bill</button>
<button type="submit" name="change_password" value="change_password" class="btn btn-primary" formaction="change_password.php">Change Password</button>

<button type="submit" name="about" value="about" class="btn btn-primary" formaction="about.php">About</button>
</form>
</div>
</body>
</html>