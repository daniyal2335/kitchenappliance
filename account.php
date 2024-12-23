<?php 
include('query.php');
include('Components/header.php');
?>

<main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="assets/img/about/ban.webp">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">Sign up</h2>
              <div class="bread-crumbs">
                <a href="index.html">Home
                  <span class="breadcrumb-sep">/</span>
                </a>
                <span class="active">Sign UP</span>
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
              <form class="login-form-wrapper" id="signUpForm" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="section-title text-center">
                      <h2 class="title">Sign up</h2>
                      <p>Please Sign up using account details below.</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" id="sName" name="sName" type="text" placeholder="UserName" required>
                          <small id="nameError" style="color: red; display: none;">Name should not contain numbers!</small>
                        </div>
                        <div class="form-group">
                          <input class="form-control" name="sEmail" id="sEmail" type="email" placeholder="Email" required>
                          <small id="emailError" style="color: red; display: none;">Invalid or duplicate email!</small>
                        </div>
                       
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                        <input class="form-control" name="sPassword" id="sPassword" type="password" placeholder="Password" required>
                        <small id="passwordError" style="color: red; display: none;">Password must contain at least one capital letter and a number!</small>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0 form-group-info">
                          <button class="btn btn-theme" name="signUp" type="submit">SIGN UP</button>
                          <a class="btn-forgot" href="#">Forgot your password?</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <a class="btn-create" href="login.php">Login</a>
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



<script>
document.getElementById('sName').addEventListener('input', function() {
    let nameField = document.getElementById('sName');
    let nameValue = nameField.value.trim();
    let nameError = document.getElementById('nameError');

    if (nameValue === "") {
        nameField.style.borderColor = "red"; 
        nameError.style.display = "none"; 
    } else if (/[^a-zA-Z\s]/.test(nameValue)) {  
        nameField.style.borderColor = "red";
        nameError.style.display = "block";  
    } else {
        nameField.style.borderColor = "green"; 
        nameError.style.display = "none"; 
    }
});

document.getElementById('sEmail').addEventListener('input', function() {
    let emailField = document.getElementById('sEmail');
    let emailValue = emailField.value.trim();
    let emailError = document.getElementById('emailError');

    if (emailValue === "") {
        emailField.style.borderColor = "red"; 
        emailError.style.display = "none";
    } else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(emailValue)) {  
        emailField.style.borderColor = "red";
        emailError.style.display = "block"; 
    } else {

        emailField.style.borderColor = "green"; 
        emailError.style.display = "none"; 
    }
});

document.getElementById('sPassword').addEventListener('input', function() {
    let passwordField = document.getElementById('sPassword');
    let passwordValue = passwordField.value.trim();
    let passwordError = document.getElementById('passwordError');

    if (passwordValue === "") {
        passwordField.style.borderColor = "red"; 
        passwordError.style.display = "none"; 
    } else if (!/(?=.*[A-Z])(?=.*\d)/.test(passwordValue)) {  
        passwordField.style.borderColor = "red";
        passwordError.style.display = "block";  
    } else {
        passwordField.style.borderColor = "green";
        passwordError.style.display = "none"; 
    }
});
</script>



<?php
include('Components/footer.php');
?>
