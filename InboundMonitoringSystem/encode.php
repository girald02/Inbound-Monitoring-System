<?php include 'header.php';

$sesSupname ="";
			 // $todayDate  = date("d-F");
$todayDate = date("d-F", strtotime('-24 hours', time())); 
 ////time() is default so you do not need to specify.

$timestamp = strtotime($todayDate);

$thisDay = date('d' , $timestamp);
$thisMonth = date('M' , $timestamp);


if (isset($_POST["btnSave"])) {

	$_SESSION["selectSupplierName"] = $_POST["selectSupplierName"];

	$sesSupname = $_SESSION["selectSupplierName"];

	$txtDate = $_POST["txtDate"]; 
	$txtRRNO = $_POST["txtRRNO"];
	$selectSupplierName = $_POST["selectSupplierName"];
	$txtDRNo = $_POST["txtDRNo"];
	$txtLinePerItems = $_POST["txtLinePerItems"];
	$txtQty = $_POST["txtQty"];
	addInboundData($txtDate,$thisDay,$year,$txtRRNO,$selectSupplierName,$txtDRNo,$txtLinePerItems,$txtQty);
}

?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Encode Data</h1><br>

	<div class="encodeDiv">
		<form method="post">
			<div class="form-row">
				<div class="col">

					<input type="text" class="form-control" placeholder="Date" value="<?php echo $thisDay; echo'-';echo $thisMonth;?>" name="txtDate" readOnly>

				<!-- 	<label id="suppTitle" for="sel1">Date:</label>
					<input type="date" name="txtDate" class="form-control" name="txtDate"> -->
				</div>
				<div class="col">
					<input required="" autofocus="" type="text" class="form-control" placeholder="RR NO" name="txtRRNO" value="<?php if(isset($_POST["txtRRNO"])){echo $_POST["txtRRNO"];} ?>">
				</div>

				<?php echo getSupplierName($sesSupname); ?>

			</div>

			<div class="form-row">
				<div class="col">
					<input required type="text" class="form-control" placeholder="DR NUMBER" name="txtDRNo">
				</div>
				<div class="col">
					<input required type="text" class="form-control" placeholder="LINE PER ITEMS" name="txtLinePerItems">
				</div>
				<div class="col">
					<input required type="text" class="form-control" placeholder="QTY" name="txtQty">
				</div>
			</div>
			<br>

			<br><br>
			<div style="text-align: right;">
				<button name="btnSave" class="btn btn-success btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-check"></i>
					</span>
					<span class="text">Save</span>
				</button>
				<a href="index.php" class="btn btn-secondary btn-icon-split">
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