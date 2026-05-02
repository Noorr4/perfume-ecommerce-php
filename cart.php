<?php
session_start();

// Initialize cart
if(!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// ADD ITEM
if(isset($_POST["add"])) {
    $item = [
        "name" => $_POST["name"],
        "price" => $_POST["price"]
    ];
    $_SESSION["cart"][] = $item;
}

// REMOVE ITEM
if(isset($_GET["remove"])) {
    $index = $_GET["remove"];
    unset($_SESSION["cart"][$index]);
    $_SESSION["cart"] = array_values($_SESSION["cart"]); // reindex
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="cart.php">Cart</a>
</nav>

<h1>Your Cart</h1>

<?php
$total = 0;

if(!empty($_SESSION["cart"])) {
    foreach($_SESSION["cart"] as $index => $item) {
        $total += $item["price"];

        echo "<div class='cart-item'>";
        echo "<h3>".$item["name"]."</h3>";
        echo "<p>$".$item["price"]."</p>";
        echo "<a href='cart.php?remove=".$index."'><button>Remove</button></a>";
        echo "</div>";
    }

    echo "<h2>Total: $".$total."</h2>";

} else {
    echo "<p>Cart is empty</p>";
}
?>

</body>
</html>