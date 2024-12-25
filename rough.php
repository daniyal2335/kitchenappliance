<div class="row">
      <?php foreach ($category as  $cat): ?>
      <div class="col-12 col-md-3">
      <div class="swiper-container product4-slider-container">
      <div class="swiper-slide">
                <!-- Start Product Item -->
                <div class="product-item">
                  <div class="product-thumb">
                    <a href="productDetail.php?id=<?php echo $cat['id']; ?>">
                      <img src="adminpanel/img/<?php echo $cat['image']; ?>" alt="<?php echo $cat['name']; ?>">
                      <?php if ($cat['sale']): ?>
                        <div class="ribbons">
                          <span class="ribbon ribbon-hot">Sale</span>
                          <span class="ribbon ribbon-onsale align-right"><?php echo $cat['sale']; ?>%</span>
                        </div>
                      <?php endif; ?>
                    </a>
                    <div class="product-action">
                      <a class="action-cart" href="productDetail.php?id=<?php echo $cat['id']; ?>">
                        <i class="fa fa-opencart"></i>
                      </a>
                    </div>
                  </div>
                  <div class="product-info">
                    <h4 class="title">
                      <a href="productDetail.php?id=<?php echo $cat['id']; ?>">
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