<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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
  <title><?php echo "ESL-". generateRandomString(); ?></title>
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
  <?php include 'function.php'; ?>
</head>
<!-- AUTO PRINT -->
<body onload="window.print()" id="res">  
  <div class="container">
    <br>
    <?php 
    $dateData =  $_GET['txtDate'];
    // $selectSignatureOne =  $_GET['selectSignatureOne'];
    // $selectSignatureTwo =  $_GET['selectSignatureTwo'];

    // $noOfSpacing  = $_GET['txtNoOfSpacing'];

    echo "<br>";
    echo printExportSummary($dateData);


    echo "<br>";
    echo "<br>";


    // echo printExportSummary($dateData);
    // $tssq = breaklineforreport($dateData);
    // 
    // if ($tssq == 6) {
    //   for ($i=1; $i <= $tssq ; $i++) { 
    //     echo $i; echo "<br>";
    //   }
    // }
    // else{
    //   $tssq = 5;
    //   for ($i=1; $i <= $tssq ; $i++) { 
    //     echo $i; echo "<br>";
    //   }
    // }
    // for($i = 0 ; $i <= $noOfSpacing; $i++){
    //   echo "<br>";
    // }
    // echo printExportSummary($dateData);
    ?>
  </div>


  <!--   <div class="row">
      <div class="col-3">
        <p><b>Date:</b></p>
        <p><b>Supplier:</b></p>
      </div>
        <div class="col-9">
        <p><b id="underlineDate">DATENOW</b></p>
        <p><b id="underline">Supplier:</b></p>
      </div>
    </div> -->

<!-- 
    <div class="footer-talble">
      <div class="row">
        <div class="col-3">
          <p>Prepared by:</p>
          <p>____________________________________________</p>
          <b><p>MR. REMO C. CUSTODIO</p></b>
          <small>IMPEX-Supervisor</small>
        </div>
        <div class="col-9">
          <div style="text-align: center;">
            <p style="color: #fff">-</p>
            <p>____________________________________________</p>
            <i><small>Signature over printed name</small></i>
          </div>
        </div>
      </div>
    </div>

  -->

  <br><br>
       <!--      <div class="row">
              <div class="col-3">
               <p><u><?php echo $selectSignatureOne; ?></u></p>
             </div>
             <div class="col-3">
               <p><u><?php echo $selectSignatureTwo; ?></u></p>
             </div>
             <div class="col-2">
              <?php
              if (isset($_GET['rdoUnderline'])) {

               if ($_GET['rdoUnderline']=='yes') {
                 echo "________________________________";
               }else{
                 echo "";
               }
               echo "";
             }
             ?>
           </div>
         </div> -->

       </body>
       </html>



