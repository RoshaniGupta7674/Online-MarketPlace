<?php
session_start(); // Start the session

// Database connection
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "marketplace"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the address from the form
$address = $_POST['address'];

// Get cart items from the hidden input
$cart = json_decode($_POST['cart'], true); // Assuming you send cart as JSON

// Retrieve the customer name from the session
$customer = isset($_SESSION['customer_name']) ? $_SESSION['customer_name'] : "Guest"; // Default to "Guest" if not logged in

foreach ($cart as $item) {
    $itemName = $item['name'];
    $itemPrice = $item['price'];
    
    // First, retrieve the username based on the item name
    $query = "SELECT `un` FROM `addprod` WHERE `pname` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $itemName);
    $stmt->execute();
    $stmt->bind_result($un);
    $stmt->fetch();
    $stmt->close();

    // Prepare and bind for the insert statement
    $insertStmt = $conn->prepare("INSERT INTO orders (Item, Price, Customer, un, Status) VALUES (?, ?, ?, ?, ?)");
    $status = "New Order"; // Default status
    $insertStmt->bind_param("sssss", $itemName, $itemPrice, $customer, $un, $status);
    
    // Execute the insert statement
    $insertStmt->execute();
    $insertStmt->close();
}

// Close the connection
$conn->close();

// Redirect to a success page or display a success message
header("Location: spay.php");
exit();
?>