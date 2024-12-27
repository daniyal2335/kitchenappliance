<?php
include('adminpanel/query.php');
include('query.php');
?>
<?php
include('./adminpanel/dbcon.php'); 

$current_page = basename($_SERVER['PHP_SELF']); 

$title = "ShopCarts";
$description = "Welcome to the Kitchen Accessories";
$keywords = "website, jamal, ShopCarts";

$query = "SELECT id, title, description, keywords FROM meta_tags WHERE page = :page";
$stmt = $pdo->prepare($query);
$stmt->execute([':page' => $current_page]);
$meta_tags = $stmt->fetch(PDO::FETCH_ASSOC);

if ($meta_tags) {
    $update_query = "UPDATE meta_tags SET title = :title, description = :description, keywords = :keywords WHERE page = :page";
    $update_stmt = $pdo->prepare($update_query);
    $update_stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':keywords' => $keywords,
        ':page' => $current_page
    ]);
} else {
    $insert_query = "INSERT INTO meta_tags (page, title, description, keywords) VALUES (:page, :title, :description, :keywords)";
    $insert_stmt = $pdo->prepare($insert_query);
    $insert_stmt->execute([
        ':page' => $current_page,
        ':title' => $title,
        ':description' => $description,
        ':keywords' => $keywords
    ]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo htmlspecialchars($title); ?> </title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--== Themify Icons CSS ==-->
    <link href="assets/css/themify-icons.css" rel="stylesheet"/>
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!--== Ionicons CSS ==-->
    <link href="assets/css/ionicons.min.css" rel="stylesheet"/>
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet"/>
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet"/>
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet"/>
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet"/>
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>

<!--wrapper start-->
<!-- <div class="wrapper home-default-wrapper">

  <!-Start Preloader Content ==-->
  <!-- <div class="preloader-wrap">
    <div class="preloader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --> 
  <!--== End Preloader Content ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default sticky-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-5 col-sm-3 col-md-3 col-lg-2 pr-0">
          <div class="header-logo-area">
            <a href="index.php">
              <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
              <img class="logo-light" src="assets/img/logo.png" alt="Logo" />
            </a>
          </div>
        </div>
        <div class="col-7 col-sm-9 col-md-9 col-lg-10">
          <div class="header-align">
            <div class="header-navigation-area">
              <ul class="main-menu nav justify-content-center">
                <li class="has-submenu active"><a href="index.php">Home</a>
                  <!-- <ul class="submenu-nav">
                    <li><a href="index.php">Home</a></li> -->
                    <!-- <li><a href="index-2.html">Home 2</a></li> -->
                  <!-- </ul> -->
                </li>
                <li class="has-submenu"><a href="shops.php">Shop</a>
                  <!-- <ul class="submenu-nav submenu-nav-mega"> -->
                    <!-- <li class="mega-menu-item"><a class="srmenu-title" href="#">Cutting Board</a>
                      <ul>
                        <li><a href="shop.php">Fish spatula</a></li>
                        <li><a href="shop.php">Pasta fork</a></li>
                        <li><a href="shop.php">Bulb baster</a></li>
                        <li><a href="shop.php">Food mill</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a class="srmenu-title" href="#">Stainless steel</a>
                      <ul>
                        <li><a href="shop.php">Apple corer</a></li>
                        <li><a href="shop.php">Vegetable peeler</a></li>
                        <li><a href="shop.php">Garlic press</a></li>
                        <li><a href="shop.php">Pizza cutter</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a class="srmenu-title" href="#">Marble</a>
                      <ul>
                        <li><a href="shop.php">Cheese slicer</a></li>
                        <li><a href="shop.php">Panini spatula</a></li>
                        <li><a href="shop.php">Melon baller</a></li>
                        <li><a href="shop.php">Nutcracker</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a class="srmenu-title" href="#">Granite</a>
                      <ul>
                        <li><a href="shop.php">Pizza peel</a></li>
                        <li><a href="shop.php">Mini whisk</a></li>
                        <li><a href="shop.php">French whisk</a></li>
                        <li><a href="shop.php">Mixing whisk</a></li>
                      </ul>
                    </li> -->
                  <!-- </ul> -->
                </li>
                <!-- <li class="has-submenu full-width colunm-two position-static"><a href="productDetail.php">Product</a> -->
                  <!-- <ul class="submenu-nav submenu-nav-mega">
                    <li class="mega-menu-item"><a class="srmenu-title" href="#">Shop Pages Layout</a>
                      <ul>
                        <li><a href="shop-3-grid.html">Shop 3 Column</a></li>
                        <li><a href="shop-4-grid.html">Shop 4 Column</a></li>
                        <li><a href="shop.html">Shop Left Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                        <li><a href="shop-list.html">Shop Listing View</a></li>
                        <li><a href="shop-list-left-sidebar.html">Shop List left Sidebar</a></li>
                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a class="srmenu-title" href="#">Single Products</a>
                      <ul>
                        <li><a href="shop-single-product.html">Simple Product</a></li>
                        <li><a href="shop-single-product-variable.html">Variable Product</a></li>
                        <li><a href="shop-single-product-affiliate.html">Affiliate Product</a></li>
                        <li><a href="shop-single-product-countdown.html">Countdown Product</a></li>
                        <li><a href="shop-single-product-soldout.html">Soldout Product</a></li>
                      </ul>
                    </li>
                  </ul> -->
                <!-- </li> -->
                <li class="has-submenu"><a href="blog.php">Blog</a>
                  <!-- <ul class="submenu-nav">
                    <li><a href="blog.php">Blog Grid Left Sidebar</a></li>
                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                    <li><a href="blog-grid-no-sidebar.html">Blog Grid No Sidebar</a></li>
                    <li><a href="blog-details-left-sidebar.html">Blog Single Left Sidebar</a></li>
                    <li><a href="blog-details-right-sidebar.html">Blog Single Right Sidebar</a></li>
                    <li><a href="blog-details-no-sidebar.html">Blog Single No Sidebar</a></li>
                  </ul> -->
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <div class="header-action-area">
              <div class="header-action-currency">
                  <!-- <span class="current-currency">Dashboard</span> -->
                <!--<ul class="currency-dropdown">
                  <li class="currency-item active"><a href="#/">USD - US Dollar</a></li>
                  <li class="currency-item"><a href="#/">EUR - Euro</a></li>
                  <li class="currency-item"><a href="#/">GBP - British Pound</a></li>
                  <li class="currency-item"><a href="#/">INR - Indian Rupee</a></li>
                  <li class="currency-item"><a href="#/">BDT - Bangladesh Taka</a></li>
                  <li class="currency-item"><a href="#/">JPY - Japan Yen</a></li>
                  <li class="currency-item"><a href="#/">CAD - Canada Dollar</a></li>
                  <li class="currency-item"><a href="#/">AUD - Australian Dollar</a></li>
                </ul> -->
              </div>
              <div class="header-action-usermenu">
                <div class="icon-usermenu"><i class="ti-settings"></i></div>
                <ul class="user-menu">
                  <li><a href="account.php">My Account</a></li>
                  <!-- <li><a href="shop-wishlist.php">Wishlist</a></li> -->
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <?php
							if(isset($_SESSION['userEmail'])){
								?>
								<li>
								<a href="weblogout.php">logout</a>
							</li>
							<?php
							
							}
							else{
								?>
								<li>
								<a href="login.php">login</a>
							</li>
							<?php
							}
							?>
                </ul>
              </div>
              <?php

$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$totalQty = 0;
$totalPrice = 0;

foreach ($cartItems as $item) {
    $totalQty += $item['quantity'];
    $totalPrice += $item['price'] * $item['quantity'];
}
?>
  <div class="header-action-cart">
    <a class="cart-icon" href="shop-cart.php">
      <span class="cart-count"><?php echo $totalQty; ?></span>
      <i class="ti-shopping-cart"></i>
    </a>
    <div class="cart-dropdown-menu">
      <div class="minicart-action">
        <?php if (!empty($cartItems)): ?>
          <?php foreach ($cartItems as $item): ?>
            <div class="minicart-item">
              <div class="thumb">
                <img src="adminpanel/img/<?php echo htmlspecialchars($item['image']); ?>" alt="Cart Item">
              </div>
              <div class="content">
                <h4 class="title">
                  <a href="#/"><?php echo htmlspecialchars($item['name']); ?></a>
                </h4>
                <h6 class="nrbQ">Qty: <?php echo $item['quantity']; ?></h6>
                <p class="price">$<?php echo number_format($item['price'], 2); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="empty-cart">Your cart is empty.</p>
        <?php endif; ?>
      </div>
      <div class="shopping-cart-total">
        <h4>Total <span>$<?php echo number_format($totalPrice, 2); ?></span></h4>
      </div>
      <div class="shopping-cart-btn">
        <a class="btn-theme m-0" href="shop-cart.php">View Cart</a>
        <!-- <?php //if (!empty($cartItems)): ?>
          <a class="btn-theme m-0" href="?checkout">Checkout</a>
        <?php //else: ?> -->
          <!-- <a class="btn-theme m-0" href="shop-cart.php">Add Items</a> -->
        <?php //endif; ?>
      </div>
    </div>
  </div>
  <button class="btn-menu d-lg-none">
    <span></span>
    <span></span>
    <span></span>
  </button>
</header>

  <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="assets/img/about/ban.webp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">YOUR SHOPPING CART</h2>
              <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">/</span></a><span class="active">Your Shopping Cart</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->
    <?php
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $quantity = (int)$_GET['quantity'];

    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch();

    if (!$product) {
        die("Product not found.");
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$id] = [
            'name' => $product['name'],
            'price' => $product['prize'],
            'image' => $product['image'],
            'quantity' => $quantity,
        ];
    }

    echo "<script>alert('Product successfully added to the cart');
    window.location.href = 'shop-cart.php';
    </script>";
}

