<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Make or dream come true</title>
    <link rel="stylesheet" href="css/productList.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
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
                <nav class="navbar navbar-light bg-light justify-conten-between">
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                            <a href="show/cheap" class="sort">Sort By Lowest Price</a>
                        </li>
                        <li class="navbar-item">
                            <a href="show/expensive" class="sort">Sort By Highest Price</a>
                        </li>
                        <li class="navbar-item">
                            <a href="show/expensive" class="sort">Sort By Highest Price</a>
                        </li>
                        <li class="navbar-item">
                            <a href="show/expensive" class="sort">Sort By Highest Price</a>
                        </li>
                        <li class="navbar-item">
                            <a href="show/expensive" class="sort">Sort By Highest Price</a>
                        </li>
                        <li class="navbar-item">
                            <a href="show/expensive" class="sort">Sort By Highest Price</a>
                        </li>
                        <li class="navbar-item">
                            <a href="show/expensive" class="sort">Sort By Highest Price</a>
                        </li>
                        <li class="navbar-item">
                            <a href="show/expensive" class="sort">Sort By Highest Price</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container products ml-4">
            <div class="row mt-4">
                <?php
                foreach ($data as $key => $value) { ?>
                    <div class="col-sm-4 mb-4 mt-4">
                        <div class="row">
                            <a href="http://techon/product/<?php echo $data[$key]['id'] . "/" . $data[$key]['short_title'] ?>">
                                <img src="<?php echo $data[$key]['image'] ?>" width="200px" height="200px">
                                <div class="w-100"></div>
                                <div class="col-4 col-sm-8"><?php echo $data[$key]['title']; ?></div>
                                <div class="w-100"></div>
                                <div class="col-4 col-sm-10 reviews">Reviews:<?php echo $data[$key]['viewed']; ?></div>
                                <div class="w-100"></div>
                                <div class="price col-6 col-sm-3 mt-2"><?php echo $data[$key]['price'] / 100; ?>$</div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
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