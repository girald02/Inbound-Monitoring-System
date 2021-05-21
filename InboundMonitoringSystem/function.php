
<?php 

	// SLQ FOR TOTAL OF SUPPLIER
	// SELECT COUNT(DISTINCT suppName) AS Count FROM tbl_inbound

	// SQL FOR SPECIFIC DATE FOR lineperItems
	// SELECT SUM(`lineperItems`) AS test FROM tbl_inbound WHERE date LIKE "%FEB%" AND year="2020"

	// SQL FOR SPECIFIC DATE FOR QTY
	// SELECT SUM(`qty`) AS test FROM tbl_inbound WHERE date LIKE "%FEB%" AND year="2020"

	// SQL FOR SPECIFIC DATE AND MONTH AND YEAR
	// SELECT * FROM `tbl_inbound` WHERE date LIKE "%FEB%" AND date LIKE "%10%"


// INSERT DATA
function addInboundData($txtDate,$thisDay,$year,$txtRRNO,$selectSupplierName,$txtDRNo,$txtLinePerItems,$txtQty){
	require 'connection.php';

	$sql = "INSERT INTO tbl_inbound (`date`,`day`,`year`,`rrNo`, `suppName`, `drNo`, `linePerItems`, `qty`) VALUES ('".$txtDate."','".$thisDay."','".$year."','". $txtRRNO . "','" . $selectSupplierName . "','" . $txtDRNo . "','" . $txtLinePerItems . "','" . $txtQty ."');" ;

	if ($conn->query($sql) === TRUE) {
		echo "
		<script>
			alert('Data has been added!');
			</script>
		";
	} else {
		$conn->error;
	}
}

function addSupplierName($txtSupplierName){
	require 'connection.php';

	$txtSupplierName = strtoupper($txtSupplierName);

	$sql = "INSERT INTO tbl_supplier (`suppName`) VALUES ('".$txtSupplierName."');" ;

	if ($conn->query($sql) === TRUE) {
		echo "
		<div class='alert alert-success' role='alert'>
		Record added successfully!
		</div>";
	} else {
		$conn->error;
	}
}

function addSignatureName($txtSignatureName,$txtPosition){
	require 'connection.php';

	// $txtSignatureName = strtoupper($txtSignatureName);

	$sql = "INSERT INTO tbl_signature (`name`,`position`) VALUES ('".$txtSignatureName."', '".$txtPosition."');" ;

	if ($conn->query($sql) === TRUE) {
		echo "
		<div class='alert alert-success' role='alert'>
		Record added successfully!
		</div>";
	} else {
		$conn->error;
	}
}

// DISPLAY DATA
function displayInboundData($txtByMonth){
	require 'connection.php';

	// echo $txtByMonth; echo "<br>";

	$timestamp1 = strtotime($txtByMonth);

	$byMonth = date("M" , $timestamp1);
	$byYear = date("Y" , $timestamp1);

	// echo $byMonth; echo "<br>"; echo $byYear;


	$sql = "SELECT * FROM tbl_inbound WHERE `year` LIKE '%".$byYear."%' AND `date` LIKE '%".$byMonth."%'";
	$displayInboundData = $conn->query($sql);

	if ($displayInboundData->num_rows > 0) {
		echo "
		<table class='table' 'table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
		<tr>
		<th scope='col'>ID</th>
		<th scope='col'>DATE</th>
		<th scope='col'>YEAR</th>
		<th scope='col'>RR NO.</th>
		<th scope='col'>SUPPLIER NAME</th>
		<th scope='col'>DR NUMBER</th>
		<th scope='col'>LINE PER ITEMS</th>
		<th scope='col'>QTY</th>
		<th scope='col'>ACTION</th>
		</tr>
		</thead>
		<tbody>";
	}
	else{
		echo "NO DATA........";
	}
	while($row = $displayInboundData->fetch_assoc()) {
		echo "
		<tr>
		<th>". $row['id']. "</th>
		<th>". $row['date']. "</th>
		<td>" . $row['year']. "</td>
		<td>" . $row['rrNo']. "</td>
		<td>" . $row['suppName']. "</td>
		<td>" . $row['drNo']. "</td>
		<td>" . $row['linePerItems']. "</td>
		<td>" . $row['qty']. "</td>
		<td>  

		<form class='deleteFORM' name='deleteForm' method='POST'> 
		<a href=editInbound.php?id=". $row['id']. ">
		<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-edit'>Edit</i>
		</button>
		</a>

		<button value='". $row['id'] ."' name='btnDeleteData' type='submit' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-trash'></i>
		</button>
		</form>
		</td>
		</tr>";
	}

	echo "  
	</tbody>
	</table>
	";

	// WITH DELETE
	if (isset($_POST['btnDeleteData'])) {
		$deleteID = $_POST['btnDeleteData'];
		$sql = "DELETE FROM `tbl_inbound` WHERE id='". $deleteID ."'";
		if ($conn->query($sql) === TRUE) {
			echo "
			<script>
			alert('Data has been deleted!');
			window.location.href='viewInboundPage.php';
			</script>
			";
		} else {
			$conn->error;
		}							
	}
}

