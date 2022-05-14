<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/form.css" type="text/css" rel="stylesheet">

<title>Hospital Management System</title>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="text-center " style="font-family:roboto-sans">Hospital Management System<br /></div>
</div>
</div>
<br />

<?php
include 'connect.php';
session_start();

	// If form submitted, insert values into the database.
	if (isset($_POST['sadmun'])){

		$typeb = "Basic Administartion";
		$typea = "Super Administartion";
		
	$username = stripslashes($_REQUEST['sadmun']);

// removes backslashes
	$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
	$password = stripslashes($_REQUEST['sadmpw']);
	$password = mysqli_real_escape_string($con,$password);

//Checking is user existing in the database or not
	$query = "SELECT * FROM `lvl2_admin` WHERE `lvtwusern` = '$username'and `lvtwpass` = '".md5($password)."'";
	$querysa = "SELECT * FROM `sup_admin` WHERE `sadiun` = '$username'and `sadipw` = '".md5($password)."'";

	$result = mysqli_query($con,$query) or die(mysqli_error());
	$resultsa = mysqli_query($con,$querysa) or die(mysqli_error());

	$rows = mysqli_num_rows($result);
	$rowss = mysqli_num_rows($resultsa);

	if($rows==1){
		$_SESSION['sadmun'] = $username;
		$_SESSION['admty']  = $typeb;
		header("Location: menu.php"); // Redirect user to index.php
	}
	else if ($rowss==1){
		$_SESSION['sadmun'] = $username;
		$_SESSION['admty']  = $typea;
		header("Location: menu.php"); // Redirect user to index.php
	}

					else{
			$fail = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Invalid Username or Password</div>';
			}
	}
?>
<center>
	<div class="form" >
	<form action="" method="post">
	
	<img id="mimg" src="images/log/login.png" class="img-responsive" style="border-radius:150px; border:1px solid black; padding:10px"/>
	<br>
	<div class="input-group input-group-lg" ><span class="input-group-addon" style="background:rgb(255,206,100)"><img style="width:30px" src="images/log/un.png" /></span>
	  <input name="sadmun" required="required" style=" height:52px; font-size:20px" id="field" type="text" class="form-control " placeholder="Username">
	</div>
	<br />
	<div class="input-group input-group-lg"><span class="input-group-addon" style="background:rgb(255,206,100)"><img style="width:30px" src="images/log/lck.png" /></span>
	  <input name="sadmpw" required="required" style=" font-size:20px; height:52px;" type="password" class="form-control " placeholder="Password">
	</div>
	<br />
	<div align="center">
	<button name="login" onclick="chcke();"  type="submit" value="SUBMIT" class="btn ">LOGIN</button>
	<br>
	<center><script type="text/javascript">
	document.write('<?php echo $fail; ?>');</script></center>
	<div align="center">
		<br>
		<p>Not registered yet? <a target="_blank" style="color:white" href='superadmin.php'>Register Here</a></p>
	</div>

	</div>
	</form>

	
	<br><br>

</div>
</div>

</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
	<br>

	
	</html>
