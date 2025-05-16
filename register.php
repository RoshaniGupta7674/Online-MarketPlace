<html>
<head>
	<title>REGISTRATION</title>
<style>
  a{
  color:blue;
  text-decoration: none;
}

body{
		/* background-image:url("imgs/b10.jpg"); */
        background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
		background-size:cover;
    padding:20px;
		/* background-repeat:no-repeat; */
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


#myVideo {
  position:fixed;
  right: 2px;
  bottom: 2px;
  width: 100%;
  height: 100%;
}



form{
    height: auto;
    width: 400px;
    background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
    
    /* background-color: rgba(255,255,255,0.13); */
    position: absolute;
    transform: translate(-50%,-50%);
    top: 70%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
    text-align: center;
}

.button{
    margin-top: 20px;
    width: 50%;
    background-color: #ffffff;
    color: #080710;
    padding: 10px 0;
    font-size: 15px;
    font-weight: 600;
    border-radius: 10px;

}

.button:hover{

  background-color:tomato;
}

.btn{
    margin-top: 20px;
    width: 50%;
    background-color: #ffffff;
    color: #080710;
    padding: 10px 0;
    font-size: 15px;
    font-weight: 600;
    border-radius: 10px;
  
}

.btn:hover{

  background-color:greenyellow;
}
select{
  height:25px;
  width:200px;
}
/* .ans{

  height:25px;
  width: 180px;
} */

.input{
    height:30px;
    border-radius:5px;
}
    
::-webkit-scrollbar {
            width: 0px;
        }

</style>
</head>

<body>

<center> 
<form action="registerdb.php" method="get">
<font color="black" size=5.5 face="algerian">REGISTRATION FORM</font><br><br>
<!-- <font color="black" size="3"> -->
  <input type="text" class="input" name="n" size="42" placeholder="Enter Your name" required><br><br>
  <input type="email" class="input" name="e"  size="42" placeholder="E-Mail ID" required><br><br>

  <input type="password" name="pw" class="input" size=42 placeholder="Enter Password" required><br><br>
  <input type="password" name="rpw"  class="input" size=42 placeholder="Re-enter Password" required ><br><br>
  <!-- Security Question:  <br><br> --><hr>
  <select name="q" class="input" required>
    <option value=""> Select Security Question : </option>
    <option value="What is your favorite food?">What is your favorite food?</option>
    <option value="What is your favorite place?">What is your favorite place?</option>
    <option value="What is your nick name?">Who is your Idol?</option>
  </select><br><br>
  <input type="text" class="input" name="a" placeholder="Your Answer" required><hr>
<a href="registerdb.php" ><input type=submit  class="btn"></a><input type=reset  class="button">
</font>
</div>
</center>
</form>
</body>
</html>