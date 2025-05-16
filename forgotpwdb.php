<html>
<head>
    <title>fpassword</title>
    <style>
            body{
            /* background-image:url('imgs/back.jpg'); */
             /* background:linear-gradient(black,aqua);  */
             background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
            background-size:100% 100%;
            background-repeat:no-repeat;
        }

        form{
            height: 200px;
            width: 200px;
            /* background-color: rgba(255,255,255,0.13);  */
             /* background:linear-gradient(darkgrey,black); */
             background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
             color:Black;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;
            text-align: center;
        }
        a{
        color:blue;
        text-decoration: none;
        }
        h3{
            position: relative;
            height:30px;
            width:70%;
            background-color:cornsilk;
            border:5px solid aqua;
            padding-top:15px;
            margin-top:50px;
            border-radius:20px;
            font-size:20px;
            filter:blur(5px);
        }
        h3:hover{

            filter:blur(0px);
        }
        input{
            background-color:cornsilk;
            border-radius:10px;
            height:30px;
            width:100%;
            font-weight:600;
        }

    
        ::-webkit-scrollbar {
            width: 0px;
        }

    
    </style>
</head>

<body>
    
<?php

 $uname=$_POST['uname'];
 $q=$_POST['q'];
 $a=$_POST['a'];
$db="marketplace";
$con=mysqli_connect("localhost","root","","$db");
if(!$con)
{
    die("not connected");
}

$result=mysqli_query($con,"select  `pw` from register where email='$uname' and question='$q' and answer='$a' ") ;
echo "<form>";
echo"<h2><u>PASSWORD</u></h2>";
if(isset($result))
{
    
    while($row=@mysqli_fetch_array($result))
    {
    echo"<center><h3>";
    echo $row['pw'];
    echo"</h3></center>";
    
    }

}
else
{
    echo "<h2>Invalid User</h2>";
}
echo"<a href='login.php'><input type=button value='Go To Login'></a>";
echo"</form>";
@mysqli_close($con);
?>

</body>
</html>