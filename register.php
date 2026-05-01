<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","123456789","perfume_db");

if(isset($_POST["register"]))
{
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(strlen($name) >= 3)
    {
        $query = "INSERT INTO users(username,email,password)
                  VALUES('$name','$email','$password')";

        if(mysqli_query($conn,$query)){
            header("Location: login.php?msg=registered");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    else{
        echo "Name must be at least 3 characters";
    }
}
?>

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

        <button type="submit" name="register">Register</button>
    </form>
</div>

</body>
</html>