<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <link rel="stylesheet" href="../admin-css/admin-menu.css">
  <link rel="stylesheet" href="../admin-css/admin-request.css">

  <title>Requests</title>
</head>
<body>
  <div class="main-dashboard">
    <div class="left">
      <?php require_once('admin-menu.php')?>
    </div>
    <div class="right-body">
      <div class="top-title">Requesting</div>
      <div class="container">
        <table class="table-cont">
          <tr>
            <th>Item name</th>
            <th>Quantity</th>
            <th>Purpose</th>
            <th>Date requested</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Course & Section</th>
            <th>Decision</th>
          </tr>
          <tr>
            <td>Computer</td>
            <td>5</td>
            <td>for school <a href=""></a></td>
            <td>03/25/2024</td>
            <td>James</td>
            <td>Lebron</td>
            <td>BSIT-3Z</td>
            <td>
              <a class="approve" href="">Approve</a>
              <a class="remove" href="">Reject</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</body>
</html>