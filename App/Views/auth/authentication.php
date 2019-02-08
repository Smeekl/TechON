<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Make or dream come true</title>
    <link rel="stylesheet" href="/css/auth.css">
    <script src="/js/authentication.js"></script>
</head>
<body>
<?php include_once('layouts/header.php'); ?>
<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="https://img.icons8.com/ios/100/000000/guest-male.png"/>
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="" method="post" id="authForm">
            <span id="reauth-email" class="reauth-email"></span>
            <input name="email" type="email" id="inputEmail" class="form-control"
                   placeholder="Email address" required autofocus>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password"
                   required>
            <button class="btn btn-lg btn-primary btn-block btn-signin auth-btn" type="button" onclick="Authentication()" value="login"
                    >Sign in
            </button>
        </form>
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
        <a href="http://techon/registration" class="join-us">
            Still don't have account? Join Us!
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