<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <link rel="stylesheet" href="../admin-css/admin-menu.css">
  <link rel="stylesheet" href="../admin-css/admin-items.css">

  <title>Items</title>
</head>
<body>
  <div class="main-dashboard">
    <div class="left">
      <?php require_once('admin-menu.php')?>
    </div>
    <div class="right-body">
      <div class="top-title">
        <div>Items</div>
        <a class="add-item" href="admin-add-items.php">Add Items</a>
      </div>
      <div class="container">
        <table class="table-content">
            <tr>
              <th>Item name</th>
              <th>Quantity</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>Computer</td>
              <td>12</td>
              <td>Electronic Device</td>
              <td>
                <a class="upd" href="admin-upd-item.php">Update</a>
                <a class="rem" href="#">Remove</a>
              </td>
            </tr>
        </table>
      </div>
    </div>
  </div>

</body>
</html>