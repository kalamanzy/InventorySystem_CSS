<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <link rel="stylesheet" href="../admin-css/admin-menu.css">
  <link rel="stylesheet" href="../admin-css/admin-dashboard.css">

  <title>Dashboard Admin</title>
</head>
<body>
  <div class="main-dashboard">
    <div class="left">
      <?php require_once('admin-menu.php')?>
    </div>
    <div class="right-body">
      <div class="top-title">Dashboard</div>
      <div class="container">
          <a href="admin-items.php" class="box">
            <div class="top-box">Stocks</div>
            <div class="body-box">11</div>
          </a>
          <a href="admin-requests.php" class="box">
            <div class="top-box">Pending Request</div>
            <div class="body-box">5</div>
          </a>
          <a href="admin-total-req.php" class="box">
            <div class="top-box">Total Requested</div>
            <div class="body-box">7</div>
          </a>
          <a href="admin-users.php" class="box">
            <div class="top-box">Total Users</div>
            <div class="body-box">10</div>
          </a>
      </div>
    </div>
  </div>

</body>
</html>