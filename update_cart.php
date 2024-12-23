<?php
include('query.php');


// Handle form submission when the cart is updated
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantities'])) {
    // Get the current cart from the session
    $cart = $_SESSION['cart'] ?? [];

    // Loop through each product and update its quantity based on the POSTed data
    foreach ($_POST['quantities'] as $id => $quantity) {
        if (isset($cart[$id])) {
            // Ensure the quantity is an integer and greater than or equal to 1
            $cart[$id]['quantity'] = max(1, (int)$quantity); // Prevent quantity from going below 1
        }
    }

    // Save the updated cart back to the session
    $_SESSION['cart'] = $cart;

    // Calculate the updated total
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity']; // Price times quantity for each item
    }

    // Store the updated total in the session
    $_SESSION['cart_total'] = $total;

    // Set a success message to notify the user
    $_SESSION['cart_message'] = "Cart updated successfully!";

    // Redirect to the same page to reload the cart with updated quantities
    header("Location: shop-cart.php");
    exit;
}
?>
