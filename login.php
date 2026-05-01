<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
if(isset($_GET["msg"])) {
    echo "Registration Successful! Please login.";
}
?>

<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
</nav>

<div class="container">
    <h2>Login</h2>

    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <br><br>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>