<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart - Furniture Shop</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<section class="cart-page">
    <h1>Shopping Cart</h1>

    <?php if (empty($cart)): ?>
        <p>Your cart is empty.</p>
        <a href="products.php" class="continue-shopping">Continue Shopping</a>
    <?php else: ?>
        <table class="cart-table">
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>

            <?php
            $grand_total = 0;
            foreach ($cart as $item):
                $total = $item['price'] * $item['quantity'];
                $grand_total += $total;
            ?>
            <tr>
                <td><?php echo htmlspecialchars($item['name']); ?></td>
                <td>
                    <img src="../images/<?php echo htmlspecialchars($item['image']); ?>" width="80" alt="">
                </td>
                <td>KES <?php echo number_format($item['price'], 2); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>KES <?php echo number_format($total, 2); ?></td>
                <td>
                    <a href="remove-from-cart.php?id=<?php echo $item['id']; ?>" class="remove-btn">Remove</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <h2>Grand Total: KES <?php echo number_format($grand_total, 2); ?></h2>

        <div class="cart-actions">
           <a href="products.php" class="continue-shopping">Continue Shopping</a>
           <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>
        </div>
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