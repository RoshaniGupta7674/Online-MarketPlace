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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Addprod.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }

    </style>
</head>
<body>
   <main>     
        <form action="Addproddb.php" method="get" class="box">
        <!-- <p>Your Aadhar Card Number: <?php echo $un; ?></p> -->
            <h1>Add Product Details</h1>
            Select Category : <select name="pcat" value="select">
                                <option value="Garments">Garments</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Fruits & Vegetables">Fruits & Vegetables</option>
                                <option value="Electronic Devices">Electronic Devices</option>
                                <option value="Beauty Products">Beauty Products</option>
                                <option value="Jewellery & Accessories">Jewellery & Accessories</option>
                                <option value="Toys">Toys</option>
                                <option value="Food & Drinks">Food & Drinks</option>
                            </select><br><br>
            Enter Product Name : <input type="text" name="pname" required><br><br>
            Enter Product Code : <input type="text" name="pcode" required><br><br>
            Enter Product Amount : <input type="number" name="pamt" required><br><br>
            Add Image : <input type="file" name="pimg" required><br><br>
            
            <center> <a href="Addproddb.php"><button class="b1">Submit</button></a>
            <!-- <a href="Removeproddb.php"><button class="b1">Remove</button></a> -->
            <input type="Reset" value="Reset" class="b1" >
            </center>
        </form>
        <main>  
</body>
</html>