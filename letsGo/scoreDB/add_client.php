<?php
    // if something has entered..
	if(count($_POST)>0) {
    	$conn = mysql_connect("mysql2772.cp.blacknight.com","u1380059_michael","la.j4cQPIR8YGWMM");
    	mysql_select_db("db1380059_LetsGo",$conn);
        // data inserted to db
    	mysql_query("INSERT INTO score (name, score) VALUES ('" . $_POST["name"] . "','" . $_POST["score"] . "')");
    	$current_id = mysql_insert_id();
    	if(!empty($current_id)) {
    			$message = "New Client Added Successfully";
                // page redirected
                header('Location: http://michael-gannon.com/scoreDB/list_client.php');
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
            <td><label>Name</label></td>
            <td><input type="text" name="name" class="txtField"></td>
            </tr>
            <tr>
            <td><label>Score</label></td>
            <td><input type="number" name="score" class="txtField"></td>
            </tr>
            <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
            </tr>
        </table>
    </form>
  </body>
</html>