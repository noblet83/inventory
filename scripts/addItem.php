<?php include 'includes/header.php'; ?>
<?php
  //Create DB Object
  $db = new Database();


	if(isset($_POST['submit'])){
		//Assign Vars
		$item_name = mysqli_real_escape_string($db->link, $_POST['item_name']);
		$item_desc = mysqli_real_escape_string($db->link, $_POST['item_desc']);
		$barcode = mysqli_real_escape_string($db->link, $_POST['barcode']);
		$serial = mysqli_real_escape_string($db->link, $_POST['serial']);

		//Simple Validation
		if($item_name == ''|| $item_desc == ''|| $barcode== '' || $serial == ''){
			//set error
			$error = "Please fill out all required fields";
		} else{
			$query = "Insert INTO item 
						(item_name, item_desc, barcode, serial)
						VALUES('$item_name', '$item_desc', $barcode, '$serial')";
			$insert_row = $db->insert($query);
		}
	}


?>
<?php


?>
<form role="form" method="post" action="addItem.php">
  <div class="form-group">
    <label for="item_name">Item Name</label>
    <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Enter Item Name">
  </div>
  <div class="form-group">
    <label for="item_desc">Item Description</label>
    <textarea name="item_desc" id="item_desc" class="form-control" placeholder="Enter Item Description"></textarea>
  </div>
  <label for="barcode">Barcode</label>
  <textarea name="barcode" id="barcode" class="form-control" placeholder="Enter Barcode"></textarea>
  <div class="form-group">
    <label for="serial">Serial Number</label>
    <input type="text" class="form-control" name="serial" id="serial" placeholder="Serial Number">
  </div>
  <br>
  <div>
	  <button type="submit" name="submit" class="btn btn-default">Submit</button>
	  <a href="index.php" class="btn btn-default" role="button">Cancel</a>
  </div>
  <br>
</form>



<?php include 'includes/footer.php'; ?>