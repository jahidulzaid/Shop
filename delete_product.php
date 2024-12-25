<?php
include 'db_connect.php';


if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT image_url FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $product = $result->fetch_assoc();
        $imagePath = $product['image_url'];


        $deleteSql = "DELETE FROM products WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param("i", $id);

        if ($deleteStmt->execute()) {

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            header("Location: manage_products.php?msg=Product deleted successfully");
        } else {
            echo "Error deleting product: " . $conn->error;
        }
    } else {
        echo "Product not found!";
    }
} else {
    echo "Invalid product ID!";
}

$conn->close();
?>