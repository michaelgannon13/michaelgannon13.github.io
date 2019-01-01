<?php

try {
	//include stripe library. Stripe needs library to perform some actions related to payment on your account
	require_once('Stripe/lib/Stripe.php');
	
	// Set your own stripe test or live secret key
	Stripe::setApiKey("sk_live_OEXC1H9Ro7YmuZChGQcF5GbS");
	
	//Create the customer . Customer is created on your Stripe account.You can see customers on your stripe dashboard.
	//It contains Stripe token , Plan name that you created first time ,and payer email
	
	///This is the code to create customer on your stripe account
		$customer = Stripe_Customer::create(array(
			"source" => $_POST['stripeToken'],
			"email" => $_POST["stripeEmail"],
			"description" => "Post Job",
		
			)
		);
		
		//This is the code that creates charge on your stripe account. I means it create payment details
		$charge = Stripe_Charge::create(array(
			"amount"   => "2499", // $15.00 this time
			"currency" => "eur",
			"customer" => $customer->id // Previously stored, then retrieved
		));	

	//This is your code that is storing job data into database.
	
	//connection details not included
	$con = mysql_connect("mysql2779int.cp.blacknight.com", "u1429287_michael", "S@3+Nmr1K[?h|Tu5", "db1429287_Jobs");
	
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	} 
	mysql_select_db("db1429287_Jobs", $con);
	$C = $_POST["skills"];
	$skills =  implode(", ",$C);
	$sql="INSERT INTO submit_job (company, location, salary, duration, experience, url, contact, skills, description)
	VALUES
	('$_POST[company]','$_POST[location]','$_POST[salary]','$_POST[duration]','$_POST[experience]','$_POST[url]','$_POST[contact]', '$skills', '$_POST[description]')";

	//echo $sql;
 
	if (!mysql_query($sql,$con))
	{
	die('Error: ' . mysql_error());
	}

	//redirect to job page after successful paymenent
	header('Location: jobs.php');
	mysql_close($con);	
	
}

catch(Stripe_CardError $e) {
	$body = $e->getJsonBody();
}	

?>


