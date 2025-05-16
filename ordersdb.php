<?php
$db = "marketplace";
$con = mysqli_connect("localhost", "root", "", "$db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if 'permission' is set in the POST request
    if (isset($_POST['permission']) && is_array($_POST['permission'])) {
        foreach ($_POST['permission'] as $id => $permission) {
            // Escape the permission value to prevent SQL injection
            $permission = mysqli_real_escape_string($con, $permission);
            $id = mysqli_real_escape_string($con, $id); // Escape the ID as well

            // Prepare the SQL query
            $query = "UPDATE `orders` SET `Status` = '$permission' WHERE `Oid` = '$id'";

            // Execute the query and check for errors
            if (!mysqli_query($con, $query)) {
                die("Error updating record: " . mysqli_error($con));
            }
        }
        // Redirect after successful update
        header("Location: orders.php");
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "No permissions were selected.";
    }
}

mysqli_close($con);
?>