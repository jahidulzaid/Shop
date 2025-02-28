<?php



require_once 'db_connect.php';


$query = "SELECT id, name, category, price, sold FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Mini Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Mini Shop Reports</h1>
        <hr>
        
        <h2>Product Sales Report</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price (৳)</th>
                    <th>Sold</th>
                    <th>Total Revenue (৳)</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']); ?></td>
                            <td><?= htmlspecialchars($row['name']); ?></td>
                            <td><?= htmlspecialchars($row['category']); ?></td>
                            <td><?= number_format($row['price'], 2); ?></td>
                            <td><?= $row['sold']; ?></td>
                            <td><?= number_format($row['price'] * $row['sold'], 2); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No product data available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <!-- Section: Summary -->
        <h2>Summary</h2>
        <?php
        // Calculate total revenue and sold items
        $summaryQuery = "SELECT SUM(price * sold) AS total_revenue, SUM(sold) AS total_items_sold FROM products";
        $summaryResult = $conn->query($summaryQuery);
        $summary = $summaryResult->fetch_assoc();
        ?>
        <p><strong>Total Revenue:</strong> ৳<?= number_format($summary['total_revenue'], 2); ?></p>
        <p><strong>Total Items Sold:</strong> <?= $summary['total_items_sold']; ?> units</p>

    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
