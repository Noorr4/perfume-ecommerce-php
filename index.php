<!DOCTYPE html>
<html>
<head>
    <title>Perfume Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<<<<<<< HEAD

=======
<?php
session_start();
?>
<?php
if(isset($_SESSION["user"])) {
    echo "Welcome " . $_SESSION["user"];
}
?>
>>>>>>> 5ca300eeffcd71cec44712789a5b95e12e31432e
<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
    <a href="login.php">Login</a>
<<<<<<< HEAD
=======
    <a href="logout.php">Logout</a>
>>>>>>> 5ca300eeffcd71cec44712789a5b95e12e31432e
</nav>

<div class="container">
    <h1>Perfume Store</h1>
    <h3>Explore best fragrances</h3>

    <a href="products.php?category=men"><button>Men</button></a>
    <a href="products.php?category=women"><button>Women</button></a>
    <a href="products.php?category=unisex"><button>Unisex</button></a>
</div>

</body>
</html>