<!-- admin_dashboard.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8B0000, #FF6347); /* Red gradient */
            color: #333;
        }
        .dashboard-container {
            width: 90%;
            max-width: 1200px;
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
        h3 {
            color: #333;
            margin-bottom: 10px;
        }
        a {
            color: #FF6347;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
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
        .dashboard-container a.button {
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
        .dashboard-container a.button:hover {
            background: linear-gradient(135deg, #FF6347, #8B0000);
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Admin Dashboard</h2>
        <a href="logout.php" class="button">Logout</a>
        <h3>Orders</h3>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User ID</th>
                    <th>Total Price</th>
                    <th>Created At</th>
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

                $conn = new mysqli("localhost", "root", "", "crimsonplate");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $result = $conn->query("SELECT * FROM orders");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['user_id']}</td>
                            <td>{$row['total_price']}</td>
                            <td>{$row['order_date']}</td>
                            <td>
                                <a href='view_order.php?id={$row['id']}'>View</a> | 
                                <a href='delete_order.php?id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</ht
