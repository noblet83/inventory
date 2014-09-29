
<?php include 'config/config.php' ?>
<?php include 'libraries/Database.php' ?>
<?php include 'helpers/format_helper.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Inventory Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stickyfooter.css">
    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
  </head>
<body>
<header class="navbar navbar-default navbar-static-top" role="banner">

      <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

            </button> <a href="index.php" class="navbar-brand">Inventory System</a>

        </div>
        <nav class="collapse navbar-collapse pull-right" role="navigation">
            <ul class="nav navbar-nav">
                <li> <a href="orders.php" class="">Orders</a> 
                </li>
                <li> <a href="inventory.php" class="">Inventory</a>
                </li>
                <li> <a href="transactions.php" class="">Transactions</a>
                </li>
                <li> <a href="items.php" class="">Items</a>
                </li>
                <li> <a href="users.php" class="">Users</a> 
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Modify Order Details</a></li>
                    <li><a href="#">Modify Inventory Details</a></li>
                    <li><a href="#">Modify Transactions Details</a></li>
                    <li><a href="#">Modify Item Details</a></li>
                    <li><a href="#">Modify User Details</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
          </ul>
        </nav>
    </div>
</header>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php if(isset($_GET['msg'])): ?>
        <div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?></div>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-2" id="leftCol">
        <div class="well">
            <ul role="complimentary" class="nav nav-stacked" id="sidebar">
                <li><a href="#sec2" class="">Enter New Order</a>
                </li>
                <li><a href="#sec4" class="">Enter Item Into Inventory</a>
                </li>
                <li><a href="#sec3" class="">Deploy Item</a>
                </li>
            </ul>
        </div>
    </div>
  <div class="col-md-10">