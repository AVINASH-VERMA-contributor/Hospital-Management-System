
<?php include ('lvlauth.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/hide.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hospital Management System</title>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />

</head>
<body>
<header class="nav-down ">

<?php include_once('navbar.php');?>


</header>

<main>
<div class="container-fluid" >
<div class="row">

<h1 class="text-center " style="color:white"><img width="9%" src="images/logol.png">City Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1>

<hr width="250px">
</div>
</div>




<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">

<table  class="table table-bordered" width="auto" border="0">
  <tr>
    <td><a href="patin.php"><img src="images/menu/patient.png"
            class="img-responsive img-thumbnail"
            style="height:300;width:200px; object-fit:cover;"
            id="picture" /></a>
           <center> <span style="color:white;font-size:18px;">Patient Information</span></center>
        </td>

    <td><a href="roomavi.php"><img src="images/menu/roominfo.jpg"
            class="img-responsive img-thumbnail"
            style="height:200;width:200px; object-fit:cover"
           
            id="picture"  /></a>
            <center> <span style="color:white;font-size:18px;">Rooms Information</span></center>
        </td>
  </tr>
  <tr>
    <td><a href="invo.php"><img src="images/menu/invc.png"
            class="img-responsive img-thumbnail"
            style="height:200;width:200px; object-fit:cover"
            
            id="picture" /></a>
            <center> <span style="color:white;font-size:18px;">Patient Invoices</span></center>
        </td>

    <td><a href="staff.php"><img src="images/menu/stff.png"
            class="img-responsive img-thumbnail"
            style="height:200;width:200px; object-fit:cover"
           
            id="picture" /></a>
            <center> <span style="color:white;font-size:18px;">Staff Information</span></center>
        </td>
  </tr>
  <tr>
    <td><a href="admite.php"><img src="images/menu/wardimg.jpg"
            class="img-responsive img-thumbnail"
            style="height:200;width:200px; object-fit:cover"
           
            id="picture" /></a>
            <center> <span style="color:white;font-size:18px;">Admitted Patients Info</span></center>
        </td>

    <td><a href="medrec.php"><img src="images/menu/medrec.png"
            class="img-responsive img-thumbnail"
            style="height:200;width:200px; object-fit:cover"

            id="picture" /></a>
            <center> <span style="color:white;font-size:18px;">Medical Records</span></center>
        </td>

</tr>
</table>
</div>
</div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>

</main>
</body>



</html>
