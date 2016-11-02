<?php
$con = mysql_connect("mysql2779int.cp.blacknight.com", "u1429287_michael", "S@3+Nmr1K[?h|Tu5", "db1429287_Jobs");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("db1429287_Jobs", $con);
 
$sql="INSERT INTO submit_job (email, password)
VALUES
('$_POST[email]','$_POST[password]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
