<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="Home.css">
</head>
<style>

.chead{
	/* background-color:purple; */
    background:linear-gradient(to left,rgba(36, 0, 79, 0.78),rgba(255, 157, 0, 0.81));
	padding: 10px;
    border:2px solid rgb(0, 0, 0);
    border-radius: 15px;
    font-family: agency fb;
    font-size:2rem;
    color: whitesmoke;
	text-align: center;
}

button:hover {
	/* background-color: #f4f4f4;
	padding: 20px;
	width: 30%;*/
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    /* background-color:rgb(3, 3, 3); */
    background:url("imgs/b10.jpg");
    padding: 1rem;
    margin-bottom: 1rem;
    font-family: agency fb;
    /* font-weight: bold; */
    font-size: 1rem;
    /* border-radius: 5px; */
    border:0px solid rgb(120,120,102);
    box-shadow: 2px 0px 5px 2px rgba(0, 0, 0, 0.702);
    
}


button{
	background-color: #f4f4f4;
    /* background-color:rgb(0, 0, 0); */
    /* background:url("imgs/b10.jpg"); */
	padding: 20px;
	width: 35%;
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    margin-bottom: 1rem;
    font-family: agency fb;
    border:2px solid rgb(120,120,102);
    border-radius:50%;
    font-weight: bold;
    font-size: 1rem;
    /* align-items: center; */
    justify-items: center;
	
    /* border-radius: 5px;
    box-shadow: 2px 0px 5px 2px rgba(0, 0, 0, 0.702); */
}

a{
	text-decoration:none;
	color:black;
}
img{
    height:100px;
    width: 10rem ;
}
         
::-webkit-scrollbar {
        width: 0px;
    }


    h2{
            color:black;
            font-size:25px;
            text-shadow: 
        -1px -1px 0 white,  
         1px -1px 0 white,
        -1px  1px 0 white,
         1px  1px 0 white; /* Outline effect */
        }
    
        ::-webkit-scrollbar {
            width: 0px;
        }

    
</style>
<body> 
<form action="prod.php" method="get">
<!-- Contact section -->
<section id="Contact" class="contact">
		<h1 class="chead">Category</h1>
        <main>		
			<button name="cat" value="All Products"> <h2> <img src="imgs/Homebgx.png" alt=""><br>All Products</h2> </button>
			<!-- <p>Bazaario_7674</p> -->	
			<button name="cat" value="Garments"> <img src="imgs/garment-removebg-preview.png" alt=""><br><h2>Garments</h2> </button>
			<!-- <p>www.Bazaario.com</p> -->
			<button name="cat" value="Footwear"><img src="imgs/footwearset-removebg-preview.png" alt=""><br> <h2>Footwear</h2> </button>
			<!-- <p>Bazaario123</p> -->
        </main> 
        
	    <main>
			<button name="cat" value="Electronic Devices"> <img src="imgs/Electronic_devices_1-removebg-preview.png" alt=""><br><h2>Electronic Devices</h2> </button>			
			<!-- <p>+91-7972831157</p> -->
			<button name="cat" value="Fruits & Vegetables"> <img src="imgs/fruitnveg-removebg-preview.png" alt=""><br><h2>Fruits & Vegetables</h2> </button>
			<!-- <p>Bazaario@gmail.com</p> -->
			<button name="cat" value="Beauty Products"><img src="imgs/makeupset-removebg-preview.png" alt=""><br> <h2>Beauty Products</h2> </button>
			<!-- <p>693 Bazaario street, Pune, Maharashtra, 411037</p> -->
	    </main>
	
        <main>	
			<button name="cat" value="Jewellery & Accessories"><img src="imgs/jaset-removebg-preview.png" alt=""><br> <h2>Jewellery & Accessories</h2> </button>
			<!-- <p>Bazaario_7674</p> -->
			<button name="cat" value="Toys"><img src="imgs/toyset-removebg-preview.png" alt=""><br> <h2>Toys</h2> </button>
			<!-- <p>www.Bazaario.com</p> -->
			<button name="cat" value="Food & Drinks"><img src="imgs/Adobe Express - file.png" alt=""><br> <h2>Food & Drinks</h2> </button>
			<!-- <p>Bazaario123</p> -->
        </main> 
    
</section>
</form>

<!-- Contact End -->

<!-- Footer begin -->
<footer>
       <p>© 2025 rBazaaRio</p>
       
    </footer>

<!-- Footer end -->
</body>
</html>
