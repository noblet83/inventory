<?php include '../includes/header.php' ?>


<!-- Recent Order -->
<?php
   //Create DB Object
  $db = new Database();

  //Check URL for category
  if(isset($_GET['orders'])){
      $orders = $_GET['orders'];
      $query = "SELECT * FROM orders WHERE orders = ".$orders . " ORDER BY id DESC";
      $posts = $db->select($query);
    } else{
        //Create Query
      $query = "SELECT * FROM orders
                ORDER by order_id DESC limit 5";
      //Run Query
      $orders = $db->select($query);
    }

  //Create Query
  $query = "SELECT * FROM orders";

  //Run Query
  $orders = $db->select($query);

  $query = "SELECT inventory.item_id, inventory.item_name, orders.item_id FROM inventory INNER JOIN orders ON inventory.item_id=orders.item_id ORDER BY order_id DESC limit 5";
  /*$query = "SELECT item.*, orders.item_id from item INNER JOIN orders on item.item_id = orders.item_id";*/
  $inventory = $db->select($query);

?>
    <h1><legend>Recent Orders</legend></h1>
      <table summary="Orders"class="table table-striped">
        <thead>
          <th>Order ID</th>
          <th>Order Title</th>
          <th>Status</th>
          <th>Quantity</th>
          <th>Item Name</th>
          <th>Order Date</th>
          <th>Notes</th>
        </thead>

  <?php if($orders) : ?>
    <?php while($row = $orders->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row['order_id'] ; ?></td>
          <td><?php echo $row['order_title'] ; ?></td>    
          <td><?php echo $row['order_status'] ; ?></td>     
          <td><?php echo $row['order_quantity'] ; ?></td>     
          <td><?php echo $row['item_name'] ; ?></td>      
          <td><?php echo formatDate($row['order_date']) ; ?></td> 
          <td><?php echo $row['order_note'] ; ?></td>
          <td><button type="button" class="btn btn-sm btn-default">Modify</button></td>
              <td><button type="button" class="btn btn-sm btn-danger">Delete</button></td>
        </tr>
       
  <?php endwhile; ?>
        </table>  
              
  <?php else : ?>
    <p>There are no orders yet</p>
  <?php endif; ?>


  <!-- Current Inventory -->
<?php
   //Create DB Object
  $db = new Database();

  //Check URL for category
  if(isset($_GET['inventory'])){
      $inventory = $_GET['inventory'];
      $query = "SELECT * FROM inventory WHERE inventory = ".$inventory . " ORDER BY id DESC";
      $posts = $db->select($query);
    } else{
        //Create Query
      $query = "SELECT * FROM inventory
                ORDER by item_id DESC limit 20";
      //Run Query
      $inventory = $db->select($query);
    }
?>

<!-- Current Inventory -->
    <h1><legend>Current Inventory</legend></h1>
      
    <table summary="inventory"class="table table-striped">
      <thead>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Item Desc</th>
        <th>Barcode</th>
        <th>Serial No.</th>
      </thead>

  <?php if($inventory) : ?>
    <?php while($row = $inventory->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row['item_id'] ; ?></td>
          <td><?php echo $row['item_name'] ; ?></td>    
          <td><?php echo $row['item_desc'] ; ?></td>  
          <td><?php echo $row['barcode'] ; ?></td>      
          <td><?php echo $row['serial'] ; ?></td>
          <td><button type="button" class="btn btn-sm  btn-default">Modify</button></td>
              <td><button type="button" class="btn btn-sm btn-danger">Delete</button></td>  
        </tr>
       
  <?php endwhile; ?>
        </table>  
              
  <?php else : ?>
    <p>There are no inventory yet</p>
  <?php endif; ?>




  <!-- Transactions -->
<?php
   //Create DB Object
  $db = new Database();

  //Check URL for category
  if(isset($_GET['trans'])){
      $trans = $_GET['trans'];
      $query = "SELECT * FROM trans WHERE trans = ".$trans . " ORDER BY id DESC";
      $trans = $db->select($query);
    } else{
        //Create Query
      $query = "SELECT * FROM transactions
                ORDER by trans_id DESC";
      //Run Query
      $trans = $db->select($query);
    }
?>


    <h1><legend>Recent Transactions</legend></h1>
     
    <table summary="transactions"class="table table-striped">
      <thead>
        <th>Trans ID</th>
        <th>Status</th>
        <th>Note</th>
        <th>Item Name</th>
        <th>SID</th>
        <th>Trans Time</th>
      </thead>

  <?php if($trans) : ?>
      <?php while($row = $trans->fetch_assoc()) : ?>
        <tr>
          <td><?php echo $row['trans_id'] ; ?></td>
          <td><?php echo $row['trans_status'] ; ?></td>   
          <td><?php echo $row['trans_note'] ; ?></td>     
          <td><?php echo $row['item_id'] ; ?></td>      
          <td><?php echo $row['user_sid'] ; ?></td>     
          <td><?php echo formatDate($row['trans_time']) ; ?></td>
          <td><button type="button" class="btn btn-sm btn-default">Modify</button></td>
              <td><button type="button" class="btn btn-sm btn-danger">Delete</button></td>
        </tr>
       
    <?php endwhile; ?>
        </table>  
              
  <?php else : ?>
    <p>There are no transactions yet</p>
  <?php endif; ?>

<?php include '../includes/footer.php' ?>