// DISPLAY DATA
function displayInboundDataAll(){
	require 'connection.php';

	$sql = "SELECT * FROM tbl_inbound ORDER BY id DESC ";
	$displayInboundData = $conn->query($sql);

	if ($displayInboundData->num_rows > 0) {
		echo "
		<table class='table' 'table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
		<tr>
		<th scope='col'>ID</th>
		<th scope='col'>DATE</th>
		<th scope='col'>YEAR</th>
		<th scope='col'>RR NO.</th>
		<th scope='col'>SUPPLIER NAME</th>
		<th scope='col'>DR NUMBER</th>
		<th scope='col'>LINE PER ITEMS</th>
		<th scope='col'>QTY</th>
		<th scope='col'>ACTION</th>
		</tr>
		</thead>
		<tbody>";
	}
	else{
		echo "NO DATA........";
	}
	while($row = $displayInboundData->fetch_assoc()) {
		echo "
		<tr>
		<th>". $row['id']. "</th>
		<th>". $row['date']. "</th>
		<td>" . $row['year']. "</td>
		<td>" . $row['rrNo']. "</td>
		<td>" . $row['suppName']. "</td>
		<td>" . $row['drNo']. "</td>
		<td>" . $row['linePerItems']. "</td>
		<td>" . $row['qty']. "</td>
		<td>  

		<form class='deleteFORM' name='deleteForm' method='POST'> 
		<a href=editInbound.php?id=". $row['id']. ">
		<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-edit'>Edit</i>
		</button>
		</a>

		<button value='". $row['id'] ."' name='btnDeleteData' type='submit' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-trash'></i>
		</button>
		</form>
		</td>
		</tr>";
	}

	echo "  
	</tbody>
	</table>
	";

	// WITH DELETE
	if (isset($_POST['btnDeleteData'])) {
		$deleteID = $_POST['btnDeleteData'];
		$sql = "DELETE FROM `tbl_inbound` WHERE id='". $deleteID ."'";
		if ($conn->query($sql) === TRUE) {
			echo "
			<script>
			alert('Data has been deleted!');
			window.location.href='viewInboundPage.php';
			</script>
			";
		} else {
			$conn->error;
		}							
	}
}

// DISPLAY DATA FOR THIS MONTH

// DISPLAY DATA
function displayInboundDataForThisMonth(){
	require 'connection.php';

	$thisMonth = date('M');
	$thisYear = date('Y');


	$sql = "SELECT * FROM tbl_inbound WHERE `year` LIKE '%".$thisYear."%' AND `date` LIKE '%".$thisMonth."%'";
	$displayInboundDataForThisMonth = $conn->query($sql);

	if ($displayInboundDataForThisMonth->num_rows > 0) {
		echo "
		<table class='table' 'table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
		<tr>
		<th scope='col'>DATE</th>
		<th scope='col'>YEAR</th>
		<th scope='col'>RR NO.</th>
		<th scope='col'>SUPPLIER NAME</th>
		<th scope='col'>DR NUMBER</th>
		<th scope='col'>LINE PER ITEMS</th>
		<th scope='col'>QTY</th>
		</tr>
		</thead>
		<tbody>";
	}
	else{
		echo "NO DATA........";
	}
	while($row = $displayInboundDataForThisMonth->fetch_assoc()) {
		echo "
		<tr>
		<th scope='row'>". $row['date']. "</th>
		<td>" . $row['year']. "</td>
		<td>" . $row['rrNo']. "</td>
		<td>" . $row['suppName']. "</td>
		<td>" . $row['drNo']. "</td>
		<td>" . $row['linePerItems']. "</td>
		<td>" . $row['qty']. "</td>
		</tr>";
	}

	echo "  
	</tbody>
	</table>
	";

}

