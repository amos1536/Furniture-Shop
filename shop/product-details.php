<?php
require_once("../database/connection.php");

// Check if product ID exists
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid product ID.");
}

$id = (int) $_GET['id'];

// Get product from database
$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Product not found.");
}

$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?></title>

    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<div class="product-details">

    <img src="../images/<?php echo htmlspecialchars($product['image']); ?>" 
         alt="<?php echo htmlspecialchars($product['name']); ?>">

    <h1><?php echo htmlspecialchars($product['name']); ?></h1>

    <h2>KES <?php echo number_format($product['price'], 2); ?></h2>

    <p><?php echo htmlspecialchars($product['description']); ?></p>

    <p><strong>Category:</strong> <?php echo htmlspecialchars($product['category']); ?></p>

    <p><strong>Stock Available:</strong> <?php echo $product['stock']; ?></p>

    <p><strong>Status:</strong> <?php echo htmlspecialchars($product['status']); ?></p>

    <br>

  <div class="product-actions">
    <a href="add-to-cart.php?id=<?php echo $product['id']; ?>" class="cart-btn">Add to Cart</a>
    <a href="buy-now.php?id=<?php echo $product['id']; ?>" class="buy-btn">Buy Now</a>
</div>

    <br><br>

    <a href="products.php">← Back to Products</a>

</div>
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-contact">
            <h3>Contact Info</h3>
            <p>Email: info@furnitureshop.com</p>
            <p>Phone: +254 712 345 678</p>
            <p>Location: Nairobi, Kenya</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Furniture Shop. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>