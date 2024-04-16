<?php require_once('header-admin.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../admin-css/reset.css">
  <title>Updating Item</title>
</head>
<style>
  :root {
    --header-color: #124076;
    --sidebar-color: #5F5C5C;
    --sidebar-option-color: #444040;
    --approve-color: #39BF17;
    --reject-color: #FF0000;
    --bg-color: #B5C0D0;
    --first-row-color: #F2F2F2;
    --sec-row-color: #ECF9FF;
    --update-color: #F0E076;
  }

  .container {
    height: calc(100vh - 60px);
    background-color: var(--bg-color);

    display: grid;
    grid-template-rows: 80px 1fr;
  }

  .top {
    margin: 40px auto;
    font-size: 24px;
    font-weight: 700;
  }
  
  .form {
    margin: 0 auto;
    background-color: #ECF9FF;
    padding: 35px 45px;
    height: 235px;
    border-radius: 2px;
  }

  label {
    font-size: 14px;
  }

  input {
    height: 30px;
    width: 250px;
    outline: none;
    margin-bottom: 12px;
  }

  button {
    border-radius: 2px;
    border: none;
    background-color: var(--header-color);
    color: #ECF9FF;
    font-weight: 500;
    width: 100%;
    height: 35px;
    cursor: pointer;
    transition: all .15s;
  }

  button:hover {
    opacity: .9;
  }
</style>
<body>
  <div class="container">
    <div class="top">Update Item</div>
    <div class="form">
      <form action="">
        <label for="itemName">Item name</label><br>
        <input type="text" id="itemName"><br>
        <label for="quan">Quantity</label><br>
        <input type="text" id="quan"><br>
        <label for="cate">Category</label><br>
        <input type="text" id="cate"><br>
        <button>Update</button>
    </form>
    </div>
  </div>
</body>
</html>