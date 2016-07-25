<?php
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","root");
mysql_select_db("letsGo",$conn);
mysql_query("INSERT INTO score (name, score) VALUES ('" . $_POST["name"] . "','" . $_POST["score"] . "')");
$current_id = mysql_insert_id();
if(!empty($current_id)) {
$message = "New Client Added Successfully";
}
}
?>
<html>
<head>
<title>Add New Client</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
<form name="frmUser" method="post" action="">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Client</td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="text" name="name" class="txtField"></td>
</tr>
<tr>
<td><label>Score</label></td>
<td><input type="number" name="score" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</form>
</body></html>