<?php

//connection details not included
$con = mysql_connect("mysql2779int.cp.blacknight.com", "u1429287_michael", "S@3+Nmr1K[?h|Tu5", "db1429287_Jobs");

$stripe = array(
  "secret_key"      => "sk_live_OEXC1H9Ro7YmuZChGQcF5GbS",
  "publishable_key" => "pk_live_lOFM5oQvtjmnvoHw3TXHT6BE"
);

\Stripe\Stripe::setApiKey($stripe['sk_live_OEXC1H9Ro7YmuZChGQcF5GbS']);


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
header('Location: jobs.php');
 
mysql_close($con);
?>


