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


  </main>
</body>
</html>