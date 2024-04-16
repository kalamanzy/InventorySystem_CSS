<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <link rel="stylesheet" href="../admin-css/admin-menu.css">
  <link rel="stylesheet" href="../admin-css/system-log.css">
  <title>System Log</title>
</head>
<body>
  <div class="main-dashboard">
    <div class="left">
      <?php require_once('admin-menu.php')?>
    </div>
    <div class="right-body">
      <div class="top-title">
        <div>System log</div>
      </div>
      <div class="container">
        <table class="table-content">
            <tr>
              <th>ID</th>
              <th>Datetime</th>
              <th>User</th>
              <th>Log event</th>
            </tr>
            <tr>
              <td>1</td>
              <td>04/23/2024 11:24:25</td>
              <td>Current User</td>
              <td>Added into inventory</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</body>
</html>