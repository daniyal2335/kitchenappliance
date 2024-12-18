<?php
include('query.php');
include('Components/header.php');
?>
  <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="assets/img/photos/bg-page-title.webp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">Account</h2>
              <div class="bread-crumbs">
                <a href="index.html">Home
                  <span class="breadcrumb-sep">/</span>
                </a>
                <span class="active">Account</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Contact Area ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="login-form">
              <form class="login-form-wrapper" id="login-form" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="section-title text-center">
                      <h2 class="title">Login</h2>
                      <p>Please login using account detail bellow.</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input name="uEmail" class="form-control" type="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <input name="uPassword" class="form-control" type="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0 form-group-info">
                          <button name="login" class="btn btn-theme" type="submit">SIGN IN</button>
                          <a class="btn-forgot" href="#">Forgot your password?</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <a class="btn-create" href="#">Create account?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- Message Notification -->
            <div class="form-message"></div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area ==-->
  </main>

 <?php
 include('Components/footer.php');
 ?>