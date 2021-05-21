<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <style type="text/css" media="print">
      @media print{@page {size: landscape}}

      .container-fluid{
        font-size: 12px;
      }
  </style>

  <?php
  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  ?>
  <title><?php echo "IMR-". generateRandomString(); ?></title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <?php $year = date("Y"); ?>
  <?php include 'function.php';
      $dateData =  $_GET['txtMonth'];

      $timestamp = strtotime($dateData);
      $xMonth = date("F" , $timestamp);
      $xMonth = strtoupper($xMonth);
      $xYear = date("Y" , $timestamp);

   ?>
</head>
<body onload="window.print()">  
  <div class="container">

    <br>
    <h4 style="color: black;">INBOUND MONITORING REPORT • <?php echo $xMonth; echo " "; echo $xYear; ?></h4><br>
    <div class="row">
      <div class="col-3">
        <p>TOTAL NO. OF SUPPLIER:<span><b> <?php echo sumSupplier($dateData); ?> </b></span></p>
      </div>
      <div class="col-3">
        <p>TOTAL LINE PER ITEM:<span><b> <?php echo sumLinePerItmes($dateData); ?> </b></span></p>
      </div>
      <div class="col-3">
        <p>TOTAL NO. OF QTY:<span><b> <?php echo sumQty($dateData);?> </b></span></p>
      </div>
    </div>
    <?php 
      echo printInboundMonitoring($dateData);
    ?>

  </div>
</body>
</html>


