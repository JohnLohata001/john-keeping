<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Responsive Side Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="main2.css" />
    <script src="main.js"></script>
</head>
<body>
    
<nav class="navbar">
    <div id="main">
      <img src="" alt="LOGO">
      <h1> STAY TOGETHER IN TOUCH</h1>  
    </div>
</nav>
    
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="post" action="register.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="Username">
        </div>
        <div class="input-group">
            <label>E-mail</label>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="text" name="passeword_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>

        </div>
        <p>
            Already a member ? <a href="index.php">Sign up</a>
        </p>
    </form>

</body>
</html>

