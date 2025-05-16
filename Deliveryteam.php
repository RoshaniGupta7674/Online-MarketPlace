<html>
<head>
	<title>DTJ Form</title>
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

    
::-webkit-scrollbar {
            width: 0px;
        }

form{
    height: auto;
    width: 400px;
    background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
    
    /* background-color: rgba(255,255,255,0.13); */
    position: absolute;
    transform: translate(-50%,-50%);
    top: 70%;
    left: 75%;
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
img{
  padding-top:1px;
  padding-left:50px;
}

        ::-webkit-scrollbar {
            width: 0px;
        }

    
</style>
</head>

<body>
<img src="imgs/dt4.png" alt="" height=500rem  >
<!-- <center>  -->
<form action="Deliveryteamdb.php" method="get">
<font color="black" size=5.5 face="algerian">Join us to Sell Your Products</font><br><br>
<!-- <font color="black" size="3"> -->
  <input type="text" class="input" name="n" size="42" placeholder="Enter Your name" required><br><br>
  <input type="text" class="input" name="p"  size="42" placeholder="Enter Phone No." pattern="[0-9]{10}" required oninvalid="this.setCustomValidity('Please enter your Valid Number!')" 
  oninput="this.setCustomValidity('')"><br><br>
  <input type="text" class="input" name="d" size="42" id="dob" placeholder="YYYY-MM-DD" required>
<p id="error" style="color:red;"></p>

<script>
document.querySelector("form").addEventListener("submit", function (event) {
    let inputDate = document.getElementById("dob").value;
    let errorMsg = document.getElementById("error");

    // Regular Expression to check YYYY-MM-DD format
    let datePattern = /^\d{4}-\d{2}-\d{2}$/;

    if (!datePattern.test(inputDate)) {
        errorMsg.textContent = "Invalid date format! Use YYYY-MM-DD.";
        event.preventDefault(); // Prevent form submission
        return;
    }

    let selectedDate = new Date(inputDate);
    let today = new Date();
    
    // Remove time part from today’s date for accurate comparison
    today.setHours(0, 0, 0, 0);

    if (selectedDate >= today) {
        errorMsg.textContent = "Date must be before today!";
        event.preventDefault(); // Prevent form submission
    } else {
        errorMsg.textContent = ""; // Clear error if valid
    }
});
</script>
  <input type="text" class="input" name="a"  size="42" placeholder="Enter Aadhar Card No." pattern="[0-9]{12}" required oninvalid="this.setCustomValidity('Please enter your valid aadhar no. !')" 
  oninput="this.setCustomValidity('')"><br><br>
  
  <input type="password" name="pw" class="input" size=42 placeholder="Enter Password" required><br><br>
  <input type="password" name="rpw"  class="input" size=42 placeholder="Re-enter Password" required ><br><br>
  
<a href="Deliveryteamdb.php" ><input type=submit  class="btn"></a><input type=reset  class="button">
</font>
</div>
<!-- </center> -->
</form>
</body>
</html>