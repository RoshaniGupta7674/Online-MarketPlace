<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <style>
        
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
    body{
        /* background-color: red; */
        /* background-color: #b5b5b5bd; */
        color:black;
        background-image: url(Imgs/bg1.avif);
        background-size: 600px;
    }

    .container{
   
    /* background-color: rgba(255, 255, 255, 0.619); */
    /* color:rgb(248, 248, 248); */
    padding: 1rem;
    /* font-family: ravie; */
    /* text-align: justify;  */
    }

    .box{
        /* background-color: #b5b5b5bd; */
        background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
        height:23rem;
        margin:0px;
        color:black;
    }
    .geeks2 {
            /* width: 500px; */
            /* height:350px; */
            top: 5%;
            position: absolute;
            left: 55%;
            overflow: hidden;
            animation: animate 2s linear forwards;
        }


    .geeks {
            width: 50%;
            top: 20%;
            position: absolute;
            left: 10%;
            overflow: hidden;
            animation: animate 2s linear forwards;
            /* background-color :rgba(255, 189, 189, 0.38); */
            /* padding: 10px; */
        }
 
        .geeks h1 {
            color: white;
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
<body class="box">
    
    <!-- <video autoplay muted loop id="myVideo">
        <source src="imgs/mainvideo.mp4" type="video/mp4">
    </video> -->
    
        <div class="geeks">
          <font color="" size=7 face="algerian">Join us and grow your business!</font><br>
          <font face="agency fb" size=4> Your products, our marketplace!!!</font>
        </div>
        <div class="geeks2">
          <img src="imgs/vbg.png" alt="" width="500px" height="350px">
        </div>

</body>
</html>