<html>
<head>
	<title>login</title>
<style>
  a{
    color:blue;
  text-decoration: none;
}

body{
		/* background-image:url("imgs/"); */
        background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
		    background-size:cover;
		    /* background-repeat:no-repeat; */
        font-family:agency fb;
}

.transbox{
  height: 400px;
  width: 350px;
  margin: 30px;
  background-color: #ffffff;
  border-radius: 10px solid black;
  opacity: 0.3;
  
}
.btn{

  border-radius: 12px;  
}
.btn1{

  border-radius: 12px; 
}
.btn:hover{
  background-color: green;
  
}
.btn1:hover{
  background-color:red;
}




form{
    height: 350px;
    width: 300px;
    /* background-color: rgba(255,255,255,0.13); */
    background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
    position: absolute;
    transform: translate(-50%,-50%);
    top: 60%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 0px 35px;
    text-align: center;
}

.button{
    margin-top: 10px;
    width: 50%;
    background-color: #ffffff;
    color: #080710;
    padding: 10px;
    font-size: 13px;
    font-weight: bold;
    border-radius: 10px;
}

.button:hover{

  background-color:tomato;
}


.btn{
    margin-top: 10px;
    width: 50%;
    background-color: #ffffff;
    color: #080710;
    padding: 10px;
    font-size: 13px;
    font-weight: bold;
    border-radius: 10px;
 
}
.btn:hover{

  background-color:greenyellow;
}

.input{
    height:30px;
    border-radius:5px;
}

::-webkit-scrollbar {
            width: 0px;
        }

        ::-webkit-scrollbar-track {
          background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(255, 157, 0, 0.24));

        }

        ::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0);
            /* border-radius: 10px; */
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0);
        }


</style>
</head>

<body>

  
<center> 

  <form method="GET" action="logindb.php">
  <!-- <p align='left'>Want to sell Something...? Please Login!</p>     -->
   <br>
<img src="imgs/logo.png" width="70px" height="80px"><br>
<font color="black" size=6 face="algerian">LOGIN</font><br>

          <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

<font color="black" size="3">

  <input type="email" class="input" name="un" placeholder="email" size=42 required><br><br>
 
  <input type="password" class="input" name="pw" placeholder="password" size=42 required> <br><br>  
  DON'T HAVE AN ACCOUNT ? <a href="register.php">REGISTER HERE</a><br>
 <a href="forgotpw.php" > Forgot Password?</a><br>
<a href="logindb.php"><input type=submit  class="btn" ></a><input type="reset"  class="button">

</font>
</div>
</center>
</form>
</body>
</html>