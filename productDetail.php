
<?php
include('adminpanel/query.php');
include('query.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Product Single Title - Alan - Kitchen Accessories Bootstrap 5 HTML Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,400i,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,600,700" rel="stylesheet">

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
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />


</head>

<body>

<!--wrapper start-->
<div class="wrapper home-default-wrapper">

  <!--== Start Preloader Content ==-->
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
                  <ul class="submenu-nav">
                    <!-- <li><a href="index.php">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li> -->
                  </ul>
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
                <li class="has-submenu"><a href="blog.html">Blog</a>
                  <!-- <ul class="submenu-nav">
                    <li><a href="blog.html">Blog Grid Left Sidebar</a></li>
                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                    <li><a href="blog-grid-no-sidebar.html">Blog Grid No Sidebar</a></li>
                    <li><a href="blog-details-left-sidebar.html">Blog Single Left Sidebar</a></li>
                    <li><a href="blog-details-right-sidebar.html">Blog Single Right Sidebar</a></li>
                    <li><a href="blog-details-no-sidebar.html">Blog Single No Sidebar</a></li>
                  </ul> -->
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
            <div class="header-action-area">
              <div class="header-action-currency">
                <!-- <span class="current-currency">USD</span> -->
                <!-- <ul class="currency-dropdown">
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
                  <li><a href="shop-wishlist.html">Wishlist</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="login.php">Login</a></li>
                </ul>
              </div>
              <div class="header-action-cart">
                <a class="cart-icon" href="shop-cart.php">
                  <span class="cart-count">2</span>
                  <i class="ti-shopping-cart"></i>
                </a>
                <div class="cart-dropdown-menu">
                  <div class="minicart-action">
                    <div class="minicart-item">
                      <div class="thumb">
                        <img src="assets/img/shop/cart/1.jpg" alt="Alan-Shop">
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="#/">2. New badge product - m / gold</a></h4>
                        <h6 class="nrbQ">Qty: 1</h6>
                        <p class="price">$80.00</p>
                      </div>
                    </div>
                    <div class="minicart-item">
                      <div class="thumb">
                        <img src="assets/img/shop/cart/1.jpg" alt="Alan-Shop">
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="#/">11. Product with video - purple</a></h4>
                        <h6 class="nrbQ">Qty: 1</h6>
                        <p class="price">$39.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="shopping-cart-total">
                    <h4>Total <span>$119.00</span></h4>
                  </div>
                  <div class="shopping-cart-btn">
                    <a class="btn-theme m-0" href="shop-cart.php">View Cart</a>
                    <!-- <a class="btn-theme m-0" href="shop-checkout.html">Checkout</a> -->
                  </div>
                </div>
              </div>
              <button class="btn-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->
  
  <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="assets/img/about/ban.webp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">Product Detail</h2>
              <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">/</span></a><span class="active">Product Detail</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->
    
    <?php
    if (isset($_GET['id'])) {
        $productId = $_GET['id'];
        
        
    
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $productId, PDO::PARAM_INT);
        
        // Execute the statement and check for errors
        if ($stmt->execute()) {
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($product) {
                // Product found, proceed with displaying details
                // For example:
               // echo "Product Name: " . htmlspecialchars($product['name']);
            } else {
                // Product not found
                echo "Product not found!";
            }
        } else {
            // Error executing query
            echo "Error executing query.";
            print_r($stmt->errorInfo());
        }
    } else {
        echo "Product ID is missing in the URL!";
    }
    ?>
    
