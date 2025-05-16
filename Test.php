<?php
session_start();
$host = 'localhost'; // Your database host
$db = 'chat_app'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle message submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['message'])) {
    $sender = $_SESSION['username']; // Get the username from the session
    $message = htmlspecialchars($_POST['message']);
    
    $stmt = $conn->prepare("INSERT INTO messages (sender, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $sender, $message);
    $stmt->execute();
    $stmt->close();
}

// Fetch messages
$result = $conn->query("SELECT * FROM messages ORDER BY timestamp ASC");
$messages = [];
while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

// Set username if not already set
if (!isset($_SESSION['username'])) {
    if (isset($_POST['username'])) {
        $_SESSION['username'] = htmlspecialchars($_POST['username']);
    } else {
        // Redirect to set username if not set
        header("Location: set_username.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .chat-container { width: 400px; margin: 0 auto; }
        .chat-box { border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: scroll; }
        .user-input { margin-top: 10px; }
    </style>
</head>
<body>

<div class="chat-container">
    <h2>Chat Room</h2>
    <div class="chat-box" id="chat-box">
        <?php foreach ($messages as $message): ?>
            <div><strong><?php echo htmlspecialchars($message['sender']); ?>:</strong> <?php echo htmlspecialchars($message['message']); ?></div>
        <?php endforeach; ?>
    </div>

    <form method="POST" class="user-input">
        <input type="text" name="message" placeholder="Type your message..." required>
        <button type="submit">Send</button>
    </form>
</div>

<script>
    // Auto-scroll to the bottom of the chat box
    const chatBox = document.getElementById('chat-box');
    chatBox.scrollTop = chatBox.scrollHeight;
</script>

</body>
</html>