// Checkout logic
if (isset($_GET['checkout'])) {
    // User details from session
    $uId = $_SESSION['userId'];
    $uName = $_SESSION['userName'];
    $uEmail = $_SESSION['userEmail'];

    // Insert into orders
    foreach ($_SESSION['cart'] as $id => $item) {
        $pId = $id; // Product ID
        $pName = $item['name'];
        $pPrice = $item['price'];
        $pQty = $item['quantity'];

        $query = $pdo->prepare("INSERT INTO orders (u_id, u_name, u_email, p_id, p_name, p_price, p_qty)
                                VALUES (:u_id, :u_name, :u_email, :p_id, :p_name, :p_price, :p_qty)");
        $query->bindParam(':u_id', $uId);
        $query->bindParam(':u_name', $uName);
        $query->bindParam(':u_email', $uEmail);
        $query->bindParam(':p_id', $pId);
        $query->bindParam(':p_name', $pName);
        $query->bindParam(':p_price', $pPrice);
        $query->bindParam(':p_qty', $pQty);
        $query->execute();
    }

    // Invoice totals
    $totalQty = 0;
    $totalPrice = 0;

    foreach ($_SESSION['cart'] as $item) {
        $totalQty += $item['quantity'];
        $totalPrice += $item['price'] * $item['quantity'];
    }

    // Insert into invoice
    $invoice_query = $pdo->prepare("INSERT INTO invoice (u_id, u_name, u_email, total_Qty, total_amount)
                                    VALUES (:u_id, :u_name, :u_email, :total_products, :total_amount)");
    $invoice_query->bindParam(':u_id', $uId);
    $invoice_query->bindParam(':u_name', $uName);
    $invoice_query->bindParam(':u_email', $uEmail);
    $invoice_query->bindParam(':total_products', $totalQty);
    $invoice_query->bindParam(':total_amount', $totalPrice);
    $invoice_query->execute();

    // Clear cart after successful checkout
    unset($_SESSION['cart']);

    echo "<script>alert('Order placed successfully');
    window.location.href = 'index.php';
    </script>";
}
?>



?>

<section class="cart-page-area">
  <div class="container pt-100 pb-100">
  <form method="post">
  <div class="row">
    <div class="col-12">
      <div class="cart-table table-responsive">
        <table>
          <thead>
            <tr>
              <th class="pro-thumbnail">Image</th>
              <th class="pro-title">Product</th>
              <th class="pro-price">Price</th>
              <th class="pro-quantity">Quantity</th>
              <th class="pro-subtotal">Total</th>
              <th class="pro-remove">Remove</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $cart = $_SESSION['cart'] ?? [];
            $total = 0;
            foreach ($cart as $id => $item): 
              $subtotal = $item['price'] * $item['quantity'];
              $total += $subtotal;
            ?>
            <tr>
              <td class="pro-thumbnail">
                <img src="adminpanel/img/<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['name']); ?>" class="img-fluid">
              </td>
              <td class="pro-title"><?= htmlspecialchars($item['name']); ?></td>
              <td class="pro-price">$<?= number_format($item['price'], 2); ?></td>
              <td class="pro-quantity">
                <div class="quick-product-action">
                  <div class="pro-qty">
                    <!-- Quantity Input -->
                    <input 
                      type="number" 
                      id="quantity-<?= $id; ?>" 
                      name="quantities[<?= $id; ?>]" 
                      value="<?= $item['quantity']; ?>" 
                      class="quantity-input" 
                      min="1"
                    />
                  </div>
                </div>
              </td>
              <td class="pro-subtotal">$<?= number_format($subtotal, 2); ?></td>
              <td class="pro-remove">
                <a href="remove_Cart.php?id=<?= $id; ?>">×</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Cart update message -->
    <?php
    if (isset($_SESSION['cart_message'])) {
      echo "<script>alert('" . htmlspecialchars($_SESSION['cart_message']) . "');</script>";
      unset($_SESSION['cart_message']);
    }
    ?>

    <div class="col-12">
      <div class="cart-buttons">
        <button type="submit" class="btn-shopping update-cart" name="update_cart">Update Cart</button>
        <a href="clear_cart.php" class="btn-shopping">Clear Cart</a>
      </div>
    </div>
  </div>
</form>
<?php
// Handle the cart update in PHP when the form is submitted
if (isset($_POST['update_cart'])) {
    $quantities = $_POST['quantities'] ?? [];

    foreach ($quantities as $id => $newQuantity) {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] = (int)$newQuantity;
        }
    }

    $_SESSION['cart_message'] = "Cart updated successfully!";
    
}

