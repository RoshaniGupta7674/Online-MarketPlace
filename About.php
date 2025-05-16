<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="Home.css">
    <style>
    
    ::-webkit-scrollbar {
            width: 0px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .footer-links {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .footer-links div {
            flex: 1;
            padding: 10px;
        }


        footer a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Map Section */
        .map-container {
            text-align: center;
        }

        .map-container iframe {
            width: 100%;
            height: 150px; /* Smaller height for the footer map */
            border: 0;
            border-radius: 10px;
        }

    </style>
</head>

<body> 

<!-- About us section -->
<section id="About">
    <main class="About">
        <section>
            <article>
                <center><h2>About Us</h2></center>
                <p align="justify">Welcome to Bazaario, your one-stop online marketplace where buying and selling meet seamless communication. We’ve created a platform that connects buyers and sellers directly, allowing you to exchange goods and services with ease. Whether you're looking to declutter and sell pre-loved items or discover something new at an unbeatable price, Bazaario is the place for you. At Bazaario, we believe in empowering our users with the tools to connect, communicate, and trade safely and efficiently. Our intuitive platform ensures a hassle-free experience, complete with features that let you directly chat with other users, negotiate deals, and build trust through transparent interactions. We prioritize your convenience and security, creating a thriving community of buyers and sellers who value genuine connections. Join Bazaario today and become a part of a growing marketplace where every transaction is an opportunity to connect, collaborate, and contribute to a dynamic exchange of goods and ideas. Let’s make trading smarter, simpler, and more personal!</p>
            </article>
            
        </section>
        <aside>
            <center><h3>Motto</h3></center>
            <p align="Justify">Our aim at <b>Bazaario</b> is to revolutionize the way people buy and sell by fostering a community-driven marketplace built on trust, transparency, and seamless communication. We strive to empower users with the tools to connect directly, negotiate fairly, and trade securely. At Bazaario, we’re not just building a marketplace; we’re building connections...</p>
        </aside>
    </main>
</section>
<!-- About End -->

<!-- Footer begin -->
<footer>
    <div class="footer-links">
        <div>
            <h4>Imp Links</h4>
            <a href="index.php">Home</a>
            <a href="vlogin.php">Vendor</a>
            <a href="login.php">Login</a>
            
        </div>
        <div>
            <h4>. </h4>
            <a href="categories.php">Categories</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </div>
        <div>
            <h4>Follow Us </h4>
            <a href="https://facebook.com">Facebook</a>
            <a href="https://twitter.com">Twitter</a>
            <a href="https://instagram.com">Instagram</a>
        </div>
    </div>
    
    <div class="map-container">
        <!-- <h3>Our Location</h3> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.123456789012!2d73.12345678901234!3d18.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1234567890f%3A0x1234567890abcdef!2sSarhad%20College%20of%20Engineering%20and%20Management!5e0!3m2!1sen!2sin!4v1234567890123456" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <p>© 2025 rBazaario</p>
</footer>

<!-- Footer end -->
</body>
</html>