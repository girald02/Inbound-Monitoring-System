<?php include 'header.php';
include 'connection.php';

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<center>
				<h1>EXPORT SUMMARY LIST</h1>
				<small>SPECIFIC DATE</small>
				<form name="printByDate" method="get" action="reportExportSummary.php" target="_blank">
					<input type="date" required="true" name="txtDate" class="form-control col-md-6">

					
					<!-- <small>NO. OF SPACING</small> -->
					<!-- <input type="number" min="0" required="true" name="txtNoOfSpacing" class="form-control col-md-2"> -->

					<br>
					<!-- <small>1st RECEIVE NAME</small>
					<?php 
					$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
					$getSupplier = $conn->query($sql);

					if ($getSupplier->num_rows > 0) {
						echo "
						<div class='col'>
						<div class='form-group col-md-6'>
						<select class='form-control' id='selectSignature' name='selectSignatureOne'> 
						";		
						echo "<option></option>";
					}

					while($row = $getSupplier->fetch_assoc()) {
						echo "<option>". $row["name"] ." </option>";
					}
					echo "
					</select> 
					</div>
					</div>";

					?>

					<small>2nd RECEIVE NAME</small>
					<?php 
					$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
					$getSupplier = $conn->query($sql);

					if ($getSupplier->num_rows > 0) {
						echo "
						<div class='col'>
						<div class='form-group col-md-6'>
						<select class='form-control' id='selectSignature' name='selectSignatureTwo'> 
						";
						echo "<option></option>";
					}

					while($row = $getSupplier->fetch_assoc()) {
						echo "<option>". $row["name"] ." </option>";
					}
					echo "
					</select> 
					</div>
					</div>";
					
					?>
					<p>WITH UNDERLINE?</p>
					<input type="radio" name="rdoUnderline" value="yes"> YES
					<input type="radio" name="rdoUnderline" value="no"> NO
					<br>
					<br> -->
					<input type="submit" name="btnPrintDate" value="PRINT" class='btn btn-primary'>
				</form>
			</center>
		</div>

		<!-- ======================================================================================== -->

		<div class="col-md-6">
			<center>
				<h1>RECEIVING DELIVERY</h1>
				<form name="printByMonth" method="get" action="reportReceivingDelivery.php" target="_blank">


					<small>ATTN:</small>

					<?php 
					$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
					$getSupplier = $conn->query($sql);

					if ($getSupplier->num_rows > 0) {
						echo "
						<div class='col'>
						<div class='form-group col-md-6'>
						<select class='form-control' id='selectSignature' required name='toPerson'> 
						";
						echo "<option></option>";
					}

					while($row = $getSupplier->fetch_assoc()) {
						echo "<option ";

						if ($row["name"] == "Larry Tejano") {
							echo "selected";
						}
						echo "
						>". $row["name"] ." </option>";
					}
					echo "
					</select> 
					</div>
					</div>";
					
					?>


					<small>MONTHLY DATE:</small>

					<input type="month" required="true" name="txtMonth" class="form-control col-md-6"><br>

					<small>PREPARED BY:</small>

					<?php 
					$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
					$getSupplier = $conn->query($sql);

					if ($getSupplier->num_rows > 0) {
						echo "
						<div class='col'>
						<div class='form-group col-md-6'>
						<select class='form-control' id='selectSignature' required name='preparedPerson'> 
						";
						echo "<option></option>";
					}

					while($row = $getSupplier->fetch_assoc()) {
						echo "<option ";

						if ($row["name"] == "Mr. Remo Custodio") {
							echo "selected";
						}
						echo "
						>". $row["name"] ." </option>";
					}
					echo "
					</select> 
					</div>
					</div>";
					
					?>

					<small>NOTED BY:</small>

					<?php 
					$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
					$getSupplier = $conn->query($sql);

					if ($getSupplier->num_rows > 0) {
						echo "
						<div class='col'>
						<div class='form-group col-md-6'>
						<select class='form-control' id='selectSignature' required name='notedPerson'> 
						";
						echo "<option></option>";
					}

					while($row = $getSupplier->fetch_assoc()) {
						echo "<option ";

						if ($row["name"] == "Ms. Lerma Eti") {
							echo "selected";
						}
						echo "
						>". $row["name"] ." </option>";
					}
					echo "
					</select> 
					</div>
					</div>";
					
					?>


					<small>APPROVED BY:</small>

					<div class="row">
						<div class="col-6">
							<?php 
							$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
							$getSupplier = $conn->query($sql);

							if ($getSupplier->num_rows > 0) {
								echo "
								<div class='col'>
								<select class='form-control' id='selectSignature' name='aprrovedPerson1'> 
								";
								echo "<option ></option>";
							}

							while($row = $getSupplier->fetch_assoc()) {
								echo "<option ";

								if ($row["name"] == "Mr. K. Iwashita") {
									echo "selected";
								}
								echo "
								>". $row["name"] ." </option>";
							}
							echo "
							</select> 
							</div>";

							?>
						</div>

						<center style="position: absolute;left: 49%;margin-top: 6px;">
							/
						</center>
						<div class="col-6">

							<?php 
							$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
							$getSupplier = $conn->query($sql);

							if ($getSupplier->num_rows > 0) {
								echo "
								<div class='col'>
								<select class='form-control'  id='selectSignature' name='aprrovedPerson2'> 
								";
								echo "<option></option>";
							}

							while($row = $getSupplier->fetch_assoc()) {
								echo "<option ";

								if ($row["name"] == "Mr. Daisuke Yamada") {
									echo "selected";
								}
								echo "
								>". $row["name"] ." </option>";
							}
							echo "
							</select> 
							</div>";
							
							?>
						</div>

						<br>
						<br>
						<div class="col-12">
							<center>
								<div class="col-6">
									<?php 
									$sql = "SELECT * FROM tbl_signature ORDER BY name ASC";
									$getSupplier = $conn->query($sql);
									if ($getSupplier->num_rows > 0) {
										echo "
										<div class='col'>
										<select class='form-control'  id='selectSignature' name='aprrovedPerson3'> 
										";
										echo "<option></option>";
									}
									while($row = $getSupplier->fetch_assoc()) {
										echo "<option ";

										if ($row["name"] == "Mr. M. Kurita") {
											echo "selected";
										}
										echo "
										>". $row["name"] ." </option>";
									}
									echo "
									</select> 
									</div>";

									?>
								</div>
							</center>
						</div>

					</div>
					

					<br>
					<input type="submit" name="btnPrintMonth" value="PRINT" class='btn btn-primary'>



				</form>


			</center>
		</div>


	</div>
</div>
<br><br><br>
<div class="container-fluid">
	<div class="row">
		<!-- ======================================================================================== -->



		<div class="col-md-12">
			<center>
				<h1>INBOUND MONITORING REPORT</h1>
				<small>MONTHLY DATE</small>
				<form name="printByMonth" method="get" action="reportInboundMonitoring.php" target="_blank">
					<input type="month" required="true" name="txtMonth" class="form-control col-md-6"><br>
					<input type="submit" name="btnPrintMonth" value="PRINT" class='btn btn-primary'>
				</form>
			</center>
		</div>



	</div>
</div>
<br><br>
<?php include 'footer.php'; ?>