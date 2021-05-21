
	<a href="http://localhost/Inboundmonitoringsystem/index.php">BACK</a>

<?php 

	// RANDOM SUPPLIER
	// $supplier = array("DENSO", "DENSO TEN", "MARIROKU" , "ROBER AUTO & IND L. PARTS","F-TECH","TOKAI RICA");

	// $randSupplier ="";

	// // RANDOM DATE
	// $date = array("Jan", "Feb", "Mar" , "Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

	$randDate ="";

	// GAANO KADAMI? 
	for ($i = 1; $i <= 41; $i++) {
		// RANDOM DATE
		if (mt_rand(1,$i) == 1) {
			$randDate = "Jan";
		}
		if (mt_rand(1,$i) == 2) {
			$randDate = "Feb";
		}
		if (mt_rand(1,$i) == 3) {
			$randDate = "Mar";
		}
		if (mt_rand(1,$i) == 4) {
			$randDate = "Apr";
		}
		if (mt_rand(1,$i) == 5) {
			$randDate = "May";
		}
		if (mt_rand(1,$i) == 6) {
			$randDate = "Jun";
		}
			// RANDOM SUPPLIER
		if (mt_rand(1,$i) == 1) {
			$randSupplier = "DENSO";
		}
		if (mt_rand(1,$i) == 2) {
			$randSupplier = "DENSO TEN";
		}
		if (mt_rand(1,$i) == 3) {
			$randSupplier = "MARIROKU";
		}
		if (mt_rand(1,$i) == 4) {
			$randSupplier = "ROBER AUTO & IND L. PARTS";
		}
		if (mt_rand(1,$i) == 5) {
			$randSupplier = "F-TECH";
		}
		if (mt_rand(1,$i) == 6) {
			$randSupplier = "TOKAI RICA";
		}
		
		$randDate = "Dec";
		// $day = "28";
		$day = mt_rand(10,30);

		echo "<br>";



		echo "INSERT INTO `tbl_inbound`(`date`, `rrNo`, `suppName`, `drNo`, `linePerItems`, `qty`, `year`, `day`) VALUES ('".$day."-".$randDate."','".mt_rand(1,20)."','".$randSupplier."','D".mt_rand()."','".mt_rand(1,20)."','".mt_rand(1,20)."','2020','".$day."');";
	}

?>