<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products - Perfume Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
 

<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="products.php">Products</a>
    <a href="about.php">About</a>
</nav>

<h1>Our Perfume Collection</h1>

<?php
$category = $_GET['category'] ?? '';
?>

<?php if($category == "men") { ?>

<h2>Men Perfumes</h2>

<!-- MEN 1 -->
<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Oud Royal">
<input type="hidden" name="price" value="60">
<div class="product-card">
    <img src="images/men1.png" width="150">
    <h3>Oud Royal</h3>
    <p>$60</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<!-- MEN 2 -->
<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Black Musk">
<input type="hidden" name="price" value="55">
<div class="product-card">
    <img src="images/men2.png" width="150">
    <h3>Black Musk</h3>
    <p>$55</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<!-- MEN 3 -->
<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Night Oud">
<input type="hidden" name="price" value="58">
<div class="product-card">
    <img src="images/men3.png" width="150">
    <h3>Night Oud</h3>
    <p>$58</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<!-- MEN 4 -->
<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Royal Amber">
<input type="hidden" name="price" value="62">
<div class="product-card">
    <img src="images/men4.png" width="150">
    <h3>Royal Amber</h3>
    <p>$62</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<?php } elseif($category == "women") { ?>

<h2>Women Perfumes</h2>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Rose Bloom">
<input type="hidden" name="price" value="45">
<div class="product-card">
    <img src="images/women1.png" width="150">
    <h3>Rose Bloom</h3>
    <p>$45</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Floral Dream">
<input type="hidden" name="price" value="50">
<div class="product-card">
    <img src="images/women2.png" width="150">
    <h3>Floral Dream</h3>
    <p>$50</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Pink Desire">
<input type="hidden" name="price" value="48">
<div class="product-card">
    <img src="images/women3.png" width="150">
    <h3>Pink Desire</h3>
    <p>$48</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Velvet Rose">
<input type="hidden" name="price" value="52">
<div class="product-card">
    <img src="images/women4.png" width="150">
    <h3>Velvet Rose</h3>
    <p>$52</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<?php } elseif($category == "unisex") { ?>

<h2>Unisex Perfumes</h2>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Fresh Citrus">
<input type="hidden" name="price" value="40">
<div class="product-card">
    <img src="images/unisex1.png" width="150">
    <h3>Fresh Citrus</h3>
    <p>$40</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Ocean Breeze">
<input type="hidden" name="price" value="42">
<div class="product-card">
    <img src="images/unisex2.png" width="150">
    <h3>Ocean Breeze</h3>
    <p>$42</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Cool Mist">
<input type="hidden" name="price" value="44">
<div class="product-card">
    <img src="images/unisex3.png" width="150">
    <h3>Cool Mist</h3>
    <p>$44</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<form method="POST" action="cart.php">
<input type="hidden" name="name" value="Soft Breeze">
<input type="hidden" name="price" value="46">
<div class="product-card">
    <img src="images/unisex4.png" width="150">
    <h3>Soft Breeze</h3>
    <p>$46</p>
    <button type="submit" name="add">Add to Cart</button>
</div>
</form>

<?php } else { ?>

<h2>Select Category</h2>
<a href="products.php?category=men"><button>Men</button></a>
<a href="products.php?category=women"><button>Women</button></a>
<a href="products.php?category=unisex"><button>Unisex</button></a>

<?php } ?>

</body>
</html>
