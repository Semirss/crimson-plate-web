<!-- view_order.php -->
<!DOCTYPE html>
<html>
<head>
    <title>View Order</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8B0000, #FF6347); /* Red gradient */
            color: #333;
        }
        .order-container {
            width: 90%;
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #8B0000;
            margin-bottom: 20px;
        }
        a {
            color: #FF6347;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            margin-bottom: 20px;
            display: inline-block;
        }
        a:hover {
            color: #8B0000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background: #FF6347;
            color: white;
        }
        table tbody tr:nth-child(odd) {
            background: #f9f9f9;
        }
        table tbody tr:nth-child(even) {
            background: #ffffff;
        }
        .order-container a.button {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 15px;
            background: linear-gradient(135deg, #8B0000, #FF6347);
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s ease;
        }
        .order-container a.button:hover {
            background: linear-gradient(135deg, #FF6347, #8B0000);
        }
    </style>
</head>
<body>
    <div class="order-container">
        <h2>Order Details</h2>
        <a href="admin_dashboard.php" class="button">Back to Dashboard</a>
        <table>
            <thead>
                <tr>
                    <th>Order Item ID</th>
                    <th>Order ID</th>
                    <th>Food ID</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                if (!isset($_SESSION['admin_id'])) {
                    header("Location: admin_login.php");
                    exit();
                }

                if (!isset($_GET['order_id'])) {
                    echo "<tr><td colspan='6'>Order ID not specified.</td></tr>";
                    exit();
                }

                $order_id = $_GET['order_id'];

                $conn = new mysqli("localhost", "root", "", "crimsonplate");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $stmt = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");
                $stmt->bind_param("i", $order_id);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['order_id']}</td>
                            <td>{$row['food_id']}</td>
                            <td>{$row['quantity']}</td>
                            <td>{$row['price']}</td>
                            <td>
                                <a href='delete_order_item.php?order_item_id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
                }

                $stmt->close();
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