// DISPLAY AND FOR UPDATING  
// note : parameters "none" for display
// note : parameters $suppName for Update Select option
function getSupplierName($suppName){
	require 'connection.php';


	$sql = "SELECT * FROM tbl_supplier ORDER BY suppName ASC";
	$getSupplier = $conn->query($sql);

	if ($getSupplier->num_rows > 0) {
		echo "
		<div class='col'>
		<div class='form-group'>
		<label id='suppTitle' for='sel1'>Supplier Name:</label>
		<select class='form-control' id='selectSupplierName' name='selectSupplierName'> 
		";		
	}

	while($row = $getSupplier->fetch_assoc()) {

		if ($suppName == $row["suppName"]) {
			echo "<option selected>". $row["suppName"] ." </option>";
		}
		else{
			echo "
			<option>".$row["suppName"]."</option>
			";
		}
	}
	echo "
	</select> 
	</div>
	</div>
	";
}

function displaySupplier(){
	require 'connection.php';

	$sql = "SELECT * FROM tbl_supplier";
	$displaySupplier = $conn->query($sql);

	if ($displaySupplier->num_rows > 0) {
		echo "
		<table class='table' 'table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
		<tr>
		<th scope='col'>ID</th>
		<th scope='col'>SUPPLIER NAME</th>
		<th scope='col'>ACTION</th>
		</tr>
		</thead>
		<tbody>";
	}
	else{
		echo "NO DATA........";
	}
	while($row = $displaySupplier->fetch_assoc()) {
		echo "
		<tr>
		<th scope='row'>". $row['id']. "</th>
		<td>" . $row['suppName']. "</td>
		<td>  
		<form class='deleteFORM' name='deleteForm' method='POST'> 

		<a href=editSupplier.php?id=". $row['id']. "><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-edit'>Edit</i>
		</button>
		</a>

		<button value='". $row['id'] ."' name='btnDeleteData' type='submit' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-trash'></i>
		</button>
		</form>
		</td>
		</tr>";
	}

	echo "  
	</tbody>
	</table>
	";


	// WITH DELETE
	if (isset($_POST['btnDeleteData'])) {
		$deleteID = $_POST['btnDeleteData'];
		$sql = "DELETE FROM `tbl_supplier` WHERE id='". $deleteID ."'";
		if ($conn->query($sql) === TRUE) {
			echo "
			<script>
			alert('Data has been deleted!');
			window.location.href='viewSupplier.php';
			</script>
			";
		} else {
			$conn->error;
		}							
	}
}

function displaySignature(){
	require 'connection.php';

	$sql = "SELECT * FROM tbl_signature";
	$displaySignature = $conn->query($sql);

	if ($displaySignature->num_rows > 0) {
		echo "
		<table class='table' 'table-bordered' id='dataTable' width='100%' cellspacing='0'>
		<thead>
		<tr>
		<th scope='col'>ID</th>
		<th scope='col'>SIGNATURE NAME</th>
		<th scope='col'>POSITION</th>
		<th scope='col'>ACTION</th>
		</tr>
		</thead>
		<tbody>";
	}
	else{
		echo "NO DATA........";
	}
	while($row = $displaySignature->fetch_assoc()) {
		echo "
		<tr>
		<th scope='row'>". $row['id']. "</th>
		<td>" . $row['name']. "</td>
		<td>" . $row['position']. "</td>
		<td>  
		<form class='deleteFORM' name='deleteForm' method='POST'> 

		<a href=editSignature.php?id=". $row['id']. "><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-edit'>Edit</i>
		</button>
		</a>

		<button value='". $row['id'] ."' name='btnDeleteData' type='submit' class='btn btn-danger' data-toggle='modal' data-target='#exampleModal'>
		<i class='fas fa-trash'></i>
		</button>
		</form>
		</td>
		</tr>";
	}

	echo "  
	</tbody>
	</table>
	";

	// WITH DELETE
	if (isset($_POST['btnDeleteData'])) {
		$deleteID = $_POST['btnDeleteData'];
		$sql = "DELETE FROM `tbl_signature` WHERE id='". $deleteID ."'";
		if ($conn->query($sql) === TRUE) {
			echo "
			<script>
			alert('Data has been deleted!');
			window.location.href='viewSignature.php';
			</script>
			";
		} else {
			$conn->error;
		}							
	}
}

