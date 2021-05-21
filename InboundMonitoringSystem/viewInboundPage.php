<?php include 'header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"></h1>

	<!-- TEST FORM -->
	<div class="row">
	<!-- 	<div class="col-md-3">
			<small>DISPLAY ALL</small>
			<form name="printByDate" method="post">
				<div class="row">
					<div class="col-md-4">
						<input type="submit" class="form-control btn btn-primary" name="btnDisplayAll" value="DISPLAY">
					</div>
				</div>
			</form>

		</div> -->

		<div class="col-md-6">
			<small>MONTHLY DATE</small>
			<form name="printByMonth" method="get" action="viewInboundPageMonth.php">
				<div class="row">
					<div class="col-md-3">
						<input type="month" required="" name="txtByMonth" class="form-control ">
					</div>

					<div class="col-md-2">
						<input type="submit" class="form-control btn btn-primary" name="btnByMonth" value="DISPLAY">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- END TEST FORM -->

	<br>

	<center><i><h3>ALL DATA</h3></i></center>

	<?php 
		echo displayInboundDataAll();
		if (isset($_POST["btnByMonth"])) {
			echo displayInboundData($_POST["txtByMonth"]);
		}
	?>

	<br>

</div>
<!-- /.container-fluid -->

<?php include 'footer.php'; ?>
