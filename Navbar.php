<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
    <style>
    
    ::-webkit-scrollbar {
            width: 0px;
        }
        
        .admin-links {
            position: absolute;
            font-family:agency fb;           
            font-weight:bold;
            font-size:18px;            
            right: 20px; /* Adjust as needed */
            top: 10px; /* Adjust as needed */
        }

        .admin-links a {
            text-decoration: none;
            color:rgb(0, 0, 0); /* Change color as needed */
            /* background-color : rgb(3, 30, 46);  */
            padding:5px;
            border:2px solid black;
            border-radius:5px;
            margin: 5px;
        }
        .admin-links a:hover{
            text-decoration: none;
            color:rgb(255, 255, 255); /* Change color as needed */
            background-color : rgb(3, 30, 46); 
            padding:5px;
            border:2px solid white;
            border-radius:5px;
            margin: 5px;
        }

    
        ::-webkit-scrollbar {
            width: 0px;
        }

    
    </style>
</head>

<body> 
    <header class="header">
        <div class="sliding-heading">
            
            <img src="imgs/logobg.png" alt="My Blog Logo" class="logo"><Font>BazaaRio!</Font>
        </div>
        <div class="admin-links">
            <a href="vlogin.php" target="f2">Vendors</a>
            <a href="alogin.php" target="f2">Admin</a>            
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav>
        <!-- Hamburger Checkbox -->
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">&#9776;</label>
        <ul class="nav-links">
            <li><a href="home.php" target="f2">Home</a></li>
            <li><a href="About.php" target="f2">About</a></li>
            <li><a href="Contact.php" target="f2" >Contact</a></li>
            <li><a href="categories.php" target="f2" >Categories</a></li>
            <!-- <li><a href="addtocart.php" target="f2" >My Orders</a></li> -->
            <li><a href="login.php" target="f2">Login</a></li>
        </ul>
    </nav>
</body>
</html>