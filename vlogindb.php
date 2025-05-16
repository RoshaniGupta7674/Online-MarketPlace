<html>
<head>
    <title>logdatabase</title>
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
    padding:10px;
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
			animation: animate 
				3s linear infinite; 
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
    session_start();

    $host="localhost";
    $user="root";
    $pass="";
    $dbname="marketplace";

    $conn=mysqli_connect($host,$user,$pass,$dbname);

    if(!$conn)
    {
        echo "Connection Failed";
    }


    if(isset($_GET['un']) && isset($_GET['pw']))
    {
        function validate($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);  
                return $data;
        }
    
    }
    
    $uname = validate($_GET['un']);
    $pass = validate($_GET['pw']);
    $_SESSION['un'] = $uname;
 
    if(empty($uname))
    {
        header("location:vlogin.php?erro=user name is required");
        exit();
    }
    else if(empty($pass))
    {
        header("location:vlogin.php?erro=password is requeired");
        exit();
    }

    $sql="SELECT * FROM `deliveryteam` WHERE dadharcardno='$uname' AND dpw='$pass' ";
    $result = mysqli_query($conn,$sql);
    
if(mysqli_num_rows($result)===1)
{
        $row=mysqli_fetch_assoc($result);
    if($row['Status'] === 'Permit')
    {
            
        if($row['dadharcardno'] === $uname && $row['dpw']===$pass )
        {
            // echo "logged in ";
            // $_SESSION['email']=$row['email'];
            // $_SESSION['name']=$ow['name'];
            // $_SESSION['id']=$row['id'];

            $sql="INSERT INTO `vlogin`(`dadharcardno`, `dpw`) VALUES ('$uname','$pass')";
                if($conn->query($sql)==true)
                {
                    echo "<h2> SUCCESSFULLY LOGINED </h2>";
                    // echo "<a href='navbarin.php' target='f1'><input class='button' value='OK'>Ok</a>";
                    // echo "<a href='home.php' target='f2'><input value='OK'>Ok</a>";
                    // echo "<a href='navbarin.php' target='f1'>O<a href='home.php' target='f2'>k</a></a>";
                    echo "<a href='vnavbar.php' target='f1' onclick='openBothLinks()' class='button'>Ok</a>";
                    echo "<a href='vhome.php' target='f2' style='display: none;'>Ok</a>";
                    echo "<script>
                                function openBothLinks() {
                                    var link1 = document.querySelector('a[target=f1]');
                                    var link2 = document.querySelector('a[target=f2]');
                                    
                                    link1.click();
                                    link2.click();
                                }
                            </script>";

                    // header('location:home.php');
                }
            
            exit();
        }
    } 
    else
    {
    //    echo "alert('Your access has been restricted by the admin. Please wait until they grant you permission!')";
        header("location:vrestrictedmsg.php ");
        exit();
    }
}  
else
{
    // alert("Your access has been restricted by the admin. Please wait until they grant you permission!");
    header("location:vlogin.php ");
    exit();
}
  

    /*$sql="INSERT INTO login VALUES($user,$password)";*/

    // $sql="INSERT INTO `login`(`username`, `password`) VALUES ('$user','$password')";
    // if($conn->query($sql)==true)
    // {
    //     echo"<h2> SUCCESSFULLY LOGINED</h2>";
    // }

    mysqli_close($conn); 
    ?> 
<a href="Frame.php"><input class="button" value="OK">Ok</a>
    </form>
</body>
</html>