<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <link rel="stylesheet" href="../admin-css/admin-menu.css">
  <link rel="stylesheet" href="../admin-css/admin-users.css">
  <title>Users</title>
</head>
<body>
  <div class="main-dashboard">
    <div class="left">
      <?php require_once('admin-menu.php')?>
    </div>
    <div class="right-body">
      <div class="top-title">Users</div>
      <div class="container">
        <table class="table-content">
            <tr>
              <th>ID</th>
              <th>Last name</th>
              <th>Firstname</th>
              <th>Middle</th>
              <th>Position</th>
            </tr>
            <tr>
              <td>1</td>
              <td>James</td>
              <td>Lebron</td>
              <td>Yap</td>
              <td>Student</td>
            </tr>
        </table>
      </div>
    </div>
  </div>

</body>
</html>