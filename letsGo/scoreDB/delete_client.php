<?php
$conn = mysql_connect("mysql2772.cp.blacknight.com","u1380059_michael","la.j4cQPIR8YGWMM");
mysql_select_db("db1380059_LetsGo",$conn);
mysql_query("DELETE FROM score WHERE id='" . $_GET["id"] . "'");
header("Location:list_client.php");
?>