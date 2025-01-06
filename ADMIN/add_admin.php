<!-- add_admin.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Admin User</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #8B0000, #FF6347); /* Red gradient */
        }
        .add-admin-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .add-admin-container h2 {
            margin: 0 0 20px;
            font-size: 24px;
            color: #333;
        }
        .add-admin-container label {
            display: block;
            margin: 10px 0 5px;
            font-size: 14px;
            color: #555;
            text-align: left;
        }
        .add-admin-container input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
        .add-admin-container button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(135deg, #8B0000, #FF6347); /* Red gradient */
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .add-admin-container button:hover {
            background: linear-gradient(135deg, #FF6347, #8B0000);
        }
    </style>
</head>
<body>
    <div class="add-admin-container">
        <h2>Add Admin User</h2>
        <form action="add_admin.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="add_admin">Add Admin</button>
        </form>
    </div>
</body>
</html>

<?php
// add_admin.php (PHP Section)
if (isset($_POST['add_admin'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $conn = new mysqli("localhost", "root", "", "crimsonplate");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    if ($stmt->execute()) {
        echo "<p>Admin user added successfully</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
