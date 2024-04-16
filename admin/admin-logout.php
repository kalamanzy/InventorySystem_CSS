<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <link rel="stylesheet" href="../admin-css/admin-menu.css">
  <link rel="stylesheet" href="../admin-css/admin-logout.css">

  <title>Logout</title>
</head>
<body>
  <div class="main-dashboard">
    <div class="left">
      <?php require_once('admin-menu.php')?>
    </div>
    <div class="right-body">
      <div class="top-title">Logout</div>
      <div class="container">
        <div class="logout">
            <div class="ask">Are you sure to Logout?</div>
            <div class="choices">
              <a class="yes" href="#">Yes</a>
              <a class="no" href="dashboard.php">No</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>