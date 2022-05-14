
<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	  $in_pname  = $_POST['pid'];
	  $in_dname  = $_POST['dname'];
	  $in_age    = $_POST['age'];

	  $dis=$_POST['dis'];
	  $mp=$_POST['pm'];

	  $invo_date = date("Y-m-d H:i:s");
      


	$query = "INSERT INTO `med_rec_db`
	( `pname`, `pid`, `page`, `date`,`Disease`,`prec_med`)
	VALUES
	('$in_dname','$in_pname','$in_age','$invo_date','$dis','$mp')";

	  if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Successful !</div>';
	  		}


  }
?>
