<?php 
include('adminpanel/query.php');
include('query.php');
include('Components/header.php');
?>
  
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
$query = "SELECT * FROM category";
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
          <h2 class="title">Latest product</h2>
          <p>Our latest item collection of 2021</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="swiper-container product4-slider-container">
          <div class="swiper-wrapper">
            <?php foreach ($category as $cat): ?>
              <div class="swiper-slide">
                <!-- Start Product Item -->
                <div class="product-item">
                  <div class="product-thumb">
                    <!-- <a href="productDetail.php?id=<?php //echo $cat['id']; ?>"> -->
                      <img src="adminpanel/img/<?php echo $cat['image']; ?>" >
                      <?php if ($cat['sale']): ?>
                        <div class="ribbons">
                          <span class="ribbon ribbon-hot">Sale</span>
                          <span class="ribbon ribbon-onsale align-right"><?php echo $cat['sale']; ?>%</span>
                        </div>
                      <?php endif; ?>
                    </a>
                    <div class="product-action">
                      <!-- <a class="action-wishlist" href="javascript:void(0);" onclick="addToWishlist(<?php// echo $cat['product_id']; ?>);" title="Wishlist">
                        <i class="ion-android-favorite-outline"></i>
                      </a>  -->
                      <!-- <a class="action-quick-view" href="javascript:void(0);" title="Quick View">
                        <i class="ion-ios-search-strong"></i>
                      </a> -->
                      <a class="action-cart" href="productDetail.php?id=<?= $cat['id']; ?>">
                        <i class="fa fa-opencart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-info">
                 <h4 class="title">   <!-- <a href="productDetail.php?id=<?php //echo $cat['id']; ?>">--><?php echo $cat['name']; ?></a></h4> 
                    <!-- <div class="prices">
                      <span class="price">$<?php //echo number_format($product['prize'], 2); ?></span>
                      <?php //if ($product['old_price']): ?>
                        <del class="price-old">$<?php //echo number_format($product['old_price'], 2); ?></del>
                      <?php //endif; ?>
                    </div> -->
                  </div> 
                </div>
                <!-- End Product Item -->
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
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

    <!--== Start Newsletter Area Wrapper ==-->
    <section class="newsletter-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 m-auto" data-aos="fade-up" data-aos-duration="1000">
            <div class="section-title text-center">
              <h2 class="title">Join to our Newsletter</h2>
              <p>If you never miss our interesting news by joining our newsletter.</p>
            </div>
            <form class="input-btn-group">
              <input class="form-control" type="text" placeholder="Enter your e-mail">
              <button class="btn btn-theme btn-black" type="button">Subscribe!</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--== End Newsletter Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-default-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6 m-auto" data-aos="fade-up" data-aos-duration="1000">
            <div class="section-title text-center">
              <h2 class="title">Latest Blog</h2>
              <p>Follow our blog for collect information</p>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
          <div class="col-md-6">
            <!--== Start Blog Post Item ==-->
            <div class="post-item mb-sm-30">
              <div class="thumb">
                <a href="blog-details.html"><img src="assets/img/blog/banner3.png" alt="Alan-Blog"></a>
              </div>
              <div class="content">
                <div class="inner-content">
                  <h4 class="title">
                    <a href="blog-details.html">There are many variations of passages</a>
                  </h4>
                  <div class="meta">
                    <a class="post-date" href="blog.html">January 26, 2021</a>
                    <span>/</span>
                    <a class="post-author" href="blog.html">Demo Alan Admin</a>
                  </div>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the...</p>
                  <a class="btn-blog" href="blog-details.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Post Item ==-->
          </div>
          <div class="col-md-6">
            <!--== Start Blog Post Item ==-->
            <div class="post-item mb-sm-30">
              <div class="thumb">
                <a href="blog-details.html"><img src="assets/img/blog/banner2.png" alt="Alan-Blog"></a>
              </div>
              <div class="content">
                <div class="inner-content">
                  <h4 class="title">
                    <a href="blog-details.html">The standard chunk of lorem ipsum used since</a>
                  </h4>
                  <div class="meta">
                    <a class="post-date" href="blog.html">January 26, 2021</a>
                    <span>/</span>
                    <a class="post-author" href="blog.html">Demo Alan Admin</a>
                  </div>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the...</p>
                  <a class="btn-blog" href="blog-details.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Post Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>

  
<?php
include('Components/footer.php');
?>