<?php 
include 'header.php';
include 'connection.php';
	
	$myID = $_GET['id'];

	// echo $myID;
	$sqlGetID = "SELECT * FROM tbl_inbound WHERE id='". $myID ."'";
	$getID = $conn->query($sqlGetID);

	$row = mysqli_fetch_array($getID,MYSQLI_ASSOC);

	$date = $row['date'];
	$rrNo = $row['rrNo'];
	$suppName = $row['suppName'];
	$drNo = $row['drNo'];
	$linePerItems = $row['linePerItems'];
	$qty = $row['qty'];
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Inbound Data</h1><br>
	<div class="encodeDiv">
		<form method="post">
			<div class="form-row">
				<div class="col level">
					<small>DATE</small>
					<input type="text" class="form-control" value="<?php echo $date;?>" placeholder="Date" name="txtDate" >
				</div>
				<div class="col level">
					<small>RRNO</small>
					<input type="text" id="rrNo" class="form-control" value="<?php echo $rrNo;?>" placeholder="RR NO" name="txtRRNO">
				</div>
				<?php echo getSupplierName($suppName); ?>
			</div>

			<div class="form-row">
				<div class="col">
					<small>DRNO</small>
					<input type="text" id="drNo" class="form-control" value="<?php echo $drNo;?>" placeholder="DR NUMBER" name="txtDRNo">
				</div>
				<div class="col">
					<small>LINE PER ITEM</small>

					<input type="text" id="linePerItems" class="form-control" value="<?php echo $linePerItems;?>" placeholder="LINE PER ITEMS" name="txtLinePerItems">
				</div>
				<div class="col">
					<small>QTY</small>
					<input type="text" id="qty" class="form-control" value="<?php echo $qty;?>" placeholder="QTY" name="txtQty">
				</div>
			</div>
			<br>
			<?php 
			if (isset($_POST["btnSave"])) {

				$ID = $_GET["id"];

				$txtDate = $_POST["txtDate"]; 
				$txtRRNO = $_POST["txtRRNO"];
				$selectSupplierName = $_POST["selectSupplierName"];
				$txtDRNo = $_POST["txtDRNo"];
				$txtLinePerItems = $_POST["txtLinePerItems"];
				$txtQty = $_POST["txtQty"];
				updateInbound($ID,$txtDate,$txtRRNO,$selectSupplierName,$txtDRNo,$txtLinePerItems,$txtQty);
			}
			?>
			<br><br>
			<div style="text-align: right;">
				<button name="btnSave" id="btnSave" class="btn btn-success btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-check"></i>
					</span>
					<span class="text">Save</span>
				</button>
				<a href="viewInboundPage.php" class="btn btn-secondary btn-icon-split">
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