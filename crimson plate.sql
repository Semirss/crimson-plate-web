

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE admin (
  admin_id int(11) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO admin (admin_id, username, password) VALUES
(1, 'semir', '$2y$10$rqhtiSS3a6jEU8/LemInF.PebP3PrPqoO9TA8F0aLVTveAgTsl3LK'),
(2, 'sss', '$2y$10$.QGgqH0IJudZAhaCk1Qvnu3VbHkiKiIDCZb6DsAgLbjNZG5XB3mfO');


CREATE TABLE categories (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO categories (id, name) VALUES
(2, 'burger'),
(4, 'desserts'),
(5, 'drinks'),
(3, 'pizza'),
(1, 'specials');

CREATE TABLE foods (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  description text DEFAULT NULL,
  price decimal(10,2) NOT NULL,
  category_id int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO foods (id, name, description, price, category_id) VALUES
(1, 'Almas Caviar', 'A luxurious type of caviar from the albino beluga sturgeon.', 2560.00, 1),
(2, 'Foie Gras', 'A delicacy made of the liver of a duck or goose.', 490.00, 1),
(3, 'Matsutake Mushrooms', 'Rare mushrooms known for their distinct spicy-aromatic odor.', 190.00, 1),
(4, 'Bluefin Tuna', 'Highly prized for its use in sushi and sashimi.', 250.00, 1),
(5, 'Kobe Beef', 'A type of Wagyu beef known for its flavor, tenderness, and fatty, well-marbled texture.', 900.00, 1),
(6, 'White Truffles', 'A type of truffle highly esteemed for their unique flavor and aroma.', 1700.00, 1),
(7, 'Bird\'s Nest Soup', 'A delicacy in Chinese cuisine made from the nest of the swiftlet.', 660.00, 1),
(8, 'Saffron', 'A spice derived from the flower of Crocus sativus.', 2400.00, 1),
(9, 'Iberico Ham (Jamón Ibérico)', 'A type of cured ham produced in Spain and Portugal.', 560.00, 1),
(10, 'Densuke Watermelon', 'A rare type of watermelon known for its black rind and exceptional sweetness.', 54.00, 1),
(11, 'Classic Burger', 'A classic beef burger with lettuce, tomato, and onion.', 14.00, 2),
(12, 'Cheeseburger', 'A juicy beef burger with melted cheese, lettuce, tomato, and onion.', 16.00, 2),
(13, 'Bacon Burger', 'A beef burger topped with crispy bacon and cheddar cheese.', 21.00, 2),
(14, 'Mushroom Swiss Burger', 'A beef burger topped with sautéed mushrooms and Swiss cheese.', 10.00, 2),
(15, 'Veggie Burger', 'A delicious vegetarian burger made with a blend of vegetables.', 8.00, 2),
(16, 'BBQ Burger', 'A beef burger topped with BBQ sauce, onion rings, and cheddar cheese.', 23.00, 2),
(17, 'Spicy Burger', 'A spicy beef burger with jalapenos, pepper jack cheese, and spicy mayo.', 17.00, 2),
(18, 'Double Burger', 'A double patty beef burger with lettuce, tomato, and onion.', 25.00, 2),
(19, 'Mini Sliders', 'Three mini beef burgers with cheese and pickles.', 15.00, 2),
(20, 'Turkey Burger', 'A healthy turkey burger with lettuce, tomato, and avocado.', 20.00, 2),
(21, 'Margherita Pizza', 'Classic pizza with tomato sauce, mozzarella, and basil.', 17.00, 3),

(22, 'Pepperoni Pizza', 'Pizza topped with pepperoni slices and mozzarella cheese.', 18.00, 3),
(23, 'BBQ Chicken Pizza', 'Pizza with BBQ sauce, grilled chicken, and red onions.', 23.00, 3),
(24, 'Hawaiian Pizza', 'Pizza with ham, pineapple, and mozzarella cheese.', 12.00, 3),
(25, 'Veggie Pizza', 'Pizza loaded with various fresh vegetables.', 10.00, 3),
(26, 'Meat Lover\'s Pizza', 'Pizza topped with pepperoni, sausage, ham, and bacon.', 23.00, 3),
(27, 'Four Cheese Pizza', 'Pizza with mozzarella, cheddar, Parmesan, and blue cheese.', 15.00, 3),
(28, 'Buffalo Chicken Pizza', 'Pizza with spicy buffalo sauce, chicken, and mozzarella.', 19.00, 3),
(29, 'Supreme Pizza', 'Pizza with pepperoni, sausage, veggies, and mozzarella.', 17.00, 3),
(30, 'White Pizza', 'Pizza with ricotta, mozzarella, and garlic, no tomato sauce.', 9.00, 3),
(31, 'Chocolate Cake', 'A rich and moist chocolate cake.', 8.00, 4),
(32, 'Cheesecake', 'A creamy and smooth cheesecake with a graham cracker crust.', 10.00, 4),
(33, 'Ice Cream', 'A scoop of creamy ice cream in various flavors.', 4.00, 4),
(34, 'Brownies', 'Chocolate brownies with a fudgy center.', 16.00, 4),
(35, 'Apple Pie', 'A classic apple pie with a flaky crust.', 11.00, 4),
(36, 'Tiramisu', 'An Italian dessert made with coffee-soaked ladyfingers and mascarpone cheese.', 17.00, 4),
(37, 'Panna Cotta', 'A creamy Italian dessert made with gelatin and cream.', 24.00, 4),
(38, 'Creme Brulee', 'A rich custard topped with a layer of hard caramel.', 19.00, 4),
(39, 'Fruit Tart', 'A tart filled with creamy custard and topped with fresh fruit.', 17.00, 4),
(40, 'Macarons', 'French almond meringue cookies with a creamy filling.', 18.00, 4),
(41, 'Cola', 'Refreshing carbonated cola beverage.', 1.55, 5),
(42, 'Orange Juice', 'Freshly squeezed orange juice.', 8.00, 5),
(43, 'Lemonade', 'Classic lemon-flavored refreshing drink.', 2.00, 5),
(44, 'Iced Tea', 'Chilled tea served with ice cubes.', 5.00, 5),
(45, 'Milkshake', 'Creamy and thick milkshake in various flavors.', 12.00, 5),
(46, 'Water', 'Bottled still or sparkling water.', 1.00, 5),
(47, 'Coffee', 'Freshly brewed coffee.', 3.00, 5),
(48, 'Espresso', 'Strong and concentrated coffee.', 5.00, 5),
(49, 'Hot Chocolate', 'Rich and creamy chocolate-flavored beverage.', 14.00, 5),
(50, 'Smoothie', 'Thick and fruity blended drink.', 7.00, 5);


CREATE TABLE orders (
  id int(11) NOT NULL,
  user_id int(11) DEFAULT NULL,
  order_date datetime DEFAULT current_timestamp(),
  total_price decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE order_items (
  id int(11) NOT NULL,
  order_id int(11) DEFAULT NULL,
  food_id int(11) DEFAULT NULL,
  quantity int(11) NOT NULL,
  price decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE users (
  id int(11) NOT NULL,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  pass varchar(255) DEFAULT NULL,
  created_at datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO users (id, username, email, pass, created_at) VALUES
(2, 's', 's@gmail.com', '1212', '2024-05-30 21:09:23'),

ALTER TABLE admin
  ADD PRIMARY KEY (admin_id),
  ADD UNIQUE KEY username (username);


ALTER TABLE categories
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY name (name);

ALTER TABLE foods
  ADD PRIMARY KEY (id),
  ADD KEY category_id (category_id);

ALTER TABLE orders
  ADD PRIMARY KEY (id),
  ADD KEY user_id (user_id);


ALTER TABLE order_items
  ADD PRIMARY KEY (id),
  ADD KEY order_id (order_id),
  ADD KEY food_id (food_id);

ALTER TABLE users
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY username (username),
  ADD UNIQUE KEY email (email);

ALTER TABLE admin
  MODIFY admin_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE categories
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE foods
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;


ALTER TABLE orders
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

ALTER TABLE order_items
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE foods
  ADD CONSTRAINT foods_ibfk_1 FOREIGN KEY (category_id) REFERENCES categories (id);

ALTER TABLE orders
  ADD CONSTRAINT orders_ibfk_1 FOREIGN KEY (user_id) REFERENCES users (id);

ALTER TABLE order_items
  ADD CONSTRAINT order_items_ibfk_1 FOREIGN KEY (order_id) REFERENCES orders (id),
  ADD CONSTRAINT order_items_ibfk_2 FOREIGN KEY (food_id) REFERENCES foods (id);