?>
      </div>
          <div class="col-12">
            <div class="cart-payment">
              <div class="row">
                <!-- <div class="col-lg-6">
                  <div class="culculate-shipping">
                    <h3 class="title">Get shipping estimatesss</h3>
                    <form action="#">
                      <div class="form-group">
                        <select class="form-control form-select" aria-label="address country">
                          <option selected>---</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Åland Islands</option>
                          <option value="3">Albania</option>
                          <option value="4">Algeria</option>
                          <option value="5">Andorra</option>
                          <option value="6">Angola</option>
                          <option value="7">Anguilla</option>
                          <option value="8">Antigua & Barbuda</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Zip/Postal Code">
                      </div>
                    </form>
                    <a class="btn-theme" href="#/">Calculate shipping</a>
                    <p class="text">Error : country is not supported; zip can't be blank.</p>
                  </div>
                </div> -->
                <div class="col-lg-7">
    <div class="cart-subtotal">
        <h3 class="title">Cart Totals</h3>
        <table>
            <tbody>


<?php
$subtotal = 0;

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {

        $subtotal += $product['price'] * $product['quantity'];
    }
}
?>
              <tr class="cart-subtotal">
    <th>Subtotal</th>
    <td>
        <?php if (isset($_SESSION['userId'])): ?>
            <?php if ($subtotal > 0): ?>
                <span class="amount">$<?= number_format($subtotal, 2); ?></span>
            <?php else: ?>
                <span class="warning">Your cart is empty.</span>
            <?php endif; ?>
        <?php else: ?>
            <span class="warning">Please log in to see the subtotal.</span>
        <?php endif; ?>
    </td>