// UPDATE DATA
function updateInbound($id,$txtDate,$txtRRNO,$selectSupplierName,$txtDRNo,$txtLinePerItems,$txtQty){
	require 'connection.php';

	$updateSQL = "UPDATE tbl_inbound SET `date`='". $txtDate ."', rrNo='". $txtRRNO ."', suppName='". $selectSupplierName ."', drNo='". $txtDRNo ."', linePerItems='". $txtLinePerItems ."', qty='". $txtQty ."' WHERE id='". $id ."'";
	if ($conn->query($updateSQL) === TRUE) {
		echo "

		<script type='text/javascript'>
		function reDirect() {
			alert('Update successfully!');
			window.location.replace('editInbound.php?id=$id');
		}
		setTimeout(reDirect, 10);
		</script>
		";
	} else {
		$conn->error;
	}
}

function updateSupplierName($id,$suppName){
	require 'connection.php';

	$updateSQL = "UPDATE tbl_supplier SET `suppName`='". $suppName ."' WHERE id='". $id ."'";
	if ($conn->query($updateSQL) === TRUE) {
		echo "

		<script type='text/javascript'>
		function reDirect() {

			alert('Update successfully!');
			window.location.replace('editSupplier.php?id=$id');
		}
		setTimeout(reDirect, 10);
		</script>
		";
	} else {
		$conn->error;
	}
}

function updateSignatureName($id,$signatureName,$signaturePosition){
	require 'connection.php';

	$updateSQL = "UPDATE tbl_signature SET `name`='". $signatureName ."', `position` ='".$signaturePosition."' WHERE id='". $id ."'";
	if ($conn->query($updateSQL) === TRUE) {
		echo "

		<script type='text/javascript'>
		function reDirect() {

			alert('Update successfully!');
			window.location.replace('editSignature.php?id=$id');
		}
		setTimeout(reDirect, 10);
		</script>
		";
	} else {
		$conn->error;
	}
}

// VALIDATE DATA
function validateSupplier($txtSupplierName){
	require 'connection.php';

	$sql = "SELECT * FROM tbl_supplier";
	$validateSupplier = $conn->query($sql);
	$exist = false;

	while($row = $validateSupplier->fetch_assoc()) {
		if ($row["suppName"] == $txtSupplierName) {
			echo "<script type='text/javascript'>
			alert('Data is already Exist!');
			</script>";

			$exist=true;
		}
	}
	// ADD SUPPLIER NAME
	if (!$exist) {
		addSupplierName($txtSupplierName);
	}
}

function validateSignature($txtSupplierName,$txtPosition){
	require 'connection.php';

	$sql = "SELECT * FROM tbl_signature";
	$validateSignature = $conn->query($sql);
	$exist = false;

	while($row = $validateSignature->fetch_assoc()) {
		if ($row["name"] == $txtSupplierName) {
			echo "<script type='text/javascript'>
			alert('Data is already Exist!');
			</script>";

			$exist=true;
		}
	}
	// ADD SUPPLIER NAME
	if (!$exist) {
		addSignatureName($txtSupplierName,$txtPosition);
	}
}

