<?php
include('query.php');
unset($_SESSION['cart']);

echo "<script>alert('Clear Cart successfully');
 window.location.href = 'shop-cart.php';
</script>";
?>
