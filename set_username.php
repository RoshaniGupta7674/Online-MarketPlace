<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['username'])) {
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    header("Location: test.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Username</title>
</head>
<body>

<h2>Set Your Username</h2>
<form method="POST">
    <input type="text" name="username" placeholder="Enter your username" required>
    <button type="submit">Set Username</button>
</form>

</body>
</html>