// PRINT DATA
function printExportSummary($dateData){
	require 'connection.php';

	$timestamp = strtotime($dateData);

	$xDay = date("d" , $timestamp);
	$xMonth = date("M" , $timestamp);
	$xMonth = strtoupper($xMonth);
	$xYear = date("Y" , $timestamp);

	$transDate = $xDay . "-" . $xMonth;

	// echo $transDate;

	$sql = "SELECT * FROM tbl_inbound WHERE `date` LIKE '%$xDay%' AND `date` LIKE '%$xMonth%' AND year='$xYear' ORDER BY drNo ASC";

	$printExportSummary = $conn->query($sql);


	if ($printExportSummary->num_rows > 0) {

		echo "
		<center> <h5><b>ACKNOWLEDGEMENT RECEIPT</b></h5></center>";
		echo "<br>";
		echo "
		<div id='headAck'>
		<img src='img/company-logo.png' id='company-logo'>
		<br>
		<div class='row'>
		<div class='col-3'>
		<p><b>Date:</b></p>
		<p><b>Supplier:</b></p>
		</div>
		<div class='col-9'>
		<p><b id='underlineDate'>".date('F d, Y')."</b></p>
		<p><b id='underlineSupp'>Toyota Motor Philippines Log. Inc. - CPD</b></p>
		<p><b id>c/o AJ CUAREZMA</b></p>
		</div>
		</div>
		</div>";

		echo "
		<div id='redBorder'>
		<table class='table table-bordered report-table'>
		<thead class='thead-dark'>
		<tr>
		<th id='ackHead' scope='col'>DESCRIPTION</th>
		<th id='ackHead' scope='col'>TRANSACTION DATE</th>
		<th id='ackHead' scope='col'>SUPPLIER</th>
		<th id='ackHead' scope='col'>DR NO.</th>

		</tr>
		</thead>
		<tbody>
		";
	}else{
		echo "
		<script>
		alert('NO DATA FOUND!');
		window.close();
		</script>
		";
	}

	echo "
	<tr>
	<td colspan=''><b>EXPORT SUMMARY LIST</b></td>
	<td><b>". $transDate. "</b></td>
	<td>↓</td>
	<td>↓</td>

	</t>

	";
	
	while($row = $printExportSummary->fetch_assoc()) {

		echo "
	<tr id='test'>

		<td></td>
		<td></td>
		<td>" . $row['suppName']. "</td>
		<td>" . $row['drNo']. "</td>

		</tr>";
	}

	echo "  
	</tbody>
	</table>

    <div class='footer-talble'>
      <div class='row'>
        <div class='col-3'>
          <p>Prepared by:</p>
          <p>____________________________________________</p>
          <b><p>MR. REMO C. CUSTODIO</p></b>
          <small>IMPEX-Supervisor</small>
        </div>
        <div class='col-3'></div>
        <div class='col-3'></div>
        <div class='col-3'>
          <div style='text-align: center;'>
            <p style='color: #fff'>-</p>
            <p>______________________________</p>
            <i><small>Signature over printed name</small></i>
          </div>
        </div>
      </div>
    </div>
    </div>

	";

}

// function breaklineforreport($dateData){
// 	require 'connection.php';

// 	$timestamp = strtotime($dateData);
// 	$xDay = date("d" , $timestamp);
// 	$xMonth = date("M" , $timestamp);
// 	$xMonth = strtoupper($xMonth);
// 	$xYear = date("Y" , $timestamp);
// 	$transDate = $xDay . "-" . $xMonth;

// 	$test1 = 0;

// 	$sql = "SELECT * FROM tbl_inbound WHERE `date` LIKE '%$xDay%' AND `date` LIKE '%$xMonth%' AND year='$xYear' ORDER BY suppName ASC";

// 	$breaklineforreport = $conn->query($sql);

// 	while($row = $breaklineforreport->fetch_assoc()) {
// 		$test1++;

// 		echo "<br>";

// 		if ($test1 == 12) {
// 			break;
// 		}
// 		else{
// 			echo "<br>";
// 		}
// 	}
// }

function printReceivingDelivery($dateData){

	require 'connection.php';

	$timestamp = strtotime($dateData);

	$xMonth = date("M" , $timestamp);
	$xMonth = strtoupper($xMonth);
	$xYear = date("Y" , $timestamp);

	// echo $xMonth; echo "<br>" ; echo $xYear;

	$sql = "SELECT * FROM tbl_inbound WHERE `date` LIKE '%$xMonth%' AND year='$xYear' ORDER BY `date` ASC";

	$printReceivingDelivery = $conn->query($sql);


	if ($printReceivingDelivery->num_rows > 0) {

		echo "
		<table class='table table-bordered report-table'>
		<thead class='thead-dark'>
		<tr>
		<th scope='col'>DATE</th>
		<th scope='col'>RR NO.</th>
		<th scope='col'>SUPPLIER NAME</th>
		<th scope='col'>DR NUMBER</th>
		<th scope='col'>QTY</th>
		</tr>
		</thead>
		<tbody>
		";
	}else{
		echo "
		<script>
		alert('NO DATA FOUND!');
		window.close();
		</script>
		";
	}
	
	while($row = $printReceivingDelivery->fetch_assoc()) {
		echo "
		<tr>
		<td>". $row['date']. "</th>
		<td>" . $row['rrNo']. "</td>
		<td>" . $row['suppName']. "</td>
		<td>" . $row['drNo']. "</td>
		<td>" . $row['qty']. "</td>
		</tr>";
	}

	$sql = mysqli_query($conn,"SELECT SUM(`qty`) AS qty FROM tbl_inbound WHERE `date` LIKE '%$xMonth%' AND year='$xYear'");
	$sumQty = mysqli_fetch_assoc($sql);
	$sumQty = $sumQty['qty'];

	echo "
	<tr id=''>
	<td colspan='4'></td>
	<td style='color:black'><b>".$sumQty."</b></td>
	</tr>";
	echo "  
	</tbody>
	</table>
	";
}

