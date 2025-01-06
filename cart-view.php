<?php 
session_start(); // Start the session


if (!isset($_SESSION['user_id'])) {
    // Handle the case where user_id is not set
    echo "User is not logged in.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart-view.css">
</head>
<body>
<video src="videos/Slow Motion Footage of Red Wine Poured Into a Glass.mp4" muted autoplay loop></video>

    <div class="cart-container">
        <h1>Your Cart</h1>
        <div class="cart-items" id="cart-items">
            <!-- Cart items will be dynamically generated here -->
        </div>
        <div class="cart-total">
            <strong>Total Price: $<span id="total-price">0.00</span></strong>
        </div>
        <form id="order-form" action="place-order.php" method="post">
            <input type="hidden" name="cart_items" id="cart-items-input">
            <input type="hidden" name="total_price" id="total-price-input">
            <input type="hidden" name="userid" id="user-id-input" value="1"> <!-- Update value accordingly -->
            <button type="submit">Place Order</button>
        </form>
        <a href="menu.php"><button>Back to Menu</button></a>
    </div>
    <script src="cart.js"></script>
</body>
</html>
