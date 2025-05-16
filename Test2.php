<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="Home.css">
    <style>
        .chead {
            background: linear-gradient(to left, rgba(36, 0, 79, 0.78), rgba(255, 157, 0, 0.81));
            padding: 10px;
            border: 2px solid rgb(0, 0, 0);
            border-radius: 15px;
            font-family: 'Agency FB', sans-serif;
            font-size: 2rem;
            color: whitesmoke;
            text-align: center;
        }

        .category-button {
            position: relative;
            width: 35%;
            margin-bottom: 1rem;
            border: 3px solid rgb(0, 0, 0);
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            font-family: 'Agency FB', sans-serif;
            font-weight: bold;
            font-size: 1rem;
            color: white;
            text-align: center;
        }

        .category-button video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            opacity: 1; /* Adjust opacity for visibility */
        }

        .category-button h2 {
            position: relative;
            z-index: 2; /* Ensure text is above the video */
            margin: 0;
        }

        button:hover {
            background: rgba(255, 255, 255, 0.3); /* Optional hover effect */
        }

        a {
            text-decoration: none;
            color: black;
        }

        img {
            height: 100px;
            width: 10rem;
            padding:10px;
        }

        ::-webkit-scrollbar {
            width: 0px;
        }


        h2{
            color:white;
            font-size:30px;
            text-shadow: 
        -1px -1px 0 black,  
         1px -1px 0 black,
        -1px  1px 0 black,
         1px  1px 0 black; /* Outline effect */
        }
    </style>
</head>
<body>
<form action="prod.php" method="get">
    <section id="Contact" class="contact">
        <h1 class="chead">Category</h1>
        <main>
            <button class="category-button" name="cat" value="All Products">
                <video autoplay loop muted>
                    <source src="videos/all_products.mp4" type="video/mp4">
                </video>
                <h2><img src="imgs/Homebgx.png" alt=""><br>All Products</h2>
            </button>
            <button class="category-button" name="cat" value="Garments">
                <video autoplay loop muted>
                    <source src="imgs/videos/garments 1.mp4" type="video/mp4">
                </video>
                <h2><br>Garments</h2>
            </button>
            <button class="category-button" name="cat" value="Footwear">
                <video autoplay loop muted>
                    <source src="imgs/videos/shoes 1.mp4" type="video/mp4">
                </video>
                <h2><br>Footwear <br></h2>
            </button>
        </main>

        <main>
            <button class="category-button" name="cat" value="Electronic Devices">
                <video autoplay loop muted>
                    <source src="imgs/videos/tech 1.mp4" type="video/mp4">
                </video>
                <h2><br><br>Electronic Devices<br><br></h2>
            </button>
            <button class="category-button" name="cat" value="Fruits & Vegetables">
                <video autoplay loop muted>
                    <source src="imgs/videos/fruits.mp4" type="video/mp4">
                </video>
                <h2><br>Fruits & Vegetables</h2>
            </button>
            <button class="category-button" name="cat" value="Beauty Products">
                <video autoplay loop muted>
                    <source src="imgs/videos/makeup 1.mp4" type="video/mp4">
                </video>
                <h2><br>Beauty Products</h2>
            </button>
        </main>

        <main>
            <button class="category-button" name="cat" value="Jewellery & Accessories">
                <video autoplay loop muted>
                    <source src="imgs/videos/jewellery.mp4" type="video/mp4">
                </video>
                <h2><br><br>Jewellery & Accessories<br><br></h2>
            </button>
            <button class="category-button" name="cat" value="Toys">
                <video autoplay loop muted>
                    <source src="imgs/videos/toys.mp4" type="video/mp4">
                </video>
                <h2><br>Toys</h2>
            </button>
            <button class="category-button" name="cat" value="Food & Drinks">
                <video autoplay loop muted>
                    <source src="imgs/videos/food.mp4" type="video/mp4">
                </video>
                <h2><br>Food & Drinks</h2>
            </button>
        </main>
    </section>
</form>

<!-- Footer begin -->
<footer>
    <p>© 2024 My Page</p>
</footer>
<!-- Footer end -->
</body>
</html>