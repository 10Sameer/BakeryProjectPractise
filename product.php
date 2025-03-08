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
        <li><a href="home.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Product Page</h1>
    <div class="product">
      <!-- Product 1 -->
      <div>
        <h2>Product Name: Laptop</h2>
        <p>Price: $999.99</p>
        <form action="addToCart.php" method="POST">
          <input type="hidden" name="product_name" value="Laptop">
          <input type="hidden" name="price" value="999.99">
          <label for="quantity1">Quantity:</label>
          <input type="number" name="quantity" id="quantity1" value="1" max="5" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>

      <!-- Product 2 -->
      <div>
        <h2>Product Name: PalmTop</h2>
        <p>Price: $150.99</p>
        <form action="addToCart.php" method="POST">
          <input type="hidden" name="product_name" value="PalmTop">
          <input type="hidden" name="price" value="150.99">
          <label for="quantity2">Quantity:</label>
          <input type="number" name="quantity" id="quantity2" value="1" max="5" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>

      <!-- Product 3 -->
      <div>
        <h2>Product Name: Acer Nitro</h2>
        <p>Price: $800</p>
        <form action="addToCart.php" method="POST">
          <input type="hidden" name="product_name" value="Acer Nitro">
          <input type="hidden" name="price" value="800">
          <label for="quantity3">Quantity:</label>
          <input type="number" name="quantity" id="quantity3" value="1" max="5" min="1">
          <button type="submit">Add to Cart</button>
        </form>
      </div>

      <!-- Product 4 -->
      <div>
        <h2>Product Name: Mobile</h2>
        <p>Price: $250.99</p>
        <form action="addToCart.php" method="POST">
          <input type="hidden" name="product_name" value="Mobile">
          <input type="hidden" name="price" value="$250.99">
          <label for="quantity4">Quantity:</label>
          <input type="number" name="quantity" id="quantity4" value="1" min="1" max="10">
          <button type="submit">Add to Cart</button>
        </form>
      </div>

      <!-- Product 5 -->
      <div>
        <h2>Product Name: Iphone</h2>
        <p>Price: $352</p>
        <form action="addToCart.php" method="POST">
          <input type="hidden" name="product_name" value="Iphone">
          <input type="hidden" name="price" value="$352.99">
          <label for="quantity5">Quantity:</label>
          <input type="number" name="quantity" id="quantity5" value="1" min="1" max="10">
          <button type="submit">Add to Cart</button>
        </form>
      </div>
    </div>
  </main>
</body>
</html>