</tr>
<tr class="order-total">
    <th>Total</th>
    <td>
        <?php if (isset($_SESSION['userId'])): ?>
            <?php if ($subtotal > 0): ?>
                <span class="price">$<?= number_format($subtotal, 2); ?></span>
            <?php else: ?>
                <span class="warning">Your cart is empty.</span>
            <?php endif; ?>
        <?php else: ?>
            <span class="warning">Please log in to see the total.</span>
        <?php endif; ?>
    </td>
</tr>
                      </tbody>
                    </table>
                    <?php 
						if(isset($_SESSION['userEmail'])){
						?>
						<a href="?checkout" class="btn-theme">
							Proceed to Checkout
						</a>
						<?php 
						}
						else{

						
						?>

						<a href="login.php" class="btn-theme">
							Proceed to Checkout
					</a>
					<?php
					}
					?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Cart Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item">
              <h4 class="widget-title">About Information</h4>
              <div class="about-widget">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud reprhendit in voluptate velit esse exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item widget-menu-item">
              <h4 class="widget-title">Information</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="shop-account.php">My Account</a></li>
                  <li><a href="shop-wishlist.html">Wishlist</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="blog.php">Blog</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item">
              <h4 class="widget-title">Quick Links</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="#/">Shipping policy</a></li>
                  <li><a href="#/">Size Chart</a></li>
                  <li><a href="#/">Login</a></li>
                  <li><a href="#/">My Account</a></li>
                  <li><a href="#/">Register</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item">
              <h4 class="widget-title">Contact Us</h4>
              <p class="mb-0">Your current address goes to here,120 example, country.</p>
              <ul class="widget-contact-info">
                <li class="info-phone"><a href="tel://(008)25425425425487">(008) 254 254 254 25487</a></li>
                <li class="info-mail"><a href="mailto://example@admin.com">example@admin.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-content">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="widget-copyright text-center">
                <p>© 2025 <span>Alan</span>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com">HasThemes</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--== End Footer Area Wrapper ==-->
  
  <!--== Scroll Top Button ==-->
  <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="ti-close"></i></span>
        </button>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/quick-view1.webp" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">1. New and sale badge product</h4>
              <div class="prices">
                <del class="price-old">$167.540</del>
                <span class="price">$141.76</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity2" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->  

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="logo-area">
            <a href="index.html"><img src="assets/img/logo.png" alt="Logo" /></a>
          </div>
          <div class="close-action">
            <button class="btn-close"><i class="fa fa-close"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
        <!-- Off Canvas Footer -->
        <div class="off-canvas-footer"></div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->  
</div>

<!--=======================Javascript============================-->

<!--=== Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jquery Appear Js ===-->
<script src="assets/js/jquery.appear.js"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jquery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>
<!--=== jquery Slicknav Js ===-->
<script src="assets/js/jquery.slicknav.js"></script>
<!--=== jquery Countdown Js ===-->
<script src="assets/js/jquery.countdown.min.js"></script>
<!--=== jquery Wow Min Js ===-->
<script src="assets/js/wow.min.js"></script>
<!--=== jQuery Zoom Min Js ===-->
<script src="assets/js/jquery-zoom.min.js"></script>

<!--=== Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>

</html>