<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <link rel="stylesheet" href="../admin-css/admin-menu.css">
  <link rel="stylesheet" href="../admin-css/admin-total-req.css">

  <title>Total requested</title>
</head>
<body>
  <div class="main-dashboard">
    <div class="left">
      <?php require_once('admin-menu.php')?>
    </div>
    <div class="right-body">
      <div class="top-title">Total Requested</div>
      <div class="container">
        <table class="table-cont">
          <tr>
            <th>ID</th>
            <th>Item name</th>
            <th>Quantity</th>
            <th>Purpose</th>
            <th>Full name</th>
            <th>Date requested</th>
            <th>Course & Section</th>
            <th>Status</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Computer</td>
            <td>5</td>
            <td>for school <a href=""></a></td>
            <td>James Lebron</td>
            <td>03/25/2024</td>
            <td>BSIT-3Z</td>
            <td>
              <div class="approved">Approved</div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</body>
</html>