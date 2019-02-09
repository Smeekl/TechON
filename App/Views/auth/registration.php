<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Registration</title>
    <link rel="stylesheet" href="/css/auth.css">
    <script src="/js/registration.js"></script>
</head>
<body>
<?php include_once('layouts/header.php'); ?>
<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="https://img.icons8.com/ios/100/000000/add-user-male.png"/>
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="" method="post" id="authForm">
            <span id="reauth-email" class="reauth-email"></span>
            <input name="email" type="email" id="inputEmail" class="form-control"
                   placeholder="Email address" required autofocus>
            <input name="password" type="password" id="password" class="form-control" placeholder="Password"
                   required>
            <input name="confirm_password" type="password" id="confirm_password" class="form-control" placeholder="Confirm password"
                   required>
            <span class="password-check" id='message'></span>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" value="login" onclick="AjaxRegister()"
            >Sign Up
            </button>
        </form>
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
</div>
<?php include_once('layouts/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>