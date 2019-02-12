<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Make or dream come true</title>
    <link rel="stylesheet" href="/css/productList.css">
    <script src="/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php
include_once 'layouts/header.php'; ?>
<div class="wrapper">
    <main class="d-flex">
        <div class="container cart-filter">
            <div class="row">
                <div class="col-4 col-sm-10">Shop by Category</div>
                <div class="w-100"></div>
                <nav class="navbar navbar-light justify-conten-between">
                    <ul class="navbar-nav">
                        <div class="list-group ">
                            <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                            <a href="#" class="list-group-item list-group-item-action">User Management</a>
                            <a href="#" class="list-group-item list-group-item-action">Used</a>
                            <a href="#" class="list-group-item list-group-item-action">User Management</a>
                            <a href="#" class="list-group-item list-group-item-action">Used</a>
                            <a href="#" class="list-group-item list-group-item-action">User Management</a>
                            <a href="#" class="list-group-item list-group-item-action">Used</a>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container products ml-4">
            <div class="row mt-4">
                <?php foreach ($data as $product) { ?>
                    <div class="col-sm-4 mb-4 mt-4">
                        <div class="row">
                            <a href="http://techon/product/<?php echo $product->getId(). "/" . $product->getShortTitle() ?>">
                                <img src="<?=$product->getImage()?>" width="200px" height="200px">
                                <div class="w-100"></div>
                                <div class="col-4 col-sm-8"><?=$product->getTitle()?></div>
                                <div class="w-100"></div>
                                <div class="col-4 col-sm-10 reviews">Reviews:<?=$product->getViewed()?></div>
                                <div class="w-100"></div>
                                <div class="price col-6 col-sm-3 mt-2"><?=$product->getPrice()/100?>$</div>
                                <div class="w-100"></div>
                                <div class="col-4 col-sm-10 free-shipping mt-2">2-day shipping</div>
                                <div class="w-100"></div>
                                <div class="col-4 col-sm-10 free-pickup">Free pickup today</div>
                                <div class="w-100"></div>
                                <button type="button" class="btn mt-2 ml-2 btn-outline-secondary btn-sm cart-btn">Add to
                                    cart
                                </button>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <?php include_once('layouts/footer.php'); ?>
</div>
</body>
</html>