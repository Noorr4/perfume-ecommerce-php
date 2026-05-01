<?php
// You can add PHP code here later (like database connection)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Perfume Store</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
</nav>

<!-- PAGE TITLE -->
<h1>Our Perfume Collection</h1>

<!-- ===== MEN SECTION ===== -->
<h2>Men Perfumes</h2>
<div class="container">

    <div class="card">
        <img src="images/diorsauvage.jpg">
        <h3>Dior Sauvage</h3>
        <p>$120</p>
        <button onclick="showDetails('Fresh strong fragrance for men')">
            View Details
        </button>
    </div>

    <div class="card">
        <img src="images/versaceeros.jpg">
        <h3>Versace Eros</h3>
        <p>$110</p>
        <button onclick="showDetails('Long lasting powerful scent')">
            View Details
        </button>
    </div>

</div>

<!-- ===== WOMEN SECTION ===== -->
<h2>Women Perfumes</h2>
<div class="container">

    <div class="card">
        <img src="images/channelno5.jpg">
        <h3>Chanel No. 5</h3>
        <p>$150</p>
        <button onclick="showDetails('Classic floral luxury perfume')">
            View Details
        </button>
    </div>

    <div class="card">
        <img src="images/guccibloom.jpg">
        <h3>Gucci Bloom</h3>
        <p>$130</p>
        <button onclick="showDetails('Elegant floral fragrance')">
            View Details
        </button>
    </div>

</div>

<!-- ===== UNISEX SECTION ===== -->
<h2>Unisex Perfumes</h2>
<div class="container">

    <div class="card">
        <img src="images/ckone.jpg">
        <h3>CK One</h3>
        <p>$90</p>
        <button onclick="showDetails('Light everyday fresh scent')">
            View Details
        </button>
    </div>

    <div class="card">
        <img src="images/tomford.jpg">
        <h3>Tom Ford Oud Wood</h3>
        <p>$200</p>
        <button onclick="showDetails('Premium woody fragrance')">
            View Details
        </button>
    </div>

</div>

<!-- JavaScript -->
<script src="products.js"></script>

</body>
</html>