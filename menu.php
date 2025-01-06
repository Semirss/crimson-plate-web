<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user_id is not set
    header("Location: sign in.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crimson plate menu</title>
    <link rel="stylesheet" href="css/menu.css">
    
</head>
<body> 


    <div class="container">
    <header>

           
              
<div class="right"><h1>Crimson's menu</h1></div> 
 <div class="left">
<?php echo "<h2 style='color:#fff;'>Welcome, ".$_SESSION['username']."</h2>";
// Logout button
echo "<form action='logout.php' method='post'>
<input class='lg' type='submit' value='Logout'>
</form>";
    ?>

</div>



</header>
        <section class="hero">
        <nav class="header">
         
            <ul>
                <li><a href="#"onclick="showCategory('specials')">Specials</a></li>
                <li><a href="#" onclick="showCategory('burgers')">Burgers</a></li>
                <li><a href="#" onclick="showCategory('pizza')">Pizza</a></li>
                <li><a href="#" onclick="showCategory('Desserts')">Desserts</a></li>
                <li><a href="#" onclick="showCategory('Drinks')">Drinks</a></li>
            </ul>
        </nav></section>
        <main>
            
            <section id="burgers" class="menu-section">
                <h2>Burgers</h2>
                <div class="menu-grid">
                    <div class="menu-item"data-name="Classic Burger"data-price="14">
                        <img src="pics/burgerpics/classicburger.jpg" alt="Dish 1">
                        <h4>Classic Burger</h4>
                        <p>14$</p>
                        <button class="addtocart"  onclick="addItem('Classic Burger', 14)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Cheeseburger"data-price="16">
                        <img src="pics/burgerpics/cheeseburger.jpg" alt="Dish 1">
                        <h4>Cheeseburger</h4>
                        <p>16$</p>
                        <button class="addtocart"  onclick="addItem('Cheeseburger', 16)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Bacon Burger"data-price="21">
                        <img src="pics/burgerpics/baconburger.jpg" alt="Dish 1">
                        <h4>Bacon Burger</h4>
                        <p>21$</p>
                            <button class="addtocart"  onclick="addItem('Bacon Burger', 21)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Mushroom Swiss Burger"data-price="10">
                        <img src="pics/burgerpics/mushroomburger.jpg" alt="Dish 1">
                        <h4>Mushroom Swiss Burger</h4>
                        <p>10$</p>
                            <button class="addtocart"  onclick="addItem('Mushroom Swiss Burger', 10)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Veggie Burger"data-price="8">
                        <img src="pics/burgerpics/veggieburger.jpg" alt="Dish 1">
                        <h4>Veggie Burger</h4>
                        <p>8$</p>
                        <button class="addtocart"  onclick="addItem('Veggie Burger', 8)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="BBQ Burger"data-price="23">
                        <img src="pics/burgerpics/bbqburger.jpg" alt="Dish 1">
                        <h4>BBQ Burger</h4>
                        <p>23$</p>
                            <button class="addtocart"  onclick="addItem('BBQ Burger', 23)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Spicy Burger"data-price="17">
                        <img src="pics/burgerpics/spicyburger.jpg" alt="Dish 1">
                        <h4>Spicy Burger</h4>
                        <p>17$</p>
                            <button class="addtocart"  onclick="addItem('Spicy Burger', 17)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.h"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Double Burger"data-price="25">
                        <img src="pics/burgerpics/doubleburger.jpg" alt="Dish 1">
                        <h4>Double Burger</h4>
                        <p>25$</p>
                        <button class="addtocart"  onclick="addItem('Double Burger', 25)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Mini Sliders"data-price="15">
                        <img src="pics/burgerpics/minislidersburger.jpg" alt="Dish 1">
                        <h4>Mini Sliders</h4>
                        <p>15$</p>
                            <button class="addtocart"  onclick="addItem('Mini Sliders', 15)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Turkey Burger"data-price="20">
                        <img src="pics/burgerpics/turkeyburger.jpg" alt="Dish 1">
                        <h4>Turkey Burger</h4>
                        <p>20$</p>
                            <button class="addtocart"  onclick="addItem('Turkey Burger', 20)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                </div>
            </section>
            <section id="pizza" class="menu-section">
                <h2>Pizza</h2>
                <div class="menu-grid">
                    <div class="menu-item"data-name="Margherita Pizza"data-price="17">
                        <img src="pics/pizzapics/margeritapizza.jpg" alt="Dish 1">
                        <h4>Margherita Pizza</h4>
                        <p>17$</p>
                        <button class="addtocart"  onclick="addItem('Margherita Pizza', 17)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Pepperoni Pizza"data-price="18">
                        <img src="pics/pizzapics/pepperonipizza.jpg" alt="Dish 1">
                        <h4>Pepperoni Pizza</h4>
                        <p>18$</p>
                        <button class="addtocart"  onclick="addItem('Pepperoni Pizza', 18)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="BBQ Chicken Pizza"data-price="23">
                        <img src="pics/pizzapics/bbqpizza.jpg" alt="Dish 1">
                        <h4>BBQ Chicken Pizza</h4>
                        <p>23$</p>
                        <button class="addtocart"  onclick="addItem('BBQ Chicken Pizza', 23)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Hawaiian Pizza"data-price="12">
                        <img src="pics/pizzapics/hawaiipiza.jpg" alt="Dish 1">
                        <h4>Hawaiian Pizza</h4>
                        <p>12$</p>
                        <button class="addtocart"  onclick="addItem('Hawaiian Pizza', 12)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Veggie Pizza"data-price="10">
                        <img src="pics/pizzapics/veggiepizza.jpg" alt="Dish 1">
                        <h4>Veggie Pizza</h4>
                        <p>10$</p>
                            <button class="addtocart"  onclick="addItem('Veggie Pizza', 10)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Meat Lover's Pizza"data-price="23">
                        <img src="pics/pizzapics/meetpizza.jpg" alt="Dish 1">
                        <h4>Meat Lover's Pizza</h4>
                        <p>23$</p>
                            <button class="addtocart"  onclick="addItem('Meat Lovers Pizza', 23)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Four Cheese Pizza"data-price="15">
                        <img src="pics/pizzapics/cheesepizza.jpg" alt="Dish 1">
                        <h4>Four Cheese Pizza</h4>
                        <p>15$</p>
                        <button class="addtocart"  onclick="addItem('Four Cheese Pizza', 15)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Buffalo Chicken Pizza"data-price="19">
                        <img src="pics/pizzapics/buffalopizza.jpg" alt="Dish 1">
                        <h4>Buffalo Chicken Pizza</h4>
                        <p>19$</p>
                            <button class="addtocart"  onclick="addItem('Buffalo Chicken Pizza', 19)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Supreme Pizza"data-price="17">
                        <img src="pics/pizzapics/supremepizza.jpg" alt="Dish 1">
                        <h4>Supreme Pizza</h4>
                        <p>17$</p>
                            <button class="addtocart"  onclick="addItem('Supreme Pizza', 17)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                     <div class="menu-item"data-name="White Pizza"data-price="9">
                        <img src="pics/pizzapics/whitepizza.jpg" alt="Dish 1">
                        <h4>White Pizza</h4>
                        <p>9$</p>
                        <button class="addtocart"  onclick="addItem('White Pizza', 9)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
            </section>
            <section  id="Desserts" class="menu-section">
                <h2>Desserts</h2>
                <div class="menu-grid">
                    <div class="menu-item"data-name="Chocolate Cake"data-price="8">
                        <img src="pics/deserts/chocolatecake.jpg" alt="Dish 1">
                        <h4>Chocolate Cake</h4>
                        <p>8$</p>
                        <button class="addtocart"  onclick="addItem('Chocolate Cake', 8)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Cheesecake"data-price="10">
                        <img src="pics/deserts/cheesecake.jpg" alt="Dish 1">
                        <h4>Cheesecake</h4>
                        <p>10$</p>
                        <button class="addtocart"  onclick="addItem('Cheesecake', 10)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Ice Cream"data-price="4">
                        <img src="pics/deserts/icecream.jpg" alt="Dish 1">
                        <h4>Ice Cream</h4>
                        <p>4$</p>
                            <button class="addtocart"  onclick="addItem('Ice Cream', 4)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Brownies"data-price="16">
                        <img src="pics/deserts/brownies.jpg" alt="Dish 1">
                        <h4>Brownies</h4>
                        <p>16$</p>
                        <button class="addtocart"  onclick="addItem('Brownies', 16)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Apple Pie"data-price="11">
                        <img src="pics/deserts/applepie.jpg" alt="Dish 1">
                        <h4>Apple Pie</h4>
                        <p>11$</p>
                        <button class="addtocart"  onclick="addItem('Apple Pie', 11)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Tiramisu"data-price="17">
                        <img src="pics/deserts/tiramisu.jpg" alt="Dish 1">
                        <h4>Tiramisu</h4>
                        <p>17$</p>
                            <button class="addtocart"  onclick="addItem('Tiramisu', 17)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Panna Cotta"data-price="24">
                        <img src="pics/deserts/panacota.jpg" alt="Dish 1">
                        <h4>Panna Cotta</h4>
                        <p>24$</p>
                        <button class="addtocart"  onclick="addItem('Panna Cotta', 24)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Creme Brulee"data-price="19">
                        <img src="pics/deserts/creambrulee.jpg" alt="Dish 1">
                        <h4>Creme Brulee</h4>
                        <p>19$</p>
                            <button class="addtocart"  onclick="addItem('Creme Brulee', 19)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Fruit Tart"data-price="17">
                        <img src="pics/deserts/fruittart.jpg" alt="Dish 1">
                        <h4>Fruit Tart</h4>
                        <p>17$</p>
                            <button class="addtocart"  onclick="addItem('Fruit Tart', 17)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Macarons"data-price="18">
                        <img src="pics/deserts/macarons.jpg" alt="Dish 1">
                        <h4>Macarons</h4>
                        <p>18$</p>
                            <button class="addtocart"  onclick="addItem('Macarons', 18)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                </div>
            </section>
            <section id="Drinks" class="menu-section">
                <h2>Drinks</h2>
                <div class="menu-grid">
                    <div class="menu-item"data-name="Cola"data-price="1.55">
                        <img src="pics/drinkspic/cool-drink-beverage.jpg" alt="Dish 1">
                        <h4>Cola</h4>
                        <p>1.55$</p>
                            <button class="addtocart"  onclick="addItem('Cola', 1.55)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Orange Juice"data-price="8">
                        <img src="pics/drinkspic/orangejuice.jpg" alt="Dish 1">
                        <h4>Orange Juice</h4>
                        <p>8$</p>
                            <button class="addtocart"  onclick="addItem('Orange Juice', 8)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Lemonade"data-price="2">
                        <img src="pics/drinkspic/lenonade.jpg" alt="Dish 1">
                        <h4>Lemonade</h4>
                        <p>2$</p>
                        <button class="addtocart"  onclick="addItem('Lemonade', 2)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Iced Tea"data-price="5">
                        <img src="pics/drinkspic/icedtea.jpg" alt="Dish 1">
                        <h4>Iced Tea</h4>
                        <p>5$</p>
                            <button class="addtocart"  onclick="addItem('Iced Tea', 5)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Milkshake"data-price="12">
                        <img src="pics/drinkspic/milkshake.jpg" alt="Dish 1">
                        <h4>Milkshake</h4>
                        <p>12$</p>
                        <button class="addtocart"  onclick="addItem('Milkshake', 12)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div>
                    <div class="menu-item"data-name="Water"data-price="1">
                        <img src="pics/drinkspic/water.jpg" alt="Dish 1">
                        <h4>Water</h4>
                        <p>1$</p>
                            <button class="addtocart"  onclick="addItem('Water', 1)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Coffee"data-price="3">
                        <img src="pics/drinkspic/coffe.jpg" alt="Dish 1">
                        <h4>Coffee</h4>
                        <p>3$</p>
                            <button class="addtocart"  onclick="addItem('Coffee', 3)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Espresso"data-price="5">
                        <img src="pics/drinkspic/espresso.jpg" alt="Dish 1">
                        <h4>Espresso</h4>
                        <p>5$</p>
                            <button class="addtocart"  onclick="addItem('Espresso', 5)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Hot Chocolate"data-price="14">
                        <img src="pics/drinkspic/hotchocolate.jpg" alt="Dish 1">
                        <h4>Hot Chocolate</h4>
                        <p>14$</p>
                            <button class="addtocart"  onclick="addItem('Hot Chocolate', 14)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                    <div class="menu-item"data-name="Smoothie"data-price="7">
                        <img src="pics/drinkspic/smoothie.jpg" alt="Dish 1">
                        <h4>Smoothie</h4>
                        <p>7$</p>
                            <button class="addtocart"  onclick="addItem('Smoothie', 7)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                </div>
            </section>
            <section class="specials">
                <h2 class="s">Specials</h2>
                    <div class="menu-grid">
                        <div class="menu-item"data-name="Almas Caviar"data-price="2560">
                            <img src="pics/isolated-almas-caviar-focusing-its-golden-hue-exqu-white-background-photoshoot_655090-588389.jpg" alt="Dish 1">
                            <h4>Almas Caviar</h4>
                            <p>2560$</p>
                         
                            <button class="addtocart"  onclick="addItem('Almas Caviar', 2560)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                            <div class="menu-item"data-name="Foie Gras"data-price="490">
                                <img src="pics/pumpkin-cream-soup-white-plate-dark-background_210632-4308.avif" alt="Dish 1">
                                <h4>Foie Gras</h4>
                                <p>490$</p>
                               
                                <button class="addtocart"  onclick="addItem('Foie Gras', 490)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                                 </div>
                        <div class="menu-item"data-name="Matsutake Mushrooms"data-price="190">
                                    <img src="pics/mushroom.png.avif" alt="Dish 1">
                                    <h4>Matsutake Mushrooms</h4>
                                    <p>190$</p>
                                    
                                    <button class="addtocart"  onclick="addItem('White Truffles', 38.99)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>                        
                                     </div>
                        

                        <div class="menu-item"data-name="Bluefin Tuna"data-price="250">
                            <img src="pics/plate-sliced-raw-bluefin-tuna-sashimi-with-vegetables-mustard-sauce-food-gastronomy_636935-852.avif" alt="Dish 1">
                            <h4>Bluefin Tuna</h4>
                            <p>250$</p>
                           
                            <button class="addtocart"  onclick="addItem('Bluefin Tuna', 250)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                             </div>
                        <div class="menu-item"data-name="kobe beef"data-price="900">
                                <img src="pics/istockphoto-1456242985-612x612.jpg" alt="Dish 1">
                                <h4>Kobe Beef</h4>
                                 <p>900$</p>
                               
                                 <button class="addtocart"  onclick="addItem('Kobe Beef', 900)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                                </div>
                        <div class="menu-item" data-name="white Truffles"data-price="1700">
                                <img src="pics/White-chocolate-truffles.webp" alt="Dish 1">
                                <h4>White Truffles</h4>
                                <p>1700$</p>
                                <button class="addtocart"  onclick="addItem('White Truffles', 38.99)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                                </div>
                        <div class="menu-item"data-name="Bird's Nest Soupr"data-price="660">
                            <img src="pics/Steamed-birds-nest-soup-CMS.jpg" alt="Dish 1">
                            <h4>Bird's Nest Soupr</h4>
                            <p>660$</p>
                            
                            <button class="addtocart"  onclick="addItem('Birds Nest Soupr', 660)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                              </div>
                        <div class="menu-item"data-name="Saffron" data-price="2400">
                                <img src="pics/saffron.jpg" alt="Dish 1">
                                <h4>Saffron</h4>
                                <p>2400$</p>
                                <button class="addtocart"  onclick="addItem('Saffron', 2400)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
    
                                </div>
                         <div class="menu-item"data-name="Iberico Ham (Jamón Ibérico)"data-price="250">
                            <img src="pics/ambachtelijke-iberico-ham-banner.webp" alt="Dish 1">
                            <h4>Iberico Ham (Jamón Ibérico)</h4>
                            <p>560$</p>
                            
                            <button class="addtocart"  onclick="addItem('Iberico Ham (Jamón Ibérico)', 38.99)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                            </div>
                        <div class="menu-item"data-name="Densuke Watermelon"data-price="54">
                            <img src="pics/flat-lay-top-view-watermelon-black-background-sliced-fruit-plate_113876-4017.avif" alt="Dish 1">
                            <h4>Densuke Watermelon</h4>
                            <p>54$</p>
                            
                            <button class="addtocart"  onclick="addItem('Densuke Watermelon', 54)">Add to Cart <img class="sc" src="add_shopping_cart_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button><a href="html code/cart-view.html"><button class="order">Quick view<img class="sc" src="order_approve_24dp_FILL0_wght400_GRAD0_opsz24.png" alt=""></button></a>
                        </div> 
                    
                    </section>     
      </main>
        <footer id="footer">
            <div class="container">
                <p>&copy; 2024 Crimson Plate</p>
                <nav class="footer">
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Schedule</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
    <script src="java script files/1.js"></script>
    <script src="java script files/cart-view.js"></script>
    
    
</body>
</html>