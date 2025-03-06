<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link rel="stylesheet" href="styling.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo">MyWebsite</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Product Page</h1>
    <div class="product">
      <h2>Product Name: Laptop</h2>
      <p>Price: $999.99</p>
      <form action="addToCart.php" method="POST">
        <input type="hidden" name="product_name" value="Laptop">
        <input type="hidden" name="price" value="999.99">
        <label for="quantity1">Quantity:</label>
        <input type="number" name="quantity" id="quantity1" value="1" min="1">
        <button type="submit">Add to Cart</button>
      </form>

      <h2>Product Name: Top</h2>
      <p>Price: $8999.99</p>
      <form action="addToCart.php" method="POST">
        <input type="hidden" name="product_name" value="Top">
        <input type="hidden" name="price" value="8999.99">
        <label for="quantity2">Quantity:</label>
        <input type="number" name="quantity" id="quantity2" value="1" min="1">
        <button type="submit">Add to Cart</button>
      </form>

      <h2>Product Name: toppy</h2>
      <p>Price: $199.99</p>
      <form action="addToCart.php" method="POST">
        <input type="hidden" name="product_name" value="Ptop">
        <input type="hidden" name="price" value="199.99">
        <label for="quantity3">Quantity:</label>
        <input type="number" name="quantity" id="quantity3" value="1" min="1">
        <button type="submit">Add to Cart</button>
      </form>
    </div>
  </main>
</body>
</html>