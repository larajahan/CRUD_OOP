<?php 
include 'inc/header.php'; 
include 'config.php'; 
include 'database.php'; 


?>

<?php 
  $db = new Database();
  $query = "SELECT * FROM table_user";
  $read =$db->Select($query);

   ?>


 <table class="tblone">

 	<tr> 		
 		<th width="25%">Name</th>
 		<th width="25%">Email</th>
 		<th width="25%">Skill</th>
 		<th width="25%">Actions</th>
 	</tr>
     <?php if ($read) { ?>
     <?php while ($row =$read->fetch_assoc()) {    	
      ?>
      
 	<tr>
 		<td><?php echo $row['name']; ?></td>
 		<td><?php echo $row['email']; ?></td>
 		<td><?php echo $row['skill']; ?></td>
 		<td href="update.php?id=<?php echo $row['id']; ?>;">Edit</td>

 	</tr>
 	<?php } ?>
 	
 	<?php } else{ ?>
    <p>Data is not available !!</p>
    <?php } ?>


 </table>


 
<?php include 'inc/footer.php'; ?>