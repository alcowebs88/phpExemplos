<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);	
	include ('../classes/classDate.php');
	$entryDate = filter_input(INPUT_POST,'entryDate',FILTER_SANITIZE_STRING);
	$entryTime = filter_input(INPUT_POST,'entryTime',FILTER_SANITIZE_STRING);
	$entryFinal = $entryDate.' '.$entryTime;	
	$departureDate = filter_input(INPUT_POST,'departureDate',FILTER_SANITIZE_STRING);
	$departureTime = filter_input(INPUT_POST,'departureTime',FILTER_SANITIZE_STRING);
	$departureFinal = $departureDate.' '.$departureTime;
	$obj = new classDate($entryFinal,$departureFinal);
	echo $obj->	getLocation();
?>