<?php include 'auth.php'; ?>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/stylelog.css" media="print">



<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hospital Management System</title>
<script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
</style>
</head>
<body>

<?php
require('connect.php');
$id=$_REQUEST['id'];
$ide=$_REQUEST['id'];
$query = "SELECT * FROM `admit_invo_db` WHERE `Invo_no`='$id'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

$querye = "SELECT `pet_em` FROM `patient` WHERE `pet_id`='$ide'";
$resulte = mysqli_query($con, $querye) or die ( mysqli_error());
$rowe = mysqli_fetch_assoc($resulte);
?>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">City Hospital<br /><small style="font-size:20px">Patient Invoice</small></h1></div>
</div>
</div>

<center>
<form class="form" action="" method="post" id="upform" style="background:#ffd68b; width:600px; font-family:sans-serif; border-radius:20px;font-size:18px; padding:10px;">
  <input type="hidden" name="new" value="1" />
  <table height="500" width="500">
    <tr>
    </tr>
    <tr>
      <td width="400"><strong>Invoice No : </strong></td>
      <td width="200"><strong><?php echo $row["Invo_no"]; ?></strong></td>
    </tr>
  <tr>      
  <td width="250"><strong>Invoice Date : </strong></td>
  <td width="250"><strong><?php echo $row["invo_date"]; ?></strong> </strong></td>

  </tr>

    <tr>

      <td width="200"><strong>Patient Reg No : </strong></td>
      <td width="250"><strong><?php echo $row["pet_no"]; ?></strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Patient Full Name : </strong></td>
      <td width="250"><strong><?php echo $row["pet_name"]; ?></strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Patient Age : </strong></td>
      <td width="250"><strong><?php echo $row["p_age"]; ?></strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Price for Medicines : </strong></td>
      <td width="250"><strong>Rs. <?php echo $row["price_of_med"]; ?>.00</strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Price for Doctors : </strong></td>
      <td width="250"><strong>Rs. <?php echo $row["price_of_doc"]; ?>.00</strong></td>
    </tr>


      <td ><strong>Count of Admited Days</strong></td>
      <td ><strong><?php echo $row["day_count"]; ?></strong></td>

    </tr>
    <tr>
      <td >Price Per 1 room Rs.1000.00<br><strong>Price for Room : </strong></td>
      <td ><strong>Rs. <?php echo $row["price_of_doc"]; ?>.00</strong></td>
    </tr>
    <tr>
      <td ><strong>Service Charge : </strong></td>
      <td ><strong>Rs. <?php echo $row["ser_char"]; ?>.00</strong></td>
    </tr>
    <tr>
      <td ><strong>Total Price : </strong></td>
      <td ><strong>Rs. <?php echo $row["totl"]; ?>.00</strong></td>
    </tr>
  </table>
<br>

<button   class="hidden-print" name=submit type="button" onclick="formPrint()">Print</button>
</center>
  </ul>

  </div>
</form>



</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function formPrint()
  {
    window.print();
  }
</script>
</body>

</html>
