<?php
// Database credentials
$host = 'localhost';
$username = 'root';  
$password = '';     
$dbname = 'shopping_cart';

try {
  // Step 1: Connect to MySQL server
  $conn = new PDO("mysql:host=$host", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Step 2: Create the database if it doesn't exist
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
  $conn->exec($sql);
  echo "Database created successfully.<br>";

  // Step 3: Switch to the created database
  $conn->exec("USE $dbname");

  // Step 4: Create the `cart_items` table if it doesn't exist
  $sql = "CREATE TABLE IF NOT EXISTS cart_items (
      id INT AUTO_INCREMENT PRIMARY KEY,
      product_name VARCHAR(255) NOT NULL,
      quantity INT NOT NULL,
      price DECIMAL(10, 2) NOT NULL,
      added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )";
  $conn->exec($sql);
  echo "Table 'cart_items' created successfully.<br>";

  // Step 5: Alter the table to add `added_at` column if it doesn't exist
  $sql = "ALTER TABLE cart_items ADD COLUMN IF NOT EXISTS added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP";
  $conn->exec($sql);
  echo "Table 'cart_items' altered successfully (if needed).<br>";

} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>