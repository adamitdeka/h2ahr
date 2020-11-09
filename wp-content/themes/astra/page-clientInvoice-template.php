<?php
	/* 

	Template Name: Client Invoice

	*/

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}

	get_header();
	global $wpdb;
	global $current_user;
	$userEmail = $current_user->user_email;
	$results = $wpdb->get_results( 'select * from h2a_invoices where companyEmail = $userEmail', OBJECT );
	//var_dump($results);
?>

<!-- <div id="invoiceContainer">
	<div class="invoiceColumn" id="invoiceHeaderContainer">
		<div class="invoiceRowItem invoiceHeaderItem">Serial Number</div>
		<div class="invoiceRowItem invoiceHeaderItem">Invoice</div>
	</div>
	<?php
		// foreach($results as $key => $result){
		// 	$filename = $result->invoiceName;
    	// 	$path = '../wp-content/uploads/invoices/';
    	// 	$file = $path.$filename;
		// 	echo('
		// 	<div class="invoiceRow" id="invoiceHeaderContainer">
		// 		<div class="invoiceRowItem invoiceHeaderItem">'.$key.'</div>
		// 		<div class="invoiceRowItem invoiceHeaderItem"><a href="'.$file.'" target="_blank">'.$filename.'</a></div>
		// 	</div>
		// 	');
		// }
	?>
</div> -->
<div id="mainContainer">
	<div class="listColumn">
		<div class="listHeader listItem">Serial Number</div>
		<?php
			foreach($results as $key => $result){
				$sno = $key+1;
				echo('
					<div class="listItem">'.$sno.'</div>
				');
			}
		?>
	</div>
	<div class="listColumn">
		<div class="listHeader listItem">Invoice</div>
		<?php
			$filename = $result->invoiceName;
    		$path = '../wp-content/uploads/invoices/';
    		$file = $path.$filename;
			foreach($results as $key => $result){
				$sno = $key+1;
				echo('
					<div class="listItem"><a href="'.$file.'" target="_blank">'.$filename.'</a></div>
				');
			}
		?>
	</div>
</div>

