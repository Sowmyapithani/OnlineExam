<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="home.php">
            <div class="input-group">
                <input type="text" name="username" placeholder="Enter UserName">
            </div>
            
            <div class="input-group">
                <input type="password" name="password_1" placeholder="Enter Password">
            </div>
            
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
    </form>


</body>
</html>