<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'db_connection.php'; // Include a file to connect to the database
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['admin_email']); ?>!</h2>
    <a href="logout.php">Logout</a>

    <!-- Admin functionality like adding/updating products -->
    <h3>Manage Products</h3>
    <a href="add_product.php">Add New Product</a>
    <!-- Add forms or links for product management -->
</body>
</html>
