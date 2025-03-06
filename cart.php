<?php
// Database connection
$host = 'localhost';
$dbname = 'shopping_cart';
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch cart items sorted by added_at in descending order
  $stmt = $conn->query("SELECT * FROM cart_items ORDER BY added_at DESC");
  $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
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
    <h1>Your Cart</h1>
    <?php if (empty($cart_items)): ?>
      <p>Your cart is empty.</p>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cart_items as $item): ?>
            <tr>
              <td><?php echo $item['product_name']; ?></td>
              <td><?php echo $item['quantity']; ?></td>
              <td>$<?php echo number_format($item['price'], 2); ?></td>
              <td>$<?php echo number_format($item['quantity'] * $item['price'], 2); ?></td>
              <td>
                <form action="removeCart.php" method="POST" style="display:inline;">
                  <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                <button type="submit" class="remove-btn">Remove</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div class="cart-total">
        <strong>Total: $<?php
          $total = 0;
          foreach ($cart_items as $item) {
            $total += $item['quantity'] * $item['price'];
          }
          echo number_format($total, 2);
        ?></strong>
      </div>
    <?php endif; ?>
  </main>
</body>
</html>