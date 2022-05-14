
<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hospital Management System</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
<link rel="stylesheet" type="text/css" href="css/background.css"/>

<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
</head>
<body>
<link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">City Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">All Patients Medical Records</h3></div>
</div>
</div>
</div>
<div style="border-radius:10px; padding:10px;" class="container alert-success">
<div class="row">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center"></h4>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Patient Reg No</strong></th>
<th><strong>Patient Name</strong></th>
<th><strong>Date</strong></th>

<th><strong>Disease</strong></th>
<th><strong>Prescribed Medicine</strong></th>


</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `med_rec_db` ORDER BY `pname` DESC ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["pid"]; ?> </td>
    <td align="center"><?php echo $row["pname"]; ?> </td>
    <td align="center"><?php echo $row["date"]; ?></td>
    <td align="center"><?php echo $row["Disease"]; ?></td>
    <td align="center"><?php echo $row["prec_med"]; ?></td>



</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div></div>

</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>

</html>
