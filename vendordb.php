<?php
$db = "marketplace";
$con = mysqli_connect("localhost", "root", "", "$db");
if (!$con) {
    die("not connected");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST['permission'] as $id => $permission) {
        $permission = mysqli_real_escape_string($con, $permission);
        $query = "UPDATE `deliveryteam` SET `status` = '$permission' WHERE `dtid` = $id";
        mysqli_query($con, $query) or die(@mysqli_error($con));
    }
    header("location:vendor.php");
    echo "Permissions updated successfully!";
    
}

@mysqli_close($con);
?>