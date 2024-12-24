<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'db_connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="images/favicon.svg"
    />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/glightbox.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Manage Products</h1>

        <div class="card">
            <div class="card-header">Product List</div>
            <div class="card-body">
                <?php if ($result->num_rows > 0): ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($product = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= $product['id']; ?></td>
                                    <td><?= htmlspecialchars($product['NAME']); ?></td>
                                    <td><?= htmlspecialchars($product['category']); ?></td>
                                    <td>৳<?= number_format($product['price'], 2); ?></td>
                                    <td>
                                        <a href="edit_product.php?id=<?= $product['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete_product.php?id=<?= $product['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn text-white"><a href="add_product.php">Add Product</a></button>
                    <button type="submit" class="btn  text-white"><a href="admin.php">Back to Admin Panel</a></button>
                <?php else: ?>
                    <p class="text-center">No products found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>