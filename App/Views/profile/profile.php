<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    <script src="js/cart.js"></script>
</head>
<body>
<?php include_once('layouts/header.php'); ?>
<div class="row">
    <div class="col-2 bg-light text-black">
        <div class='sidebar'>
            <h3 class="mt-4">Menu</h3>
            <hr class="my-4">
            <ul class="nav nav-tabs nav-stacked d-inline-block left-nav">
                <li><img src="https://img.icons8.com/office/30/000000/user.png"><a class="ml-2" href='http://techon/profile'>Profile</a>
                </li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/shopping-cart.png"><a class="ml-2" href='http://techon/cart'>My
                        Cart</a></li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/check.png"><a class="ml-2" href='#'>My orders</a>
                </li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/export.png"><a class="ml-2" href='http://techon/logout'>Log Out</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-10">
        <div class="row ml-4 mt-4">
            <h1 class="display-3">Your profile</h1>
        </div>
        <hr class="my-2">
        <div class="row d-inline">
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">First name:</div>
                    <div class="col-3">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                                   aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div><!--First name-->
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">Second name:</div>
                    <div class="col-3">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Second name" aria-label="Second name"
                                   aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div><!--Second name-->
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">Last name:</div>
                    <div class="col-3">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                                   aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div><!--Last name-->
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">Email:</div>
                    <div class="col-3">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="example@ex.com"
                                   aria-label="example@ex.com" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div><!--Email-->
        </div>
        <hr class="my-4">
        <button type="button" class="btn btn-light mb-2 mt-2"><img class="mr-2" src="https://img.icons8.com/ios-glyphs/30/000000/save.png">Save changes</button>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>