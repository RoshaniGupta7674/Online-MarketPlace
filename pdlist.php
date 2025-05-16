<html>
<head>
    <title>USERS PAGE</title>
    <style>
        body {
            background: linear-gradient(to left, rgba(255, 157, 0, 0.24), rgba(36, 0, 79, 0.34));
            background-size: 100% 100%;
            align-items: center;
        }

        td {
            background-color: cornsilk;
            color: black;
            text-align: center;
            border-radius: 7px;
        }

        th {
            padding-left: 50px;
            padding-right: 50px;
            background-color: rgba(127, 255, 212, 0.339);
            text-align: center;
            font-weight: bold;
            color: white;
        }

        h1 {
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            padding-top: 20px;
        }

        .total {
            background-color: #f4f4f4;
            padding: 1rem;
            height: auto;
            margin-bottom: 1px;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.49);
            text-align: center;
        }

        .btn {
            height: 30px;
            width: 150px;
            font-weight: bold;
            border-radius: 20px;
            background-color: rgb(196, 238, 27);
            color: rgb(255, 0, 102);
        }

        .btn:hover {
            height: 35px;
            width: 170px;
            border-radius: 10px;
            background-color: green;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }

        table {
            width: 100%;
            text-align: center;
            font-weight: bold;
        }

        th {
            background-color: rgb(39, 0, 63);
            color: rgb(245, 229, 255);
            font-size: 25px;
        }

        td {
            background-color: #f4f4f4;
            color: black;
        }

        select {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            font-weight: bold;
            font-family: cambria;
            margin-top: 10px;
        }

        h1 {
            color: black;
        }


        ::-webkit-scrollbar {
            width: 0px;
        }

    
    </style>
</head>

<body>
    <form action="#" method='post'>
        <h1>All Product List</h1>
        <?php
        $db = "marketplace";
        $con = mysqli_connect("localhost", "root", "", "$db");
        if (!$con) {
            die("not connected");
        }

        // Query to get all products
        $result = mysqli_query($con, "SELECT `pname`, `pcode`, `pamt`, `pimg`, `pcat`, `un` FROM `addprod`") or die(@mysqli_error());

        // Initialize total count and category count array
        $totalProducts = 0;
        $categoryCount = [];

        // Fetch products and count them
        while ($row = @mysqli_fetch_array($result)) {
            $totalProducts++;
            $category = $row['pcat'];
            
            // Count products by category
            if (isset($categoryCount[$category])) {
                $categoryCount[$category]++;
            } else {
                $categoryCount[$category] = 1;
            }
        }

        // Reset the result pointer to fetch data again for displaying in the table
        mysqli_data_seek($result, 0);

        // Display the product table
        echo "<center><table border=0 cellpadding=10px cellspacing=2px>";
        echo "<tr><th>Name</th><th>Code</th><th>Amount</th><th>Image</th><th>Category</th><th>Vendor</th></tr>";
        while ($row = @mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['pname'] . "</td>";
            echo "<td>" . $row['pcode'] . "</td>";
            echo "<td>" . $row['pamt'] . "</td>";
            echo "<td><img src='imgs/" . $row['pimg'] . "' alt='" . $row ['pname'] . "' style='width:50px;height:50px;'></td>";
            echo "<td>" . $row['pcat'] . "</td>";
            echo "<td>" . $row['un'] . "</td>";
            echo "</tr>";
        }
        echo "</table></center>";

        // Display total count of products
        echo "<div class='total'>Total Products: $totalProducts</div>";

        // Dropdown for category selection
        echo "<div class='total'>";
        echo "<label for='category'>Select Category:</label>";
        echo "<select id='category' name='category' onchange='showCount(this.value)'>";
        echo "<option value=''>--Select Category--</option>";
        foreach ($categoryCount as $category => $count) {
            echo "<option value='$category'>$category</option>";
        }
        echo "</select>";
        echo "<br><br><div id='countDisplay'></div>";
        echo "</div>";
        ?>

        <script>
            function showCount(category) {
                const counts = <?php echo json_encode($categoryCount); ?>;
                const display = document.getElementById('countDisplay');
                if (category in counts) {
                    display.innerHTML = "Total Products in " + category + ": " + counts[category];
                } else {
                    display.innerHTML = "";
                }
            }
        </script>
    </form>
</body>
</html>