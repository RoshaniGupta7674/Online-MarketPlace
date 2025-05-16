<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to left, rgba(255, 157, 0, 0.24), rgba(36, 0, 79, 0.34));
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0,  0, 0.1);
        }

        h1 {
            color: #28a745; /* Green color for success */
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .transaction-id {
            font-weight: bold;
            color: #007bff; /* Blue color for transaction ID */
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007bff;
 color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Payment Successful!</h1>
    <p>Thank you for your purchase!</p>
    <p>Your transaction has been completed successfully.</p>
    <p class="transaction-id">Transaction ID: <span id="transaction-id">123456789</span></p>
    <p>You will receive a confirmation email shortly.</p>
    <a href="home.php" class="btn">Return to Homepage</a>
    <a href="categories.php" class="btn">Continue Shopping</a>
</div>

</body>
</html>