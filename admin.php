<?php
include 'db_connect.php';


if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}


$sql = "SELECT * FROM products ORDER BY created_at DESC";
$result = $conn->query($sql);
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

    <?php include 'header.php'; ?>


    <div class="container mt-4">
        <h1 class="text-center mb-4">Admin Panel</h1>

        <div class="row menu-container">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Add Product</h5>
                        <p class="card-text">Add new products to your store inventory.</p>
                        <a href="add_product.php" class="btn btn-success">Go to Add Product</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Manage Products</h5>
                        <p class="card-text">View, Update, or delete existing products from the list.</p>
                        <a href="manage_products.php" class="btn btn-primary">Go to Manage Products</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card menu-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">View Reports</h5>
                        <p class="card-text">Analyze product performance and inventory status.</p>
                        <a href="reports.php" class="btn btn-info">Go to Reports</a>
                    </div>
                </div>
            </div>

                <div class="card menu-card">
                    <div class="card-body text-center">
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>

        </div>
    </div>



    <?php include 'footer.php'; ?>


</body>
</html>