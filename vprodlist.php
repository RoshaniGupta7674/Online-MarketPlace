<!DOCTYPE html>

<?php
session_start(); // Start the session

// Check if the Aadhar Card Number is set in the session
if (isset($_SESSION['un'])) {
    $un = $_SESSION['un'];
} else {
    // Redirect to the login page if not logged in
    header("Location: vlogin.php"); // Change to your login page
    exit();
}
?>

<html lang="en" class="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="prod.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
                ::-webkit-scrollbar {
            width: 0px;
        }

    </style>
    <script>

    function stickymenu(){

        var sticky=document.getElementById('sticky');
        if(window.pageYOffset > 220){

            sticky.classList.add('sticky');
        } 
        else{

            sticky.classList.remove('sticky');
        }
    }

    window.onscroll=function(){

        stickymenu();
    }

</script>

</head>
<body>
<div class="bg">
    <div class="cont">
    <h1 class="text">Products</h1>
<?php
$db = "marketplace";
$con = mysqli_connect("localhost", "root", "", $db);
// $cat=$_GET['cat'];


    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $result = mysqli_query($con, "SELECT `pimg`, `pname`, `pamt`, `pcode` FROM addprod where `un`='$un'") or die(mysqli_error($con));
    
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='product-container'>";
        echo "<img src='imgs/" . $row['pimg'] . "' alt='Product Image'>";
        echo "<div class='product-info'>";
        echo "<p><strong>" . $row['pname'] . "</strong></p>";
        echo "<pre>Price: ₹" . $row['pamt'] . "              Code: " . $row['pcode']."</pre>";
        echo "<input type='hidden' name='item_name' value='" . $row['pimg'] . "'>";
        echo "<input type='hidden' name='item_name' value='" . $row['pname'] . "'>";
        echo "<input type='hidden' name='item_price' value='" . $row['pamt'] . "'>";
        // echo "<button class='btn' onclick=\"addtocart('" . addslashes($row['pimg']) . "','" . addslashes($row['pname']) . "', '" . addslashes($row['pamt']) . "')\">Add to Cart</button>";
        echo "</div>";
        echo "</div>";
    }
    mysqli_close($con);
?>
</div>
</div>
</body>
</html>
