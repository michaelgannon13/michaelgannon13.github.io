<?php
$conn = mysql_connect("daneel","N00123141","N00123141");
mysql_select_db("N00123141",$conn);
mysql_query("DELETE FROM score WHERE id='" . $_GET["id"] . "'");
header("Location:list_client.php");
?>