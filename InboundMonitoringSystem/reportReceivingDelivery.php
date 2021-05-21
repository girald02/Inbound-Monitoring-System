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
  <title><?php echo "REM-". generateRandomString(); ?></title>
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

  $toPerson = $_GET['toPerson'];
  $toPersonPosition = getPosition($toPerson);

  $preparedPerson =  $_GET['preparedPerson'];
  $preparedPersonPosition = getPosition($preparedPerson);

  $notedPerson =  $_GET['notedPerson'];
  $notedPersonPosition = getPosition($notedPerson);

  $aprrovedPerson1 =  $_GET['aprrovedPerson1'];
  $aprrovedPerson1Position = getPosition($aprrovedPerson1);

  $aprrovedPerson2 =  $_GET['aprrovedPerson2'];
  $aprrovedPerson2Position = getPosition($aprrovedPerson2);

  $aprrovedPerson3 =  $_GET['aprrovedPerson3'];
  $aprrovedPerson3Position = getPosition($aprrovedPerson3);

  $dateData =  $_GET['txtMonth'];

  ?>
</head>
<body onload="window.print()" id="rrd">  
  <br>
  <div class="container">
    <img src="img/company-logo.png" id="company-logo">
    <p>To :&nbsp&nbsp&nbsp <span class="r-head">Toyota Motor Philippines Logistics. Inc.</span></p>
    <p>Attn : <span class="r-name"><?php echo $toPerson; ?></span></p>
    <span class="r-posi"><?php echo $toPersonPosition; ?></span>
    <p>Re :&nbsp&nbsp&nbsp&nbsp<span class="r-title">RECEIVING DELIVERY</span></p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i><u>Control Number:</u></i>&nbsp&nbsp&nbsp&nbsp&nbsp<i style="font-size: 18px; font-weight: 100;"><b>GAP-</b>
      <?php
      $dateData =  $_GET['txtMonth'];
      $timestamp = strtotime($dateData);
      $xMonth = date("m" , $timestamp);
      $xMonth = strtoupper($xMonth);
      $xYear = date("Y" , $timestamp);
        echo $xYear."-".$xMonth; //   Control Number:     GAP- 2020-02
        ?>
      </i></p>

      <?php 
          echo printReceivingDelivery($dateData); // DISPLAY TABLE
          ?>

          <div class="footer">
            <div class="row">
              <div class="col-4">
                <?php 
                if(!$preparedPerson == ""){
                  ?>
                  <p><i>Prepared by:</i></p>
                  <p id="line-foot">______________________________________________</p>
                  <p id="foot-name"><b><i><?php echo $preparedPerson; ?></i></b><br>
                   <i><?php echo $preparedPersonPosition; ?></i></p>

                 <?php
                 }
                 ?>

                 <?php 
                 if(!$notedPerson == ""){
                  ?>
                  <p><i>Noted by:</i></p>
                  <p id="line-foot">______________________________________________</p>
                  <p id="foot-name"><b><i><?php echo $notedPerson; ?></i></b><br>
                   <i><?php echo $notedPersonPosition; ?></i></p>
                <?php
                 }
                 ?>
               </div>

               <div class="col-2">
               </div>

               <div class="col-6">
                <p><i>Approved by:</i></p>

                <?php 
                if(!$aprrovedPerson1 == "" || !$aprrovedPerson2 == ""){
                  ?>
                  <p id="line-foot">______________________________________________</p>
                  <p id="foot-name"><b><i><?php echo $aprrovedPerson1; ?> <?php if(!$aprrovedPerson1 == "" && !$aprrovedPerson2 == "" ){echo "&nbsp&nbsp&nbsp&nbsp/&nbsp&nbsp&nbsp&nbsp";}else{echo "";} ?> <?php echo $aprrovedPerson2; ?></i></b><br>
                   <i><?php echo $aprrovedPerson1Position; ?>  <?php if(!$aprrovedPerson1 == "" && !$aprrovedPerson2 == "" ){echo "&nbsp&nbsp&nbsp&nbsp/&nbsp&nbsp&nbsp&nbsp";}else{echo "";} ?> <?php echo $aprrovedPerson2Position; ?></i></p>
                   <p id="space-foot"><i>*</i></p>
                 <?php
                 }
                 ?> 

                 <?php 
                 if(!$aprrovedPerson3 == ""){
                  ?>
                  <p id="line-foot">______________________________________________</p>
                  <p id="foot-name"><b><i><?php echo $aprrovedPerson3; ?></i></b><br>
                   <i><?php echo $aprrovedPerson3Position; ?></i></p>
                 <?php
                 }
                 ?>

               </div>
             </div>
             <br>
           </div>
         </div>
       </body>
       </html>


