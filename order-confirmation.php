<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sign in.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #1f4037, #99f2c8);
            text-align: center;
        }
        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }
        a button {
            padding: 10px 20px;
            background: linear-gradient(135deg, #1f4037, #99f2c8);
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        a button:hover {
            background: linear-gradient(135deg, #99f2c8, #1f4037);
        }
    </style>
</head>
<body>
    <div>
        <h1>Order placed successfully</h1>
        <p>Thank you for your order!</p>
        <p><a href="menu.php"><button>Continue Shopping</button></a></p>
    </div>
</body>
</html>
