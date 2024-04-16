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
      body , html {
        height: 100%;
        margin: 0;
        font-family: 'Roboto', sans-serif;
      }

      body {
        background-image: url('../includes/images/dhvsu.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }

      .container-h1 {
       position: absolute;
       top: 20%;
       left: 50%;
       transform: translateX(-50%);
       z-index: 3; 
       color: white; 
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
        z-index: 2;
      }

      .form-container {
        background-color: rgba(255, 255, 255, 0.9); 
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 400px;
        z-index: 4;
      }

      .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
      }

      .form-container button,
      .form-container a.btn {
        display: block;
        margin: 0 auto; 
        text-align: center; 
      }

      .image-overlay {
        position: absolute;
        top: 2%;
        right: 50%;
        z-index: 1; 
        filter: blur(1px);
      }

      .image-overlay img {
        width: 1000px;  
        height: auto; 
        filter: blur(1px); 
      }
    </style>
</head>
<body>

<div class="container-h1">
   <h1>Inventory System</h1>
</div>
<div class="sign-up">
    <div class="form-container">
        <h2>Sign Up</h2>
        <form>
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                  <div class="form-group">
                     <label for="username" class="form-label">Username</label>
                     <input type="text" class="form-control" id="username" name="username">
                  </div>
                  <div class="form-group">
                     <label for="password" class="form-label">Password</label>
                     <input type="password" class="form-control" id="password" name="password">
                  </div>
                </div>
            </div>
            <div class="mb-3">
               <div class="d-flex justify-content-between">
                  <div class="form-group">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                  </div>
                   <div class="form-group">
                     <label for="lastname" class="form-label">Lastname</label>
                     <input type="text" class="form-control" id="lastname" name="lastname">
                   </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                  <div class="form-group">
                    <label for="middlename" class="form-label">Middlename</label>
                    <input type="text" class="form-control" id="middlename" name="middlename">
                  </div>
                  <div class="form-group">
                     <label for="position" class="form-label">Position</label>
                     <input type="text" class="form-control" id="position" name="position">
                  </div>
                </div>
            </div>
            <a href="index.php" class="btn btn-primary">Sign In</a>
          <div class="mb-2 text-center">
            <p>Already have an account? <a href="index.php">login</a></p>
          </div>
        </form>
    </div>
</div>

<div class="image-overlay">
    <img src="../includes/images/ccs1.png" alt="ccs.png">
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>
</html>
