<?php
session_start();
$conn=mysqli_connect("localhost","root","123456789","perfume_db");

if(isset($_GET["msg"])) {
    echo "Registration Successful! Please login.";
}

if(isset($_POST["login"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    $name=$_POST["username"];

    $query="SELECT * FROM users WHERE email='$email' AND password='$password' AND username='$name'";
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

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<<<<<<< HEAD
<body>

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

=======
<body>

>>>>>>> 7b4b64d14f14747d10566450d05a164c949ee124
<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
<<<<<<< HEAD

</nav>

<div class="container">
    <h2>Login</h2>

    <form method="POST" action="">

=======
>>>>>>> 7b4b64d14f14747d10566450d05a164c949ee124
    <a href="logout.php">Logout</a>
</nav>

<div class="container">
    <h2>Login</h2>

<<<<<<< HEAD
    <form method="POST" action="">
=======
    <form method="POST">
>>>>>>> 7b4b64d14f14747d10566450d05a164c949ee124
        <label>Name:</label>
        <input type="text" name="username" required>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>

        <br><br>

<<<<<<< HEAD
        <button type="submit">Login</button>

        <button type="submit" name="login">Login</button>
 
=======
        <button type="submit" name="login">Login</button>
>>>>>>> 7b4b64d14f14747d10566450d05a164c949ee124
    </form>
</div>

</body>
</html>
