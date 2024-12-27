<?php 
include('adminpanel/query.php');
include('query.php');
?>
<?php
include('./adminpanel/dbcon.php'); 

// Current page ko identify karte hain
$current_page = basename($_SERVER['PHP_SELF']); 

// Default meta tags
$title = "Index";
$description = "Welcome to the Kitchen Accessories";
$keywords = "website, jamal, home";

// Database se page ke liye meta tags fetch karte hain
$query = "SELECT id, title, description, keywords FROM meta_tags WHERE page = :page";
$stmt = $pdo->prepare($query);
$stmt->execute([':page' => $current_page]);
$meta_tags = $stmt->fetch(PDO::FETCH_ASSOC);

// Agar meta tags exist karte hain to update karte hain, agar nahi to insert karte hain
if ($meta_tags) {
    // Meta tags already exist, so update them
    $update_query = "UPDATE meta_tags SET title = :title, description = :description, keywords = :keywords WHERE page = :page";
    $update_stmt = $pdo->prepare($update_query);
    $update_stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':keywords' => $keywords,
        ':page' => $current_page
    ]);
} else {
    // Meta tags nahi hain, to new insert karte hain
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
 


  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-default">
      <div class="home-slider-content">
        <div class="swiper-container home-slider-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <!-- Start Slide Item -->
              <div class="home-slider-item bg-img-cover" data-bg-img="assets/img/slider/b.jpg">
                <div class="slider-content-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="content m-auto">
                          <div class="inner-content">
                            <div class="tittle-wrp">
                              <h2>Ice Cream Coop <br>New item</h2>
                            </div>
                            <div class="btn-wrp">
                              <a href="shop.html" class="btn-link">Shop Now</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Slide Item -->
            </div>
            <div class="swiper-slide">
              <!-- Start Slide Item -->
              <div class="home-slider-item bg-img-cover" data-bg-img="assets/img/slider/b2.avif">
                <div class="slider-content-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <div class="content m-auto">
                          <div class="inner-content">
                            <div class="tittle-wrp">
                              <h2>Kitchen tool crock <br>Featured Item</h2>
                            </div>
                            <div class="btn-wrp">
                              <a href="shop.html" class="btn-link">Shop Now</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Slide Item -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->
<?php
    // Fetch products from the database
$query = "SELECT * FROM category ";
$stmt = $pdo->query($query);
$category = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Check if there are any products
if (count($category) > 0):
?>
<!--== Start Product Area Wrapper ==-->
<section class="product-area latest-product-area" data-aos="fade-up" data-aos-duration="1000">
<div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-6 m-auto">
        <div class="section-title text-center">
          <h2 class="title">Kitchen Categories</h2>
          <p>Our latest item collection</p>
        </div>
      </div>
    </div>
    <!-- Product Items in One Row -->
    <div class="row">
      <?php foreach ($category as  $cat): ?>
      <div class="col-12 col-md-3">
      <div class="swiper-container product4-slider-container">
      <div class="swiper-slide">
                <!-- Start Product Item -->
                <div class="product-item">
                  <div class="product-thumb">
                    <a href="categoryDetail.php?id=<?php echo $cat['id']; ?>">
                      <img src="adminpanel/img/<?php echo $cat['image']; ?>" alt="<?php echo $cat['name']; ?>">
                      <?php if ($cat['sale']): ?>
                        <div class="ribbons">
                          <span class="ribbon ribbon-hot">Sale</span>
                          <span class="ribbon ribbon-onsale align-right"><?php echo $cat['sale']; ?>%</span>
                        </div>
                      <?php endif; ?>
                    </a>
                    <!-- <div class="product-action">
                      <a class="action-cart" href="categoryDetail.php?id=<?php echo $cat['id']; ?>">
                        <i class="fa fa-opencart"></i>
                      </a>
                    </div> -->
                  </div>
                  <div class="product-info">
                    <h4 class="title">
                      <a href="categoryDetail.php?id=<?php echo $cat['id']; ?>">
                        <?php echo $cat['name']; ?>
                      </a>
                    </h4>
                  </div> 
                </div>
                <!-- End Product Item -->
              </div>
          
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<!--== End Product Area Wrapper ==-->
<?php
else:
  echo "<p>No products available at the moment.</p>";
endif;
?>

    <!--== Start Offer Area Wrapper ==-->
    <section class="offer-area" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="single-offer">
              <div class="thumb">
                <a href="shop-single-product.html">
                  <img src="assets/img/offer-1.webp" alt="Alan-Shop">
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="single-offer">
              <div class="thumb">
                <a href="shop-single-product.html">
                  <img src="assets/img/offer-2.webp" alt="Alan-Shop">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Offer Area Wrapper ==-->

    <!--== Start Featured Product Area Wrapper ==-->
    <section class="product-area featured-product-area" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Featured Product</h2>
              <p>Best selling item in our collection</p>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
        // Fetch products from the database
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row">
  <?php foreach ($products as $product): ?>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
      <!-- Start Product Item -->
      <div class="product-item">
        <div class="product-thumb">
          <a href="productDetail.php?id=<?= $product['id']; ?>">
            <img src="adminpanel/img/<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
            <div class="ribbons">
              <?php if ($product['sale_percentage']): ?>
                <span class="ribbon ribbon-hot">Sale</span>
              <?php endif; ?>
              <?php if (!empty($product['sale_percentage'])): ?>
                <span class="ribbon ribbon-onsale align-right"><?= $product['sale_percentage']; ?>%</span>
              <?php endif; ?>
            </div>
          </a>
          <div class="product-action">
            <!-- <a class="action-wishlist" href="#/" title="Wishlist">
              <i class="ion-android-favorite-outline"></i>
            </a> -->
            <!-- <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
              <i class="ion-ios-search-strong"></i>
            </a> -->
            <a class="action-cart" href="productDetail.php?id=<?= $product['id']; ?>">
              <i class="fa fa-opencart"></i>
            </a>
          </div>
        </div>
        <div class="product-info">
          <h4 class="title">
            <a href="productDetail.php?id=<?= $product['id']; ?>">
              <?= htmlspecialchars($product['name']); ?>
            </a>
          </h4>
          <div class="prices">
            <span class="price">$<?= number_format($product['prize'], 2); ?></span>
          </div>
        </div>
      </div>
      <!-- End Product Item -->
    </div>
  <?php endforeach; ?>
</div>
    </div>
      </div>
    </section>
    <!--== End Featured Product Area Wrapper ==-->
    <!--== Start Blog Area Wrapper ==-->
 <section id="blog" class="blog-area blog-default-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 m-auto" data-aos="fade-up" data-aos-duration="1000">
            <div class="section-title text-center">
              <h2 class="title">Latest Blog</h2>
              <p>Follow our blog for collect information</p>
            </div>
          </div>
        </div>
<?php
// Blogs ko fetch karna
$stmt = $pdo->prepare("SELECT * FROM blogs ORDER BY created_at DESC limit 2");
$stmt->execute();
$blogs = $stmt->fetchAll();
?>

<div class="row" data-aos="fade-up" data-aos-duration="1000">
  <?php if (!empty($blogs)): ?>
    <?php foreach ($blogs as $blog): ?>
      <div class="col-md-6">
        <!--== Start Blog Post Item ==-->
        <div class="post-item mb-sm-30">
          <div class="thumb">
            <a href="blog-details.php?id=<?= htmlspecialchars($blog['id']); ?>">
              <img src="adminpanel/img/<?= htmlspecialchars($blog['image_path']); ?>" alt="<?= htmlspecialchars($blog['title']); ?>">
            </a>
          </div>
          <div class="content">
            <div class="inner-content">
              <h4 class="title">
                <a href="blog-details.php?id=<?= htmlspecialchars($blog['id']); ?>"><?= htmlspecialchars($blog['title']); ?></a>
              </h4>
              <div class="meta">
                <a class="post-date" href="blog.php"><?= date('F d, Y', strtotime($blog['created_at'])); ?></a>
                <span>/</span>
                <!-- <a class="post-author" href="blog.php"><//?= //htmlspecialchars($blog['sub_des']); ?></a> -->
              </div>
              <p><?= htmlspecialchars(substr($blog['description'], 0, 100)) . '...'; ?></p>
              <a class="btn-blog" href="blog-details.php?id=<?= htmlspecialchars($blog['id']); ?>">Read More</a>
            </div>
          </div>
        </div>
        <!--== End Blog Post Item ==-->
</div>
<?php endforeach; ?>
  <?php else: ?>
    <p>No blogs found.</p>
  <?php endif; ?>
</div>
</div>
    </section>
    <!--== End Blog Area Wrapper ==-->
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
                <p>Kitchen accessories are essential tools that enhance cooking and meal preparation. These include cookware like pots and pans, utensils such as spatulas and tongs, and storage solutions like jars and containers. Small appliances like blenders and mixers make food prep easier, while gadgets like graters, timers, and thermometers improve efficiency and precision</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item widget-menu-item">
              <h4 class="widget-title">Information</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="account.php">Sign up</a></li>
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="#blog">Blog</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget-item">
              <h4 class="widget-title">Quick Links</h4>
              <nav class="widget-menu-wrap">
                <ul class="nav-menu nav">
                  <li><a href="shop-cart.php">View Cart</a></li>
                  <li><a href="#/">Size Chart</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="account.php">Sign up</a></li>
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

<!-- jQuery and dependencies -->
<script src="assets/js/jquery-main.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/jquery-migrate.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Swiper and other libraries -->
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/fancybox.min.js"></script>
<script src="assets/js/aos.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery-zoom.min.js"></script>





<!-- Custom JS (ensure this is last) -->
<script src="assets/js/custom.js"></script>


</body>

</html>