<!--== Start Shop Area ==-->
<section class="product-area shop-single-product">
  <div class="container">
    <div class="row">
      <!-- Product Images -->
      <div class="col-lg-6">
        <div class="single-product-slider">
          <div class="single-product-thumb">
            <img src="adminpanel/img/<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" class="img-fluid">
          </div>
        </div>
      </div>

      <!-- Product Info -->
      <div class="col-lg-6">
        <div class="single-product-info">
          <h4 class="title"><?= htmlspecialchars($product['name']); ?></h4>
          <div class="prices">
            <span class="price">$<?= number_format($product['prize'], 2); ?></span>
          </div>
          <p class="product-desc"><?= htmlspecialchars($product['des']); ?></p>
          <div class="quick-product-action mt-0">
            <div class="action-top">
              <div class="pro-qty">
                <input type="number" id="quantity" name="quantity" value="1" min="1" />
              </div>
              <!-- Updated link for "Add to cart" -->
              <a href="javascript:void(0);" class="btn btn-black" id="addToCartButton">
                <i class="fa fa-opencart"></i> Add to cart
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Get the product ID from PHP and quantity from the input field
  const productId = <?= $product['id']; ?>; // Injecting PHP product ID into JavaScript
  const quantityInput = document.getElementById('quantity');
  
  // Update the "Add to cart" button URL to include the quantity
  document.getElementById('addToCartButton').addEventListener('click', function (e) {
    e.preventDefault();
    
    // Get the quantity value from the input field
    const quantity = quantityInput.value;
    
    // Construct the URL with product ID and quantity
    const url = `shop-cart.php?id=${productId}&quantity=${quantity}`;
    
    // Redirect to the cart page with the product ID and quantity
    window.location.href = url;
  });
});
</script>


    <!--== End Shop Area ==-->

    <!--== Start Shop Tab Area ==-->
    <section class="product-area product-description-review-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-description-review">
              <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#productDesc" type="button" role="tab" aria-controls="productDesc" aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#productReview" type="button" role="tab" aria-controls="productReview" aria-selected="false">Reviews</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-comment-tab" data-bs-toggle="tab" data-bs-target="#commentProduct" type="button" role="tab" aria-controls="commentProduct" aria-selected="false">Comments</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-custom-tab" data-bs-toggle="tab" data-bs-target="#productCustom" type="button" role="tab" aria-controls="productCustom" aria-selected="false">Shipping Policy</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-info-tab" data-bs-toggle="tab" data-bs-target="#productInfo" type="button" role="tab" aria-controls="productInfo" aria-selected="false">Size chart</button>
                </li>
              </ul>
              <div class="tab-content product-description-tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="productDesc" role="tabpanel" aria-labelledby="product-desc-tab">
                  <div class="product-desc">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="productReview" role="tabpanel" aria-labelledby="product-review-tab">
                  <div class="product-review">
                    <div class="review-header">
                      <h4 class="title">Customer Reviews</h4>
                      <div class="review-info">
                        <ul class="review-rating">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <span class="review-caption">Based on 1 review</span>
                        <span class="review-write-btn">Write a review</span>
                      </div>
                    </div>
                    <div class="product-review-form">
                      <h4 class="title">Write a review</h4>
                      <form action="#" method="post">
                        <div class="review-form-content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="reviewFormName">Name</label>
                                <input class="form-control" id="reviewFormName" type="text" placeholder="Enter your name" required="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="reviewFormEmail">Email</label>
                                <input class="form-control" id="reviewFormEmail" type="email" placeholder="john.smith@example.com" required="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="rating">
                                <span class="rating-title">Rating</span>
                                <span>
                                  <a class="fa fa-star-o" href="#/"></a>
                                  <a class="fa fa-star-o" href="#/"></a>
                                  <a class="fa fa-star-o" href="#/"></a>
                                  <a class="fa fa-star-o" href="#/"></a>
                                  <a class="fa fa-star-o" href="#/"></a>
                                </span>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="reviewReviewTitle">Review Title</label>
                                <input class="form-control" id="reviewReviewTitle" type="text" placeholder="Give your review a title" required="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="reviewFormTextarea">Body of Review <span>(1500)</span></label>
                                <textarea class="form-control textarea" id="reviewFormTextarea" name="comment" rows="7" placeholder="Write your comments here" required=""></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group pull-right">
                                <button class="btn btn-theme" type="submit">Submit Review</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="review-content">
                      <div class="review-item">
                        <ul class="review-rating">
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star"></i></li>
                          <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <h4 class="title">Cobus Bester</h4>
                        <h5 class="review-date"><span>Cobus Bester</span> on <span>Mar 03, 2021</span></h5>
                        <p>Can’t wait to start mixin’ with this one! Irba-irr-Up-up-up-up-date your theme!</p>
                        <a class="review-report" href="#/">Report as Inappropriate</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="commentProduct" role="tabpanel" aria-labelledby="product-comment-tab">
                  <div class="product-comment">
                    <form action="#">
                      <div class="product-comment-content">
                        <img src="assets/img/shop/comment.png" alt="Image-HasTech">
                        <textarea name="con_message" placeholder="Start the discussion…"></textarea>
                      </div>
                      <button class="btn btn-theme" type="submit">Post as Product</button>
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="productCustom" role="tabpanel" aria-labelledby="product-custom-tab">
                  <div class="product-shipping-policy">
                    <div class="section-title">
                      <h2 class="title">Shipping policy for our store</h2>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                    </div>
                    <ul class="shipping-policy-list">
                      <li>1-2 business days (Typically by end of day)</li>
                      <li><a href="#">30 days money back guaranty</a></li>
                      <li>24/7 live support</li>
                      <li>odio dignissim qui blandit praesent</li>
                      <li>luptatum zzril delenit augue duis dolore</li>
                      <li>te feugait nulla facilisi.</li>
                    </ul>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                    <p>claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                    <p>seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="productInfo" role="tabpanel" aria-labelledby="product-info-tab">
                  <div class="product-size-chart">
                    <h4>Size Chart</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="cun-name"><span>UK</span></td>
                          <td>18</td>
                          <td>20</td>
                          <td>22</td>
                          <td>24</td>
                          <td>26</td>
                        </tr>
                        <tr>
                          <td class="cun-name"><span>European</span></td>
                          <td>46</td>
                          <td>48</td>
                          <td>50</td>
                          <td>52</td>
                          <td>54</td>
                        </tr>
                        <tr>
                          <td class="cun-name"><span>usa</span></td>
                          <td>14</td>
                          <td>16</td>
                          <td>18</td>
                          <td>20</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td class="cun-name"><span>Australia</span></td>
                          <td>28</td>
                          <td>10</td>
                          <td>12</td>
                          <td>14</td>
                          <td>16</td>
                        </tr>
                        <tr>
                          <td class="cun-name"><span>Canada</span></td>
                          <td>24</td>
                          <td>18</td>
                          <td>14</td>
                          <td>42</td>
                          <td>36</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Shop Tab Area ==-->
    <!--== End Shop Area ==-->
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
                  <li><a href="shop-account.html">My Account</a></li>
                  <li><a href="shop-wishlist.html">Wishlist</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="blog.html">Blog</a></li>
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
            <a href="index.php"><img src="assets/img/logo.png" alt="Logo" /></a>
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
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!--=== Modernizr Min Js ===-->
<!-- <script src="assets/js/jquery-main.js"></script> -->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->

<!--=== jQuery Migration Min Js ===-->
<!-- <script src="assets/js/jquery-migrate.js"></script> -->
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