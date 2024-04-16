<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>
    
    <style>
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

        .image-overlay img {
            width: 900px;
            height: 900px;
            filter: blur(1px);
            z-index: -1; 
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
</body>
</html>