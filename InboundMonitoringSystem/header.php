<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/serviceparts.png" type="image/ico">

  <title>SERVICE PARTS INBOUND M.S</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


  <link rel="stylesheet" type="text/css" href="../font.css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <?php $year = date("Y"); ?>

  <?php include 'function.php'; ?>

</head>

<body id="page-top">

  <?php
  session_start();
  if ( isset( $_SESSION['user_id'] ) ) {
      // Grab user data from the database using the user_id
      // Let them access the "logged in only" pages
  } else {
      // Redirect them to the login page
    echo "<script>
    alert('Please LOGIN FIRST!');
    window.location.href='login.php';
    </script>";
      // header("Location: login.php");
  }
  ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <center>
        <img src="img/company-logo-white.png" id="company-logo" class="d-logo"> <br>
      </center>      

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>

        <div class="sidebar-brand-text mx-3"><small><b>SERVICE PARTS MONITORING SYSTEM</b></small></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-home"></i>
          <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Interface
        </div>

        <li class="nav-item" >
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-truck-loading"></i>
            <span>Inbound Monitoring</span>
          </a>
          <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Inbound Components:</h6>
              <a class="collapse-item" href="encode.php"><i id="d-icon" class="fas fa-plus-circle"></i> Encode Data</a>
              <a class="collapse-item" href="viewInboundPage.php"><i id="d-icon" class="fas fa-eye"></i> View All Data</a>
            </div>
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Supplier Components:</h6>
              <a class="collapse-item" href="addSupplier.php"><i id="d-icon" class="fas fa-plus-circle"></i> Add Supplier</a>
              <a class="collapse-item" href="viewSupplier.php"><i id="d-icon" class="fas fa-eye"></i> View All Supplier</a>
            </div>
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Signature COMPONENTS:</h6>
              <a class="collapse-item" href="addSignature.php"><i id="d-icon" class="fas fa-plus-circle"></i> Add Signature</a>
              <a class="collapse-item" href="viewSignature.php"><i id="d-icon" class="fas fa-eye"></i> View All Signature</a>
            </div>

            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Print COMPONENTS:</h6>
              <a class="collapse-item" href="printPage.php"><i id="d-icon" class="fas fa-print"></i> Print Data</a>
            </div>

          </div>
        </li> 


        <li class="nav-item" >
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-shipping-fast"></i>
            
            <span>Outbound Monitoring</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Outbound Components:</h6>
            <a class="collapse-item" href="../OutBoundMonitoringSystem/displayGatepass.php"><i id="d-icon" class="fas fa-save"></i> GATEPASS DATA</a>
          </div>

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gatepass Components:</h6>
            <a class="collapse-item" href="../OutBoundMonitoringSystem/addGatePass.php"><i id="d-icon" class="fas fa-plus-circle"></i> Add GatePass</a>
            <a class="collapse-item" href="../OutBoundMonitoringSystem/viewGatepass.php"><i id="d-icon" class="fas fa-eye"></i> View All GatePass</a>
          </div>

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Broker Components:</h6>
            <a class="collapse-item" href="../OutBoundMonitoringSystem/addBroker.php"><i id="d-icon" class="fas fa-plus-circle"></i> Add Broker</a>
            <a class="collapse-item" href="../OutBoundMonitoringSystem/viewBroker.php"><i id="d-icon" class="fas fa-eye"></i> View All Broker</a>
          </div>

        <!--     <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Destination COMPONENTS:</h6>
              <a class="collapse-item" href="addDestination.php"><i id="d-icon" class="fas fa-plus-circle"></i> Add Destination</a>
              <a class="collapse-item" href="viewDestination.php"><i id="d-icon" class="fas fa-eye"></i> View All Destination</a>
            </div> -->
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Print COMPONENTS:</h6>
              <a class="collapse-item" href="../OutBoundMonitoringSystem/printPage.php"><i id="d-icon" class="fas fa-print"></i> Print Data</a>
            </div>
          </div>
        </li> 

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- TOP HEADER DATE -->
            <?php 
            // echo "<small>". date("d-M-Y")." &nbsp | &nbsp&nbsp</small>"; 
            // =-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-=


            $string = date("d-m-Y");
            $timestamp = strtotime($string);
            echo "<b>". date("d", $timestamp); echo "</b>";
            echo "&nbsp&nbsp<b>". strtoupper(date("F", $timestamp)); echo "</b>";
            echo "&nbsp&nbsp<b>". date("Y", $timestamp); echo "</b>";
            // $day =  date("d", $timestamp);
            // $month =  date("F", $timestamp);
            // $year =  date("Y", $timestamp);
            // echo "&nbsp&nbsp[\$day";        
            // echo "&nbsp&nbsp\$month";      
            // echo "&nbsp&nbsp\$year]";
            // =-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==-==
            ?>
            <!-- END TOP HEADER DATE -->

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>





            <ul class="navbar-nav ml-auto">


              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>

              </li>

              <p style="margin-top: 23px;"><i><small>こんにちは!</small></i></p>
              <!-- Nav Item - Alerts -->

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>Admin</b></span>
                  <img class="img-profile rounded-circle" src="img/admin-icon-3.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->
