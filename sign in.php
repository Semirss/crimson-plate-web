<?php
require_once 'session.php';
// require_once 'signinview.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="sign-in.css">
    <link rel="stylesheet" href="sighn in .css">
</head>
<body>
    <video src="BLÜ_EYES_-_you'd_never_know_(Official_Music_Video)(480p).mp4" muted autoplay loop></video>
    <div class="container">
        <div class="sign-in-box">
            <h1>Sign In</h1>
            <form action="n.login.php"method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Sign In</button>
            </form>
              <?php
            // check_signin_errors();
            ?>  
        </div>
    </div>
</body>
</html>
