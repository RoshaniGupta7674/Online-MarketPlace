<?php
session_start();

// Database configuration
$host = 'localhost'; // Database host
$db = 'marketplace'; // Database name
$user = 'root'; // Database username
$pass = ''; // Database password
$charset = 'utf8mb4'; // Character set

// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Handle connection error
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Assuming user data is stored in session after registration
$user_name = $_SESSION['user_name'] ?? 'Guest';
$user_email = $_SESSION['user_email'] ?? 'Not provided';

// Retrieve cart data from session
$cart_items = $_SESSION['cart'] ?? [];
$total_amount = 0.00;

// Calculate total amount and retrieve vendor emails
$vendor_emails = []; // Array to store vendor emails

foreach ($cart_items as $item_id => $quantity) {
    // Fetch product details from database
    $product = getProductById($item_id, $pdo); // Implement this function to fetch product details
    $total_amount += $product['pamt'] * $quantity; // Assuming 'pamt' is the price field

    // Fetch vendor email
    $stmt = $pdo->prepare("SELECT v.Email FROM deliveryteam v JOIN addprod p ON v.dadharcardno = p.un WHERE p.id = ?");
    $stmt->execute([$item_id]);
    $vendor = $stmt->fetch();

    if ($vendor) {
        $vendor_emails[] = $vendor['Email']; // Store vendor email
    }
}

// Store vendor emails in session
$_SESSION['vendor_emails'] = $vendor_emails;

// Function to fetch product details by ID
function getProductById($item_id, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM addprod WHERE id = ?");
    $stmt->execute([$item_id]);
    return $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  
  <style>
    body {
      background: linear-gradient(to left, rgba(255, 157, 0, 0.24), rgba(36, 0, 79, 0.34));
      color: Black;
    }
    table {
      width: 100%;
      text-align: center;
      font-weight: bold;
    }
    button {
      height: 30px;
      width: 100px;
      font-weight: bold;
      border-radius: 20px;
      background-color: rgb(255, 227, 105);
    }
    button:hover {
      border-radius: 10px;
      background-color: rgb(236, 68, 68);
      color: white;
    }
    .btn {
      height: 30px;
      width: 150px;
      font-weight: bold;
      border-radius: 20px;
      background-color: rgb(196, 238, 27);
      color: rgb(255, 0, 102);
    }
    .btn:hover {
      height: 35px;
 width: 170px;
      border-radius: 10px;
      background-color: green;
      color: white;
      font-weight: bold;
      font-size: 15px;
    }
    th {
      background-color: rgb(39, 0, 63);
      color: rgb(245, 229, 255);
      font-size: 30px;
    }
    td {
      background-color: #f4f4f4;
      color: black;
    }

    img {
      width: 100px; 
      height: 100px; 
      border: 2px solid black;
      border-radius: 15%;
    }

    .quantity-btn {
      background-color: transparent;
      width: 30px;
      border: 0px;
      border-radius: 5px;
      font-size: 16px;
    }

    .quantity-btn:hover {
      background-color: transparent;
      border: 2px solid rgb(223, 74, 0);
      color: rgb(223, 74, 0);
    }

    .total {
      background-color: #f4f4f4;
      padding: 1rem;
      height: 7rem;
      margin-bottom: 1rem;
      border-radius: 5px;
      font-weight: bold;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.49);
    }

    ::-webkit-scrollbar {
      width: 0px;
    }
  </style>
</head>
<body>
  <center><h1>Cart Items</h1></center>
  <table id="cart-table" border=5 cellpadding=15px cellspacing=5px>
    <thead>
      <tr>
        <th>Image</th>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody id="cart-items"></tbody>
  </table>
  
  <br><br>
  <center><div class="total">
    <div id="total-items" name='i' value=""></div><br>
    <div id="total-price" name='p'></div>
    <br><a href="payment.php"><button class="btn" id="checkout-btn">Make Payment</button></a>
  </div></center>

  <script>
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    let totalPrice;

    function createCartItem(item, index) {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td><img src="imgs/${item.img}" alt="${item.name}" ></td>
        <td>${item.name}</td>
        <td>${item.price}</td>
        <td>
          <button class="quantity-btn minus" data-item-index="${index}">-</button>
          <span class="quantity">${item.quantity || 1}</span>
          <button class="quantity-btn plus" data-item-index="${index}">+</button>
        </td>
        <td>
          <button class="remove-from-cart" data-item-index="${index}">Remove</button>
        </td>
      `;
      
      return row;
    }

    function updateCart() {
      const cartItems = document.getElementById("cart-items");
      cartItems.innerHTML = "";
      totalPrice = 0; // Reset total price
      let totalItems = 0; // Initialize total items count

      cart.forEach((item, index) => {
        const row = createCartItem(item, index);
        cartItems.appendChild(row);
        totalPrice += item.price * (item.quantity || 1); // Calculate total price based on quantity
        totalItems += item.quantity || 1; // Count total items
      });

      // Update total items display
      const totalItemsElement = document.getElementById("total-items");
      totalItemsElement.innerText = `Total Items: ${totalItems}`;

      // Update total price display
      const totalPriceElement = document.getElementById("total-price");
      totalPriceElement.innerText = `Total Price: Rs ${totalPrice.toFixed(2)}`; // Format price to 2 decimal places
    }

    function updateQuantity(index, quantity) {
      cart[index].quantity = quantity;
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCart();
    }

    function removeFromCart(index) {
      cart.splice(index, 1);
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCart();
    }

    document.addEventListener("DOMContentLoaded", () => {
      updateCart();

      document.querySelectorAll(".quantity-btn").forEach(btn => {
        btn.addEventListener ("click", () => {
          const index = btn.getAttribute("data-item-index");
          const quantityDisplay = btn.closest("tr").querySelector(".quantity");
          let quantity = parseInt(quantityDisplay.innerText);
          if (btn.classList.contains("minus")) {
            if (quantity > 1) {
              updateQuantity(index, quantity - 1);
            }
          } else {
            updateQuantity(index, quantity + 1);
          }
        });
      });

      document.querySelectorAll(".remove-from-cart").forEach(btn => {
        btn.addEventListener("click", () => {
          const index = btn.getAttribute("data-item-index");
          removeFromCart(index);
        });
      });
    });
  </script>
</body>
</html>