      <table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
	  <th>ID</th>
	  <th>First Name</th>
	  <th>Last Name</th>
	  <th>Age</th>
	  <th>Hometown</th>
	  <th>Job</th>
	</tr>
<?php
include "config.php";
$res = $mysqli->query("SELECT * FROM person");
while($row = $res->fetch_assoc()):
?>
	<tr>
	  <td><?php echo $row['id_person']; ?></td>
	  <td><?php echo $row['firstname']; ?></td>
	  <td><?php echo $row['lastname']; ?></td>
	  <td><?php echo $row['age']; ?></td>
	  <td><?php echo $row['hometown']; ?></td>
	  <td><?php echo $row['job']; ?></td>
	</tr>
<?php
endwhile;
?>
      </table>