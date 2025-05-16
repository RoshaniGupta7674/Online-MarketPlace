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
    </style>
</head>

<body> 
    <header class="header">
        <div class="sliding-heading">
            <img src="imgs/logobg.png" alt="My Blog Logo" class="logo"><Font>BazaaRio!</Font>
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
            <li><a href="addtocart.php" target="f2" >My Orders</a></li>
            <!-- <li><a href="payment.php" target="f2" >Payment</a></li> -->
            <li><a href="navbar.php" target='f1' onclick='openBothLinks()'>Log Out</a></li>
            <!-- <a href='navbar.php'  class='button'></a> -->
            <a href='home.php' target='f2' style='display: none;'></a>
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