<?php
require_once("../database/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Furniture Shop</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<section class="admin-dashboard">
    <h1>Admin Dashboard</h1>
    <p>Welcome to the furniture shop administration panel.</p>

    <div class="admin-links">
        <a href="add-product.php">Add Product</a>
        <a href="products.php">Manage Products</a>
        <a href="categories.php">Manage Categories</a>
        <a href="orders.php">View Orders</a>
        <a href="users.php">Manage Customers</a>
    </div>
</section>

</body>
</html>