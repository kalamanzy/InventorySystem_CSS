<?php require_once('../includes/header-sd.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <style>
@import url('../admin-css/bodycss.css');

.main-dashboard {
    display: flex;
    justify-content: center;
    align-items: start;
    height: 100vh; 
  }
.left .sidebar .req1 {
  background-color: var(--sidebar-color);
}

.container {
  width: fit-content;
  margin: 0 auto;
}

.table-cont {
  border-collapse: collapse;
  background-color: var(--sec-row-color);
  width: 1200px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .25);
}
th {
  height: 40px;
  background-color: var(--header-color);
  color: #ffffff;
  width: calc(100% / 3); 
  }
  
td {
  text-wrap: wrap;
  height: 90px;
  width: calc(100% / 3); 
}

tr {
  text-align: center;
}

tr:nth-of-type(even) {
  background-color: var(--first-row-color);
}

td:nth-child(3) {
  max-width: 200px;
}

.approve {
  display: inline-block;
  width: 50px;
  background-color: var(--approve-color);
  padding: 6px 12px;
  border-radius: 2px;
  font-size: 14px;
  margin-right: 5px;
  transition: all .15s;
}

.approve:hover,
.remove:hover {
  opacity: .7;
}

.remove {
  display: inline-block;
  width: 50px;
  background-color: var(--reject-color);
  padding: 6px 12px;
  border-radius: 2px;
  font-size: 14px;
  transition: all .15s;
}
  </style>

  <title>INVENTORY</title>
</head>
<body>
  <div class="main-dashboard">  
    <div class="right-body">
      <div class="top-title">Inventory</div>
      <div class="container">
        <table class="table-cont">
          <tr>
            <th>Item name</th>
            <th>Quantity</th>
            <th>Category</th>
          </tr>
          <tr>
            <td>Computer</td>
            <td>12</td>
            <td>Electronics</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</body>
</html>