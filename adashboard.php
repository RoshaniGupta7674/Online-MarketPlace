<html>
<head>
	<title>DASHBOARD</title>
<style>
 body{
		/* background-image:url("imgs/car6c.jpg"); */
    /* background-color:; */
    background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
    background-size:cover;
		background-repeat:no-repeat;
}
  #myVideo {
          position:fixed;
          right: 0px;
          bottom: 0px;
          width: 1300px;
          height: 100%;
          filter: blur(0px);
          }
         

         body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    video {
      position: fixed;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -100;
      transform: translateX(-50%) translateY(-50%);
      background: url('imgs/cvideo.mp4') no-repeat;
      background-size: cover;
    }

         /* .callout{

            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 110%;
            text-align: center;
            position: relative;
            z-index: 10;
            width: 100%;
            margin: auto;

            }    */


.btn{
border: 1px solid ;
border-color:white;
border-radius: 6px;
background-color:cornsilk;
height: 50px;
margin:20px;
/* width: 00px; */
color:black;
font-weight:bold;
padding:50px 50px 50px 50px;
text-align:center;
padding-right:50px;
font-size:15px;
box-shadow: 0 6px 6px rgba(0,0,0,0.6);
}

.btn:hover{

  background-color:rgba(0,0,0,0.5);
  color: white;
}

u{
    margin-top:50px;
}

.geeks {
            width: 50%;
            top: 5%;
            position: absolute;
            left: 25%;
            overflow: hidden;
            animation: animate 2s linear forwards;
        }
 
        .geeks h1 {
            color: black;
        }
 
        @keyframes animate {
            0% {
                width: 0px;
                height: 0px;
            }
            30% {
                width: 50px;
                height: 0px;
            }
            60% {
                width: 50px;
                height: 80px;
            }
        }
            
::-webkit-scrollbar {
            width: 0px;
        }

</style>
</head>

<body>
<!-- <video autoplay muted loop id="myVideo">
        <source src="imgs/videos/shoes 1.mp4" type="video/mp4">
    </video> -->

<div class="callout">
<center >
    <!-- <br><br><br><img src="imgs/rwlogooo.png" width="50%" height="20%"><br> -->
    <div class="geeks">
          <font color="black" size=7 face="algerian"><u>ADMIN-DASHBOARD</u></font><br>
          </div>
<div class="container">
  <br><br><br><br><br><br><br><br>
<a href="user.php"><input type=button value="USERS LIST" class="btn"></a>
<a href="vendor.php"><input type=button value="VENDOR'S LIST" class="btn"></a>
<a href="adminloginfo.php"><input type=button value="ADMIN LOGIN INFO" class="btn"></a>

</center>
<!-- 
<br><br><br><br><br><br><br><br><br><br><br>
<font  size=4 face="agency fb"><b>
<hr>
<marquee bgcolor="white" direction=top>GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... GET WINGS TOWARDS YOUR DREAM CARSSS... </marquee>
<hr>
</b>
</font> -->

 </div>
      </div>
</body>
</html>