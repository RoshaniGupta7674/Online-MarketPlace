<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Database</title>
    <style>
        body {
            background-color: black;
        }
        form {
            height: auto;
            width: 300px;
            background-color: yellowgreen;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 45px;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }
        .button {
            background-color: white;
            border-radius: 5px;
            font-family: algerian;
            font-weight: bold;
            font-size: 15px;
            text-align: center;
            color: red;
            width: 70px;
            height: 30px;
        }
        .button:hover {
            background-color: red;
            color: white;
            width: 80px;
            height: 40px;
        }
        h2 {
            font-size: 25px;
            font-family: Agency fb;
            color: red;
            text-align: center;
            margin-top: 0px;
            animation: animate 3s linear infinite;
        }
        @keyframes animate {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1.0;
            }
            100% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <form action="#">
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "marketplace";

$con = new mysqli($host, $user, $pass, $dbname);

if (!$con) {
    echo "Not connected";
}

$name = $_GET['n'];
$email = $_GET['e'];
$pw = $_GET['pw'];
$rp = $_GET['rpw'];
$q = $_GET['q'];
$a = $_GET['a'];

// Check if passwords match
if ($pw !== $rp) {
    echo "<h2>Passwords do not match!</h2>";
    echo "<a href='register.php'><input class='button' value='OK'></a>";
} else {
    // Prepare the SQL statement
    $sql = "INSERT INTO `register`(`name`, `email`, `pw`, `rpw`, `question`, `answer`) 
            VALUES ('$name', '$email', '$pw', '$rp', '$q', '$a')";
    
    if ($con->query($sql) === true) {
        echo "<h2>Successfully Registered!</h2>";
        echo "<a href='login.php'><input class='button' value='OK'></a>";
    } else {
        echo "<h2>Registration Failed!</h2>";
        echo "<a href='register.php'><input class='button' value='OK'></a><br>";
        echo mysqli_error($con);
    }
}

mysqli_close($con);
?>

    </form>
</body>
</html>