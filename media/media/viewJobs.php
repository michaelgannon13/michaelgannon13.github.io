<?php
  $server = mysql_connect("mysql2779int.cp.blacknight.com", "u1429287_michael", "S@3+Nmr1K[?h|Tu5"); 
  $db = mysql_select_db("db1429287_Jobs", $server); 
  $query = mysql_query("SELECT * FROM submit_job"); 
?>

<table>
  <tr>
      <td>Company</td>
      <td>Experience</td>
      <td>Location</td>
      <td>Salary</td>
      <td>Duration</td>
      <td>Link</td>
      <td>Contact</td>
  </tr>

  <?php
     while ($row = mysql_fetch_array($query)) {?>
         <tr>
         <td><?php echo $row['company'];?></td>
         <td><?php echo $row['experience'];?></td>
         <td><?php echo $row['location'];?></td>
         <td><?php echo $row['salary'];?></td>
         <td><?php echo $row['duration'];?></td>
         <td><?php echo $row['url'];?></td>
         <td><?php echo $row['contact'];?></td>
         </tr>
    <?php  } ?>
</table>
