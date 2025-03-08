<?php
// Database connection
$host = 'localhost';
$dbname = 'shopping_cart';
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Check if form data is set
  if (isset($_POST['product_name'], $_POST['price'], $_POST['quantity'])) {
    // Get form data
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO cart_items (product_name, quantity, price, added_at) VALUES (:product_name, :quantity, :price, NOW())");
    $stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':price', $price);
    $stmt->execute();

    // Redirect to cart page
    header("Location: cart.php");
    exit();
  } else {
    echo "Error: Form data is missing.";
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>