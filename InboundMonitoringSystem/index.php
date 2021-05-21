<?php include 'header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->

	<div class="row">
		<div class="col-md-6">
			<i><h1 class="h3 mb-4 text-gray-800">DATA INBOUND FOR THIS MONTH</h1></i>
		</div>

		<div class="col-md-6">
			<div style="text-align: right;">
				<a href="printPage.php" class="btn btn-primary btn-circle">
					<i class="fas fa-print"></i>
				</a>
			</div>
		</div>
	</div>
      		 <!--   
          <?php 
			  $string = date("d-m-Y");
			  $timestamp = strtotime($string);
			  echo "DAY: <i><b>". date("d", $timestamp); echo "</i></b><br>";
			  echo "MONTH: <i><b>". date("m", $timestamp); echo "</i></b><br>";
			  echo "YEAR: <i><b>". date("Y", $timestamp); echo "</i></b><br>";
			  ?> -->

	<div class="row">
		<div class="col-md-12">
			<?php echo displayInboundDataForThisMonth(); ?>
		</div>
	</div>
	<br><br>

	<!-- <div class="row">
		<div class="col-md-6">
			<i><h1 class="h3 mb-4 text-gray-800">DATA OUTBOUND FOR THIS MONTH</h1></i>
		</div>
		<div class="col-md-6">
			<div style="text-align: right;">
				<a href="#" class="btn btn-primary btn-circle">
					<i class="fas fa-print"></i>
				</a>
			</div>
		</div>
	</div> -->

</div>
<!-- /.container-fluid -->

<?php include 'footer.php'; ?>
