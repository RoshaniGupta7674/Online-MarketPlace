<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(to left, rgba(255, 157, 0, 0.24), rgba(36, 0, 79, 0.34));
            display: grid;
            font-family: 'Agency FB', sans-serif;
            line-height: 1.2;
            margin: 0;
            min-height: 100vh;
            padding: 5vmin;
            place-items: center;
            justify-items: center;
        }
        .iphone {
            background-image: linear-gradient(to bottom, white, pink);
            border-radius: 2em;
            width: 300px;
            padding: 2em;
        }
        .button {
            background-color: #fc8080;
            border-radius: 999em;
            color: #fff;
            padding: 0.75em 1em;
            transition: 0.3s;
            cursor: pointer;
            border: none;
        }
        .button:hover {
            background-color: #e96363;
        }
        .card {
            background-color: rgb(255, 172, 172);
            color: grey;
            width: 100%;
            height: 50px;
            border-radius: 15px;
            border: none;
            padding: 10px;
            font-size: 16px;
        }
        table {
            width: 100%;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="iphone">
    <center>
        <header>
            <h1>Checkout</h1>
        </header>
    </center>
    <form action="process_payment.php" class="form" method="POST">
        <div>
            <h2>Address</h2>
            <input type="text" class="card" placeholder="Enter your address" name="address" required>
        </div>
        <br>
        <div>
            <h2>Shopping Bill</h2>
            <table id="cart-table" cellpadding="0" cellspacing="5">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody id="cart-items"></tbody>
            </table>
            <br><br>
            <div id="total-price">Total Price: Rs 0.00</div><br>
            <input type="hidden" name="cart" id="cart-data">
            <button type="submit" class="button button--full">
                <i class="fas fa-credit-card"></i> Proceed to Payment
            </button>
        </div>
    </form>
</div>

<script>
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    let totalPrice = 0;

    function createCartItem(item) {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.price}</td>
        `;
        return row;
    }

    function updateCart() {
        const cartItems = document.getElementById("cart-items");
        cartItems.innerHTML = "";
        totalPrice = 0; // Reset total price
        cart.forEach(item => {
            totalPrice += parseFloat(item.price.replace("Rs ", ""));
            const row = createCartItem(item);
            cartItems.appendChild(row);
        });
        document.getElementById("total-price").innerText = `Total Price: Rs ${totalPrice.toFixed(2)}`;
    }

    document.addEventListener("DOMContentLoaded", () => {
        updateCart();
        document.querySelector("form").addEventListener("submit", function() {
            document.getElementById("cart-data").value = JSON.stringify(cart);
        });
    });
</script>

</body>
</html>