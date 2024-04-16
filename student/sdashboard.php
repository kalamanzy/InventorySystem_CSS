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

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #001A8F;            
        }

        .img-nav {
            width: 50px;
            height: 50px;
            margin-left: 10px;
        }

        .navbar-sysname {
            color: white;
            text-decoration: none;  
            margin-right: auto;         
        }

        .navbar-links {
            display: flex;
            gap: 30px;
            margin-right: 20px;
        }

        .navbar-home,
        .navbar-request,
        .navbar-inventory {
            color: white;
            text-decoration: none;
        }

        .img-user, .img-logout {
            width: 35px;
            height: 35px;
            margin-left: 10px;
        }

        .image-overlay {
            position: absolute;
            top: 10%;
            left: 25%;
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

        .body {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 4;
        }

        .body-h1 {
            font-size: 2em;
            margin-bottom: 20px;
            z-index: 4;
        }

        .body-p1 {
            font-size: 1.2em;
            z-index: 4;
        }

        .btn-req{
            position: absolute;
            top: 40%;
            left: 45%;
            z-index: 4;             
        }

        .btn-request {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #001A8F;
            background-color: #FFFFFF;
            border: none;
            border-radius: 30px;            
        }
        
        
    </style>
</head>
<body>
<div class="navigation">
    <nav class="navbar sticky-top">
        <img class="img-nav" src="../includes/images/ccs1.png" alt="ccs.png">
        <a class="navbar-sysname" href="sdashboard.php">DHVSU CCS Inventory System</a>
        <div class="navbar-links">
            <a class="navbar-home" href="">Home</a>
            <a class="navbar-request" href="">Request</a>
            <a class="navbar-inventory" href="">Inventory</a>
            <img class="img-user" src="../includes/images/user.png" alt="user.png">
            <img class="img-logout" src="../includes/images/logout.png" alt="logout.png">
        </div>
    </nav>
</div>
<div class="body">
    <h1 class="body-h1">WELCOME, USERNAME</h1>
    <p class="body-p1">nung bisa kang mag request gamit, istu yamu ing pintalan mu.</p>
</div>
<div class="btn-req">
    <button type="button" class="btn-request">Request an item?</button>
</div>
<div class="image-overlay-bg"></div>
<div class="image-overlay">
    <img src="../includes/images/ccs1.png" alt="ccs.png">
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>
</html>
