<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Incharge Main Page</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="back.jpg">
<div class="container"><center><img src="institute_logo1.png" height="107" width="800"></center>
	<br/><br/>
	<center>
	<table width="1000"> 
<tr><td><a href="inchargepage.php"><font color=#2A40C9><h4>Home</h4></font></a></td> 
<td align="right"><a href="Login.php"><font color="white"><h4>Log Out</h4></font> </a></td> 
</tr> 

</table></center></div>';

<div class="container" align="center">
<form class="form-inline" method="POST">
<button type="submit" name="menu" value="menu" class="btn btn-primary" formaction="inchargemenu.php">Menu</button>
<button type="submit" name="update_bill" value="update_bill" class="btn btn-primary" formaction="Update_bill.php">Update Bill</button>
<button type="submit" name="food_wastage" value="food_wastage" class="btn btn-danger" formaction="Incharge_foodwastage.php">Food Wastage</button>
<button type="submit" name="feedback" value="feedback" class="btn btn-primary" formaction="Incharge_feedback.php">Feedback</button>
<button type="submit" name="complaint" value="complaint" class="btn btn-primary" formaction="Incharge_complaint.php">Complaint</button>
<button type="submit" name="new_student" value="new_student" class="btn btn-primary" formaction="New_student.php">New Student</button>
<button type="submit" name="student_details" value="student_details" class="btn btn-primary" formaction="student_details.php">Student Details</button>
<button type="submit" name="change_password" value="change_password" class="btn btn-primary" formaction="Incharge_changepassword.php">Change Password</button>
<button type="submit" name="about" value="about" class="btn btn-primary" formaction="Incharge_about.php">About</button>

</form>
</div>
</body>
</html>