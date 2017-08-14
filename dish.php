<?php 	define("TITLE","Menu | Vagolia Coffee Shop"); 
		include("includes/header.php");

		function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	if(isset($_GET['item'])) {
		$menuItem = strip_bad_chars( $_GET['item'] );
		$dish = $menuItems[$men];
	}
?>


<?php include("includes/footer.php"); ?>