<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Addprod.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Products</title>
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }

    </style>
</head>
<body>
     <main>   
        <form action="aremovedb.php" method="get" class="box">
            <h1> Product Details to Remove</h1><br>
            Enter Product Name : <input type="text" name="pname" required><br><br>
            Enter Product Code : <input type="text" name="pcode" required><br><br>
            <!-- Enter Product Amount : <input type="number" name="pamt" required><br><br> -->
            <!-- Add Image : <input type="file" name="pimg" required><br><br> -->
            <center>
            <!--  <a href="Addproddb.php"><button class="b1">Submit</button></a> --><br><br>
            <a href="aremovedb.php"><button class="b1">Remove</button></a>
            <input type="Reset" value="Reset" class="b1" >
            </center>
        </form>
</main>
</body>
</html>