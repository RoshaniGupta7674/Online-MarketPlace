<?php
session_start(); // Start the session

// Check if the Aadhar Card Number is set in the session
if (isset($_SESSION['un'])) {
    $un = $_SESSION['un'];
} else {
    // Redirect to the login page if not logged in
    header("Location: ordersdb.php"); // Change to your login page
    exit();
}
?>

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
            height: 2rem;
            margin-bottom: 1px;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.49);
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

        ::-webkit-scrollbar {
            width: 0px;
        }

        select {
            border: 1px solid transparent;
            background-color: transparent;
            font-weight: bold;
            font-family: cambria;
        }
        h1 {
            color: black;
        }
    </style>
</head>

<body>
    <form action="ordersdb.php" method='post'>
        <h1>Orders</h1>
        <?php
        $db = "marketplace";
        $con = mysqli_connect("localhost", "root", "", "$db");
        if (!$con) {
            die("not connected");
        }

        // Ensure Oid and Status are included in the SELECT statement
        $result = mysqli_query($con, "SELECT `Oid`, `Item`, `Price`, `Customer`, `un`, `Status` FROM `orders` WHERE `Status`='New Order' and `un`=$un") or die(@mysqli_error($con));

        echo "<center><table border=0 cellpadding=10px cellspacing=2px>";
        echo "<tr><th>Item</th><th>Price</th><th>Customer</th><th>Status</th><th>Permission</th></tr>";
        while ($row = @mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Item'] . "</td>";
            echo "<td>" . $row['Price'] . "</td>";
            echo "<td>" . $row['Customer'] . "</td>";
            echo "<td>" . $row['Status'] . "</td>";
            echo "<td>";
            // Check if Oid exists in the row
            if (isset($row['Oid'])) {
                echo "<select name='permission[" . $row['Oid'] . "]' required>
                        <option value='New Order'" . ($row['Status'] == 'New Order' ? ' selected' : '') . ">New Order</option>
                        <option value='Delivered'" . ($row['Status'] == 'Delivered' ? ' selected' : '') . ">Delivered</option>
                      </select>";
            } else {
                echo "N/A"; // Or handle the case where Oid is not available
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table></center><br>";
        echo "<div class='total'>";
        echo "<center><button type='submit' class='btn'>Submit</button></center>";
        echo "</div>";
        @mysqli_close($con);
        ?>
    </form>
</body>
</html>