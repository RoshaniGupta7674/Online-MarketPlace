
<html>
<head>
<style>
body{
	/* background-color:black; */
    background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
	color:black;
	background-size:100% 100%;
}
.tab 
	{
	float:left ;
	padding:10px;
	 border: 5px solid orange;
	background-color:wheat;
    
	width: 15%;
	height: 330px;
	/* padding-top:20px; */
	}

.tab button 
	{
	display: block;
	background-color: inherit;
	color: black;
	padding: 22px 16px;
	width: 100%;
	border:none;
	/* border-radius:15px; */
	outline: none;
	text-align: center;
	cursor: pointer;
	font-size: 17px;
	}

.tab button:hover 
	{
	background-color: rgba(229, 255, 253, 0.91);
	}

.tab button.active 
	{
	background-color: ivory;
	}


.tabcontent 
	{
	/* float: left; */
	padding: 10px 40px;
	border: 3px solid orange;
	border-radius:80px;	
	width: 50%;
	/* background-color:rgba(231, 96, 96, 0.132); */
	border-left: none; 
	border-right: none; 
	height: 400px;
	}


input[type="text"], input[type="password"]
	{
	display: block;
	box-sizing: border-box;
	border: none;
	border-bottom: 6px solid;
	background: #ffffff;
	padding: 5px;
	margin: 0px 0px 2px 0px;
	border: 1px solid #888888;		
	width: 50%;
	}
	
p
	{
	margin: 10px 0px 3px 0px;
	font-size: 17px;
	font-width: 17px strong;
	
	}
	
input[type="submit"], input[type="reset"]
		{
		background-color: #d9d9d9;
		color: black;
		padding: 10px 20px;
		margin: 15px 10px 20px 40px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		width: 15%;
		text:strong;
		}	
	
	  
        ::-webkit-scrollbar {
            width: 0px;
        }


</style>
</head>

<body>
	<center>
		
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Credit Card')"id="defaultOpen">Credit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Debit Card')">Debit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Debit Card + ATM Pin')">Debit Card + ATM Pin</button>
		<button class="tablinks" onclick="openCity(event, 'Internet Banking')">Internet Banking</button>
		<button class="tablinks" onclick="openCity(event, 'Wallet/Cash Card')">UPI</button>
		<!-- <a href="home.php" style="text-decoration:none;" ><button class="tablinks" >Go To Home Page</button></a> -->
	</div>	
	
	<div id="Credit Card" class="tabcontent">
		<h2>Pay by Credit Card</h2>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="Month">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name">
		
		<a href="spay.php"><input type="submit" value="Submit"></a>
		<input type="reset" value="Reset">
	</div>
	
	<div id="Debit Card" class="tabcontent">
		<h3>Pay by Debit Card</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="Month">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name">
		
		<a href="spay.php"><input type="submit" value="Submit"></a>
		<input type="reset" value="Reset">
	</div>
	
	<div id="Debit Card + ATM Pin" class="tabcontent">
		<h3>Pay by Debit Card + ATM Pin</h3>
		<p>Card Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="Month">
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv">
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name">
		
		<p>Pin</p>
		<input type="password" name="pwd" placeholder="Enter Pin">
		
		<a href="spay.php"><input type="submit" value="Submit"></a>
		<input type="reset" value="Reset">
	</div>
	
	<div id="Internet Banking" class="tabcontent">
		<h3>Pay by Internet Banking</h3>
		<p>User ID</p>
		<input type="text" name="userid">
	
		<p>ATM Pin/Password</p>
		<input type="password" name="pwd">
		
		<a href="spay.php"><input type="submit" value="Submit"></a>
		<input type="reset" value="Reset">
	</div>
	
	<div id="Wallet/Cash Card" class="tabcontent">
		<h3>Pay by UPI ID</h3>
		<p>UPI Number</p>
		<input type="text" name="card" placeholder="Enter Card Number">
	
		<p>Pin</p>
		<input type="password" name="pwd" placeholder="Enter Pin">
		
		<a href="spay.php"><input type="submit" value="Submit"></a>
		<input type="reset" value="Reset">
	</div>
<!-- 	
	<div id="IMPS" class="tabcontent">
		<h3>Pay by IMPS</h3>
		<p>Beneficiary Mobile Number</p>
		<input type="text" name="mobile">
	
		<p>Beneficiary MMID</p>
		<input type="text" name="mmid">
	
		<p>Amount</p>
		<input type="text" name="amount">
	
		<p>Remarks</p>
		<input type="text" name="remarks">
		
		<p>Transaction Password</p>
		<input type="password" name="pwd">
		
		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</div>
	 -->
	
	<script>
		function openCity(evt, mop) 
		{
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) 
			{
				tabcontent[i].style.display = "none";
			}
		
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) 
			{
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
		
			document.getElementById(mop).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
		
		</center>	
</body>
</html>
