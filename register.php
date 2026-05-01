<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
</nav>

<div class="container">
    <h2>Register</h2>

    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter your name" required>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <br><br>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>