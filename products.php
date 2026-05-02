<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
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
    <h1>Our Products</h1>

    <div class="product-card">
        <img src="images/perfume1.jpg" width="150">
        <h3>Luxury Oud</h3>
        <p>$50</p>
        <button>Add to Cart</button>
    </div>

    <div class="product-card">
        <img src="images/perfume2.jpg" width="150">
        <h3>Rose Essence</h3>
        <p>$40</p>
        <button>Add to Cart</button>
    </div>

    <div class="product-card">
        <img src="images/perfume3.jpg" width="150">
        <h3>Fresh Citrus</h3>
        <p>$35</p>
        <button>Add to Cart</button>
=======
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
>>>>>>> 5ca300eeffcd71cec44712789a5b95e12e31432e
    </div>

</div>

<<<<<<< HEAD
=======
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

>>>>>>> 5ca300eeffcd71cec44712789a5b95e12e31432e
</body>
</html>