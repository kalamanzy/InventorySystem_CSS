<?php include_once('includes/header.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>
       
    <style>
      .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 250px;
        height: 100%; 
        background-color: #555;
        padding: 20px; 
        z-index: 1;
      }

      .sidebar a {
        display: block;
        color: white;
        padding: 10px;
        margin-bottom: 10px;
        text-decoration: none;
        transition: 0.3s;
        padding-right: 40px;
      }

      .sidebar a:hover {
        background-color: #555;
      }
    </style>
</head>
<body>

<div class="sidebar">
    <a href="dashboard.php">Dashboard</a>
    <a href="items.php">Items</a>
    <a href="request.php">Request</a>
    <a href="Users.php">Users</a>
    <a href="syslog.php">System Log</a>
    <a href="index.php">Log out</a>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>
</html>
