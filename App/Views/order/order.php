<!DOCTYPE html>
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Cart</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/cart.css">
    <script src="/js/cart.js"></script>
</head>
<body>
<?php include_once('layouts/header.php'); ?>
<div class="row">
    <div class="col-2 bg-light text-black">
        <div class='sidebar'>
            <h3 class="mt-4">Menu</h3>
            <hr class="my-4">
            <ul class="nav nav-tabs nav-stacked d-inline-block left-nav">
                <li><img src="https://img.icons8.com/office/30/000000/user.png"><a class="ml-2"
                                                                                   href='http://techon/profile'>Profile</a>
                </li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/shopping-cart.png"><a class="ml-2"
                                                                                            href='http://techon/cart'>My
                        Cart</a></li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/check.png"><a class="ml-2" href='#'>My orders</a>
                </li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/export.png"><a class="ml-2"
                                                                                     href='http://techon/logout'>Log
                        Out</a></li>
            </ul>
        </div>
    </div>
    <div class="col-10">
        <div class="row d-inline">
            <div class="col cart-elements">
                <h1 class="display-4 mt-4 total-amount">Orders: <?= $_SESSION['products_in_cart'] ?></h1>
                <hr class="my-4">
                <div class="order">
                    <?php foreach ($data as $order) {?>
                    <div class="container d-flex">
                        <div class="col-8 d-inline">
                            <div class="col">Order ID - #<?=$order->getOrderId()?></div>
                            <div class="col">
                                <?php foreach ($order->getProducts() as $product) {?>
                                <div class="row cart-product justify-content-between">
                                    <div class="col-2 product-img">
                                        <div class="cart-img">
                                            <img width="120px" height="120px"
                                                 src="<?= $product->getImage(); ?>">
                                        </div>
                                    </div>
                                    <div class="col-10 product-about">
                                        <div class="row d-inline">
                                            <div class="col mb-4">
                                                <div class="col">
                                                    <div class="col-sm product-name text-left">
                                                        <a class="cart-product" href="http://techon/product/<?php echo $product->getId(). "/" . $product->getShortTitle()?>"><?=$product->getTitle();?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row prices d-inline-flex">
                                                <div class="col">
                                                    <div class="row d-flex">
                                                        <div class="col">
                                                            <div class="col-sm">Qty:</div>
                                                        </div>
                                                        <div class="col">
                                                            <?=$product->getQuantity()?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col ml-3 d-flex">
                                                <div class="col"><span class="seller">Seller:</span><br>
                                                    <img width="100px" height="40px"
                                                         src="/img/walmart.png   "
                                                         alt="">
                                                </div>
                                                <div class="col-sm ml-4"><strong`
                                                    data-price="<?=$product->getPrice()?>"
                                                    class="about-price">Price : <?=$product->getPrice() / 100 ?>$</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row d-inline">
                                <div class="col"><h6>Total price:</h6></div>
                                <hr class="my-4">
                                <div class="price mb-2">Subtotal: <?=$order->getTotalPrice()/100?>$</div>
                                <div class="shipping mb-2">Shipping: 0$</div>
                                <hr class="my-4">
                                <div class="col cart-elements">
                                    <h1 class="display-4 text-right total-amount">Total amount: <?=$order->getTotalPrice()/100?>$
                                    </h1>
                                </div>
                                <div class="col d-flex justify-content-end cart-elements    ">
                                    <button type="button" class="btn btn-light"><i
                                                class="fas fa-shopping-cart size-2 pr-2"></i>Check
                                        Out
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        <hr class="my-4">
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
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