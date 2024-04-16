<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <style>
       body, html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
        }

       body {
            background-image: url('../includes/images/dhvsu.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
      }

      .sign-up {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 3;
      }

      .form-container {
        background-color: rgba(255, 255, 255, 0.9); 
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 400px;
        z-index: 3;
      }

      .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        z-index: 3;
      }

      .form-container button,
      .form-container a.btn {
        display: block;
        margin: 0 auto; 
        text-align: center;
        z-index: 3; 
      }

      .image-overlay {
            position: absolute;
            top: 10%;
            left: -5%;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

      .image-overlay-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 110%;
            background-color: rgba(10, 150, 300, 0.5);  
            z-index: 2;
       }

       .image-overlay img {
            width: 900px;
            height: 900px;
            filter: blur(1px);
            z-index: -1; 
       }

    </style>
</head>
<?php include_once('../includes/header-sd.php')?>
<body>
<div class="sign-up">
    <div class="form-container">
        <h2>Edit Profile</h2>
        <form>
            <div class="mb-3">
                <label for="itemname" class="form-label">Item name</label>
                <input type="text" class="form-control" id="itemname" name="itemname" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="mb-3">
                <label for="purpose" class="form-label">Purpose</label>
                <input type="text" class="form-control" id="purpose" name="purpose" required>
            </div>
            <div class="mb-3">
                <label for="cour-sec" class="form-label">Course and Section</label>
                <input type="text" class="form-control" id="cour-sec" name="cour-sec" required>
            </div>
            <a href="#" class="btn btn-primary">submit</a>
        </form>
    </div>
</div>
<div class="image-overlay-bg"></div>
<div class="image-overlay">
    <img src="../includes/images/ccs1.png" alt="ccs.png">
</div>
    
</body>
</html>
