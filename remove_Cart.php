<?php

include('query.php');

if (isset($_GET['id']) && isset($_SESSION['cart'][$_GET['id']])) {

    $id = $_GET['id'];

    unset($_SESSION['cart'][$id]);

    echo "<script>
            alert('Item removed from the cart successfully');
            window.location.href = 'shop-cart.php';
          </script>";
} else {

    echo "<script>
            alert('Item not found in the cart');
            window.location.href = 'shop-cart.php';
          </script>";
}
?>
