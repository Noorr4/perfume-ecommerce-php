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
<?php
session_start();
$conn=mysqli_connect("localhost","root","123456789","perfume_db");

if(isset($_POST["login"]))
    {
        $email=$_POST["email"];
        $password=$_POST["password"];
        $name=$_POST["username"];

        $query="select *from users where email='$email' and password='$password' and username='$name'";

        $result=mysqli_query($conn,$query);
        
        if(mysqli_num_rows($result)>0)
            {
                $_SESSION["user"]=$name;
                header("Location:index.php");
                exit();
            }
            else{
                echo "Invalid Email or Password";
            }
    }

?>
<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <h2>Login</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="username" placeholder="Enter Your Name" required>
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password" required>

        <br><br>

        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>