<?php
include('query.php');
include('Components/header.php');
?>
<main class="main-content site-wrapper-reveal">
    <section class="page-title-area" data-bg-img="assets/img/about/ban.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content text-center">
                        <h2 class="title text-white">Login</h2>
                        <div class="bread-crumbs">
                            <a href="index.html">Home
                                <span class="breadcrumb-sep">/</span>
                            </a>
                            <span class="active">Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                        <p>Please login using account details below.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="uEmail" name="uEmail" class="form-control" type="email" placeholder="Email" required>
                                                <span id="emailError" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-0">
                                                <input id="uPassword" name="uPassword" class="form-control" type="password" placeholder="Password" required>
                                                <span id="passwordError" style="color: red;"></span>
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
                                                <a class="btn-create" href="account.php">Create account?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include('Components/footer.php');
?>

<script>
// Real-time validation for email
document.getElementById('uEmail').addEventListener('input', function() {
    let emailField = document.getElementById('uEmail');
    let emailError = document.getElementById('emailError');
    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    if (emailField.value.trim() === "") {
        emailField.style.borderColor = "red";
        emailError.textContent = "Email is required.";
    } else if (!emailRegex.test(emailField.value)) {
        emailField.style.borderColor = "red";
        emailError.textContent = "Invalid email format.";
    } else {
        emailField.style.borderColor = "green";
        emailError.textContent = "";
    }
});

// Real-time validation for password
document.getElementById('uPassword').addEventListener('input', function() {
    let passwordField = document.getElementById('uPassword');
    let passwordError = document.getElementById('passwordError');
    
    if (passwordField.value.trim() === "") {
        passwordField.style.borderColor = "red";
        passwordError.textContent = "Password is required.";
    } else {
        passwordField.style.borderColor = "green";
        passwordError.textContent = "";
    }
});
</script>
