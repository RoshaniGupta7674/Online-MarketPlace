<html>
<head>
    <title>fpassword</title>
    <style>
        body{
            /* background-image:url('imgs/back.jpg'); */
             /* background:linear-gradient(black,aqua);  */
             background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
            background-size:100% 100%;
            font-family:agency fb;
            background-repeat:no-repeat;
        }

        form{
            height: auto;
            width: 300px;
            /* background-color: rgba(255,255,255,0.13);  */
             /* background:linear-gradient(darkgrey,black); */
             background:linear-gradient(to left,rgba(255, 157, 0, 0.24),rgba(36, 0, 79, 0.34));
             color:black;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 60%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 30px;
            text-align: center;
            font-family:agency fb;

        }
        a{
        color:blue;
        text-decoration: none;
        }
        .button{
            margin-top: 30px;
            height:20px;
            width: 50%;
            /* background-color:rgb(157, 255, 0); */
            color: #080710;
            padding: 15px;
            font-size: 15px;
            font-family:agency fb;
            padding-bottom:30px;
            align-items:center;
            font-weight: 600;
            border-radius: 50px;
        }
        input,select{
            /* background-color:cornsilk; */
            border-radius:10px;
            height:30px;
            width:100%;
            font-size:1rem;
            font-family:agency fb;
            font-weight:bold;
        }
        .button:hover{

            height:30px;
            /* width: 75%;    */
            background-color:green;
            color:cornsilk;
        }
        
        ::-webkit-scrollbar {
            width: 0px;
        }

    </style>
</head>

<body>
    
    <form action="forgotpwdb.php" method="POST">
        <h3> Enter Details : </h3><input type="text" name="uname" placeholder="Email Id" required><br><br>
        <!-- <h3> Security Question: </h3> -->
   <select name="q" >
   <option value="">Select Security Question :</option>
    <option value="What is your favorite food?">What is your favorite food?</option>
    <option value="What is your favorite place?">What is your favorite place?</option>
    <option value="What is your nick name?">Who is your Idol?</option>
  </select> <br><br>
  <input type="text" class="ans" name="a" placeholder=" Answer of security question"><br>
  <!-- <hr> -->
       <a href="forgotpwdb.php"> <input type="submit" value="Get Password" class="button"></a>


    </form>
</body>
</html>