<!-- admin_login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .login-container h2 {
            margin: 0 0 20px;
            font-size: 24px;
            color: #333;
        }
        .login-container label {
            display: block;
            margin: 10px 0 5px;
            font-size: 14px;
            color: #555;
            text-align: left;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
        .login-container button {
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
        .login-container button:hover {
            background: linear-gradient(135deg, #FF6347, #8B0000);
        }
        p {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="admin_login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>

<?php
// admin_login.php (PHP Section)
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "crimsonplate");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['admin_id'];
        header("Location: admin_dashboard.php");
    } else {
        echo "<p>Invalid username or password</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
