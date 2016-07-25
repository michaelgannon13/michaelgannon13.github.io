<?php
	$conn = mysql_connect("daneel","N00123141","N00123141");
	mysql_select_db("N00123141",$conn);
	// if something entered..
	if(count($_POST)>0) {
		// form data fild updated
		mysql_query("UPDATE score set name='" . $_POST["name"] . "', score='" . $_POST["score"] . "' WHERE id='" . $_POST["id"] . "'");
		$message = "Client Updated Successfully";
		// redirects to list
		header('Location: http://avaya/~N00123141/scoreDB/list_client.php');
	}
	$result = mysql_query("SELECT * FROM score WHERE id='" . $_GET["id"] . "'");
	$row= mysql_fetch_array($result);
?>
<html>
<head>
	<title>Edit Client</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
	<body>
		<form name="frmUser" method="post" action="">
			<div style="width:500px;">
				<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
				<div align="right" style="padding-bottom:5px;"><a href="list_client.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
				<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
				<tr class="tableheader">
				<td colspan="2">Edit Client</td>
				</tr>
				<tr>
				<td><label>Name</label></td>
				<td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"><input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>"></td>
				</tr>
				<tr>
				<td><label>Score</label></td>
				<td><input type="number" name="score" class="txtField" value="<?php echo $row['score']; ?>"></td>
				</tr>
				<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
				</tr>
				</table>
			</div>
		</form>
	</body>
</html>