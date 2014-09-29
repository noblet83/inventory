<?php include 'includes/header.php' ?>
<?php
   //Create DB Object
  $db = new Database();

  //Check URL for category
  if(isset($_GET['item'])){
      $item = $_GET['item'];
      $query = "SELECT * FROM item WHERE item = ".$item . " ORDER BY id DESC";
      $posts = $db->select($query);
    } else{
        //Create Query
      $query = "SELECT * FROM item
                ORDER by item_id DESC";
      //Run Query
      $item = $db->select($query);
    }
?>
    
      <legend>Items In the System</legend>
     <a class="btn btn-primary" href="addItem.php">Add A New Item</a>
     <br>
    <table summary="Orders"class="table table-striped">
      <thead>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Item Desc</th>
        <th>Barcode</th>
        <th>Serial No.</th>
      </thead>

  <?php if($item) : ?>
    <?php while($row = $item->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row['item_id'] ; ?></td>
          <td><?php echo $row['item_name'] ; ?></td>    
          <td><?php echo $row['item_desc'] ; ?></td>  
          <td><?php echo $row['barcode'] ; ?></td>      
          <td><?php echo $row['serial'] ; ?></td>   
          <td><button type="button" class="btn btn-sm btn-default">Modify</button></td>
          <td><button type="button" class="btn btn-sm  btn-danger">Delete</button></td>  
        </tr>
       
  <?php endwhile; ?>
        </table>  
              
  <?php else : ?>
    <p>There are no item yet</p>
  <?php endif; ?>

<?php include 'includes/footer.php' ?>