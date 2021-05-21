<?php include 'header.php'; ?>


<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">ADD SUPPLIER</h1><br>

	<div class="encodeDiv">
		<form method="post">
			<div class="form-row">
				<div class="col-md-4">
					<input required="" autofocus="" type="text" class="form-control" placeholder="Supplier Name" name="txtSupplierName">
				</div>
			</div>
			<br>
			<?php 
			if (isset($_POST["btnSave"])) {
				$txtSupplierName = $_POST["txtSupplierName"]; 
					echo validateSupplier($txtSupplierName);
			}
			?>
			<br><br>
			<div style="text-align: left;">
				<button name="btnSave" class="btn btn-success btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-check"></i>
					</span>
					<span class="text">Save</span>
				</button>
				<a href="viewSupplier.php" class="btn btn-secondary btn-icon-split">
					<span class="icon text-white-50">
						<i class="fa fa-close"></i>
					</span>
					<span class="text">Cancel</span>
				</a>
			</div>
		</form>
	</div>
</div>

<?php include 'footer.php'; ?>