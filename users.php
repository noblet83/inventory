<?php include 'includes/header.php' ?>
<?php
   //Create DB Object
  $db = new Database();

  //Check URL for category
  if(isset($_GET['users'])){
      $users = $_GET['users'];
      $query = "SELECT * FROM users WHERE users = ".$users . " ORDER BY id DESC";
      $users = $db->select($query);
    } else{
        //Create Query
      $query = "SELECT * FROM users
                ORDER by user_id DESC";
      //Run Query
      $users = $db->select($query);
    }
?>

    <h1><legend>Users In the System</legend></h1>
    <table summary="Orders"class="table table-striped">
      <thead>
        <th>Name</th>
        <th>SID</th>
      </thead>

  <?php if($users) : ?>
    <?php while($row = $users->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row['fname']." ". $row['lname'] ; ?></td>  
          <td><?php echo $row['user_sid']; ?></td>
          <td><button type="button" class="btn btn-sm btn-default">Modify</button></td>
          <td><button type="button" class="btn btn-sm  btn-danger">Delete</button></td>
        </tr>
       
  <?php endwhile; ?>
        </table>  
              
  <?php else : ?>
    <p>There are no users yet</p>
  <?php endif; ?>

<?php include 'includes/footer.php' ?>