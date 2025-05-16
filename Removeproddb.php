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

<html>
<head>
    <title>Remove Product</title>
    <style>
    
body{
        /*background-image:url('imgs/car10.webp');*/
        background-color:black;
     }
form{
    height: 50px;
    width: 200px;
    background-color: yellowgreen;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(0,0,0,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 45px;
    text-align: center;
    font-weight:bold;
    font-size:20px;
}
.button{

    background-color:white;
    border-radius:5px;
    font-family:algerian;
    font-weight:bold;
    font-size:15px;
    text-align:center;
    color:red;
    width:70px;
    height:30px;
}

.button:hover{

background-color:red;

font-family:algerian;
font-weight:bold;
text-align:center;
color:white;
width:80px;
height:40px;
}
h2 { 
			
            font-size: 25px; 
			font-family: Agency fb; 
			color:red; 
			text-align: center; 
            margin-top:0px;
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

        ::-webkit-scrollbar {
            width: 0px;
        }

    
    </style>
</head>

<body>
<form action="#">
<?php

$host="localhost";
$user="root";
$pass="";
$dbname="marketplace";

$con=new mysqli($host,$user,$pass,$dbname);

if(!$con)
{
    echo "not connected";
}

$pname=$_GET['pname'];
$pcode=$_GET['pcode'];



$q="DELETE FROM `addprod` WHERE `pcode`='$pcode' and `pname`='$pname' and `un`='$un';";
if($con->query($q) === true)
{
    // Check if any rows were affected
    if($con->affected_rows > 0) {
        echo "<h2> PRODUCT REMOVED SUCCESSFULLY</h2>";
    } else {
        echo "<h2> INVALID PRODUCT INFO</h2>";
    }
}
else
{
    echo "<h2> ERROR IN QUERY EXECUTION</h2>";
    echo mysqli_error($con);
}
    mysqli_close($con);
?>
<a href="removeprod.php"><input class="button" value="OK"></a>
</form>
</body>
</html>