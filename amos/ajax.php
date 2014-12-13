<?php

	// include ("../../inc/config.inc.php");
	include 'config.php';
	include 'opendb.php';

	// CUSTOMER INFORMATION
	$emailAddess	 = htmlspecialchars(trim($_POST['emailAddress']));
	$businessName	 = htmlspecialchars(trim($_POST['businessName']));
	$firstName       = htmlspecialchars(trim($_POST['firstName']));
	$lastName        = htmlspecialchars(trim($_POST['lastName']));
	$phone			 = htmlspecialchars(trim($_POST['lastName']));
	$address1		 = htmlspecialchars(trim($_POST['address1']));
	$address2		 = htmlspecialchars(trim($_POST['address2']));
	$city		 = htmlspecialchars(trim($_POST['city']));
	$state		 = htmlspecialchars(trim($_POST['state']));
	$zip		 = htmlspecialchars(trim($_POST['zip']));
	$description		 = htmlspecialchars(trim($_POST['description']));
	
	
	$addCustomer  = "INSERT INTO customers (emailAddress,businessName,firstName,lastName,phone,address1,address2,city,state,zip,description) VALUES ('$emailAddress','$businessName','$firstName','$lastName','$phone','$address1','$address2','$city','$state','$zip','$description')";

    
    mysql_query($addCustomer) or die(mysql_error());



    include 'closedb.php';
 
?>
