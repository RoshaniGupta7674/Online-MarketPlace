<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
        <!-- <div class="admin-links"> -->
            <!-- <a href="Deliveryteam.php" target="f2">Vendors</a> -->
            <!-- <a href="admin.php" target="f2">Admin</a>             -->
        <!-- </div> -->
    </header>

    <!-- Navigation Menu -->
    <nav>
        <!-- Hamburger Checkbox -->
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="hamburger">&#9776;</label>
        <ul class="nav-links">
        <a href='home.php' target='f2' style='display: none;'></a>
            <li><a href='ahome.php' target='f2' style='display: none;'></a></li>
            <li><a href="ahome.php" target="f2">Home</a></li>
            <li><a href="users.php" target="f2">User List</a></li>
            <li><a href="vendor.php" target="f2">Vendor List</a></li>
            <li><a href="pdlist.php" target="f2">Product List</a></li>
            <li><a href="aremove.php" target="f2">Remove Product</a></li>
            <li><a href="dashboard.php" target="f2">Dashboard</a></li>
            <li><a href="navbar.php" target='f1' onclick='openBothLinks()'>Log Out</a></li>
            <!-- <a href='navbar.php'  class='button'></a> -->
            <!-- <li><a href='ahome.php' target='f2' style='display: none;'></a></li> -->
            <script>
                function openBothLinks() {
                    var link1 = document.querySelector('a[target=f1]');
                    var link2 = document.querySelector('a[target=f2]');
                    
                    link1.click();
                    link2.click();
                }
            </script>
        </ul>
    </nav>
</body>
</html>