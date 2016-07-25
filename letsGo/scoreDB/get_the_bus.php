<?php
	$conn = mysql_connect("daneel","N00123141","N00123141");
	mysql_select_db("N00123141",$conn);
	// every item from db
	$result = mysql_query("SELECT * FROM getthebus");
?>
<html>
	<head>
		<title>Saint John of Gods CLients</title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
	</head>
	<body>
		<!--retrieves animation score-->
		<form name="frmUser" method="post" action="">
			<div style="width:500px;">
			<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
			<div align="right" style="padding-bottom:5px;"><a href="add_client.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add Client</a></div>
			<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
			<tr class="listheader">
			<td>Name</td>
			<td>Score</td>
			</tr>
			<?php
			$i=0;
			while($row = mysql_fetch_array($result)) {
			if($i%2==0)
			$classname="evenRow";
			else
			$classname="oddRow";
			?>
			<tr class="<?php if(isset($classname)) echo $classname;?>">
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["score"]; ?></td>
			<td><a href="edit_client.php?id=<?php echo $row["id"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  
			<a href="delete_client.php?id=<?php echo $row["id"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
			</tr>
			<?php
			$i++;
			}
			?>
			</table>
		</form>
		</div>
	</body>
</html>