<html> 
<head> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Page</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
</head> 
<body background="back.jpg" >
<div class="container"> 
<center><img src="institute_logo1.png" height="107" width="800">
	<font color="white"><h1><font color=#FF9600>IIITDMJ  MESS  PORTAL</font></h1><br/></font>
</center>
<center>
<form class="form-inline"  method="POST">
  <div class="form-group ">
  <table class="table" >
    <tr><td><label for="login_id">LOGIN ID</label></td>
    <td><input type="integer" class="form-control" id="login_id" name="login_id" placeholder="2016001"></td></tr>

  </div>
  <div class="form-group">
    <tr><td><label for="password">PASSWORD</label></td>
    <td><input type="password" class="form-control" id="password" name="password" placeholder="*******"></td></tr>
	</table>
  </div>
  <br/><br/> 
  <button type="submit" name="submit" value="signin" formaction="login_check_1.php" class="btn btn-primary">Signin</button>
  <button type="submit" name="submit" value="incharge" formaction="login_check_2.php" class="btn btn-primary">Incharge Signin</button>
  </form>
 </center>
 </div>
</body> 
</html>
