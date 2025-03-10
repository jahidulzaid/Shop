<?php
include 'db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']);


    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        if (isset($_SESSION['cart'][$product_id])) {
            // Increase the quantity
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {

            $_SESSION['cart'][$product_id] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1,
                'image_url' => $product['image_url']
            ];
        }

        $_SESSION['message'] = 'Product added to cart successfully!';
    } else {
        $_SESSION['message'] = 'Product not found!';
    }
}


header('Location: product-list.php');
exit;
?>
