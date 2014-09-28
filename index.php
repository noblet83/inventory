<?php include ('includes/header.php'); ?>
<!-- Begin Body -->
<div class="container">
  <div class="row">
    <div class="col-md-3" id="leftCol">
        <div class="well">
            <ul role="complimentary" class="nav nav-stacked" id="sidebar">
                <li><a href="#sec2" class="">Enter New Order</a>
                </li>
                <li><a href="#sec4" class="">Enter New Item</a>
                </li>
                <li><a href="#sec3" class="">Deploy Item</a>
                </li>
            </ul>
        </div>
    </div>
    <div role="main" class="col-md-9">
      <legend>Current Inventory</legend>
      <table summary="Recently Entered Products" class="table table-striped">
        <thead>
          <th>Item ID</th>
          <th>Item Name</th>
          <th>Item Description</th>
          <th>Barcode</th>
          <th>Serial Number</th>
        </thead>
          <tr>
            <td>1</td>
            <td>Bose Aviator Headset</td>
            <td>Noise Cancelling Headset with Mic</td>
            <td>n/a</td>
            <td>BOSE45157</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Focus 80 Blue</td>
            <td>Refreshable Braille display for Blind Users</td>
            <td>BAR 4515763</td>
            <td>FS3433868489165</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Dell 29" Monitor</td>
            <td>29" Monitor</td>
            <td>n/a</td>
            <td>DELL1567441</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Apex Braille Notetaker</td>
            <td>Mobile Notetaker for Blind user</td>
            <td>BAR 451542</td>
            <td>HW412424</td>
          </tr>
      </table>
    </div>      
  </div>
</div>

<?php include ('includes/footer.php'); ?>