function printInboundMonitoring($dateData){

	require 'connection.php';

	$timestamp = strtotime($dateData);

	$xMonth = date("M" , $timestamp);
	$xMonth = strtoupper($xMonth);
	$xYear = date("Y" , $timestamp);

	$sql = "SELECT * FROM tbl_inbound WHERE `date` LIKE '%$xMonth%' AND year='$xYear' ORDER BY `date` ASC";

	$printInboundMonitoring = $conn->query($sql);


	if ($printInboundMonitoring->num_rows > 0) {

		echo "
		<table class='table table-bordered report-table'>
		<thead class='thead-dark'>
		<tr>
		<th id='rimHead' scope='col'>DATE</th>
		<th id='rimHead' scope='col'>RR NO.</th>
		<th id='rimHead' scope='col'>SUPPLIER NAME</th>
		<th id='rimHead' scope='col'>DR NUMBER</th>
		<th id='rimHead' scope='col'>LINE PER ITEMS</th>
		<th id='rimHead' scope='col'>QTY</th>
		<th id='rimHead' scope='col'>8106</th>
		<th id='rimHead' scope='col'>RR available</th>
		<th id='rimHead' scope='col'>RR dispatched</th>
		<th id='rimHead' scope='col'>REMARKS</th>
		</tr>
		</thead>
		<tbody>
		";
	}else{
		echo "
		<script>
		alert('NO DATA FOUND!');
		window.close();
		</script>";
	}
	
	while($row = $printInboundMonitoring->fetch_assoc()) {
		echo "
		<tr>
		<td>". $row['date']. "</th>
		<td>" . $row['rrNo']. "</td>
		<td>" . $row['suppName']. "</td>
		<td>" . $row['drNo']. "</td>
		<td>" . $row['linePerItems']. "</td>
		<td>" . $row['qty']. "</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>";
	}

	echo "  
	</tbody>
	</table>
	";
}

// SUM DATA
function sumSupplier($dateData){
	require 'connection.php';
	
	$result=0;
	$timestamp = strtotime($dateData);
	$xMonth = date("M" , $timestamp);
	$xMonth = strtoupper($xMonth);
	$xYear = date("Y" , $timestamp);

	$sql = "SELECT DISTINCT suppName FROM tbl_inbound WHERE `date` LIKE '%$xMonth%' AND year='$xYear'";

	$sumSupplier = $conn->query($sql);

	if ($sumSupplier->num_rows > 0) {

	}
	else{
		echo "
		<script>
		alert('NO DATA FOUND!');
		window.close();
		</script>";
	}

	while($row = $sumSupplier->fetch_assoc()) {
		$result++;
	}
	echo $result;
}

// SUM LINE PER ITEMS
function sumLinePerItmes($dateData){
	require 'connection.php';	
	
	$result=0;
	$timestamp = strtotime($dateData);
	$xMonth = date("M" , $timestamp);
	$xMonth = strtoupper($xMonth);
	$xYear = date("Y" , $timestamp);

	$sql = mysqli_query($conn,"SELECT SUM(`lineperItems`) AS lineperItems FROM tbl_inbound WHERE `date` LIKE '%$xMonth%' AND year='$xYear'");
	$sumLinePerItmes = mysqli_fetch_assoc($sql);
	$sumLinePerItmes = $sumLinePerItmes['lineperItems'];
	echo $sumLinePerItmes;
}

// SUM QTY
function sumQty($dateData){
	require 'connection.php';	
	
	$result=0;
	$timestamp = strtotime($dateData);
	$xMonth = date("M" , $timestamp);
	$xMonth = strtoupper($xMonth);
	$xYear = date("Y" , $timestamp);

	$sql = mysqli_query($conn,"SELECT SUM(`qty`) AS qty FROM tbl_inbound WHERE `date` LIKE '%$xMonth%' AND year='$xYear'");
	$sumQty = mysqli_fetch_assoc($sql);
	$sumQty = $sumQty['qty'];
	echo $sumQty;
}

// GET POSITION
function getPosition($name){
	require 'connection.php';	
	$sql = mysqli_query($conn,"SELECT position FROM tbl_signature WHERE name='".$name."'");
	$position = mysqli_fetch_assoc($sql);
	$position = $position['position'];
	return $position;
}

?>

