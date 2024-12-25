<?php
include 'db_connect.php';

if (isset($_GET['id']) && isset($_SESSION['cart'][$_GET['id']])) {
    unset($_SESSION['cart'][$_GET['id']]);
    $_SESSION['message'] = 'Product removed from cart!';
}

header('Location: cart.php');
exit;
?>
