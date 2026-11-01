<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Furniture Shop</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<section class="checkout-page">
    <h1>Checkout</h1>

    <?php if (empty($cart)): ?>
        <p>Your cart is empty. Add products before checkout.</p>
        <a href="products.php">Go to Products</a>
    <?php else: ?>
        <p>Proceed with your order details here.</p>

        <h2>Order Summary</h2>
        <ul>
            <?php
            $grand_total = 0;
            foreach ($cart as $item):
                $total = $item['price'] * $item['quantity'];
                $grand_total += $total;
            ?>
                <li>
                    <?php echo htmlspecialchars($item['name']); ?> -
                    Qty: <?php echo $item['quantity']; ?> -
                    KES <?php echo number_format($total, 2); ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <h3>Total Amount: KES <?php echo number_format($grand_total, 2); ?></h3>

        <button>Confirm Order</button>
    <?php endif; ?>
</section>
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