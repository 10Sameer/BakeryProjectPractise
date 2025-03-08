<?php
// Database connection
$host = 'localhost';
$dbname = 'shopping_cart';
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Get the item ID to remove
  $id = $_POST['id'];

  // Delete the item from the database
  $stmt = $conn->prepare("DELETE FROM cart_items WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  // Redirect back to the cart page
  header("Location: cart.php");
  exit();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>