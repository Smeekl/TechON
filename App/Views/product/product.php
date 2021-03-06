<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | <?=$data['product']->getTitle()?></title>
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/slider.css">
    <script src="/js/cart.js"></script>
</head>
<body>
<?php include_once('layouts/header.php'); ?>
<main>
    <h5 class="pt-4 pl-4 category"><a href="http://techon/show">Category/</a><a
                href="http://techon/show">Category/</a><?= $data['product']->getTitle() ?></h5>
    <div class="container pt-4">
        <div class="row">
            <div class="col-sm category">
                <div class="bzoom_wrap">
                    <ul id="bzoom">
                        <?php foreach ($data['product']->getImages() as $image) {
                            ?>
                            <li>
                                <img class="bzoom_thumb_image" src="<?=$image?>">
                                <img class="bzoom_big_image" src="<?=$image?>">
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm">
                <div class="row d-inline-block product">
                    <div class="col-sm pb-2 label">
                        <h2><?= $data['product']->getTitle(); ?><h2></h2>
                    </div>
                    <div class="col-sm pb-4 info">
                        <div class="row">
                            <div class="col-sm"><?= $data['product']->getVendorName() ?></div>
                            <div class="col-sm reviews">Reviews:<?= $data['product']->getViewed() ?></div>
                            <div class="col-sm">TechOn #<?= $data['product']->getId() ?></div>
                        </div>
                    </div>
                    <div class="col-sm price pb-4"><?= $data['product']->getPrice() / 100 ?>$</div>
                    <div class="col-sm shipping pb-4">x
                        <span class="free-shiping">
                            Free shipping
                        </span>
                        <br>
                        <div class="arrives">
                            Arrives by <?= date("l,M j", strtotime("+4days")); ?>
                            <a href="" class="options">Options
                            </a>
                        </div>
                    </div>
                    <div class="col-sm pickup pb-4">
                        <span class="free-pickup">
                            Free pickup <?= date("l,M j", strtotime("+4days")); ?>
                        </span>
                        <br>
                        <div class="ships-to">
                            Ships to your shop
                            <a href="" class="options">Options
                            </a>
                        </div>
                    </div>
                    <div class="col-sm buy">
                        <button type="button" class="btn btn-success" data-toggle="modal"
                                onclick="addToCart(<?= $data['product']->getId() ?>)" data-target=".bd-example-modal-lg">Add to
                            Cart
                        </button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                             aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel"><i
                                                    class="fas fa-check size-2 pr-2"></i>You just added 1 item(<span
                                                    id="qt-value"><?= $_SESSION['products_in_cart'] ?></span> total)
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Cart items-->
                                        <?php foreach ($data['cart'] as $product) { ?>
                                            <div class="row cart-product justify-content-between">
                                                <div class="col-2 product-img">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <div class="col-sm">
                                                                <div class="row d-inline">
                                                                    <div class="col">
                                                                        <div class="cart-img">
                                                                            <img width="120px" height="120px"
                                                                                 src="<?= $product->getImage(); ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-10 product-about">
                                                    <div class="row d-inline">
                                                        <div class="col mb-4">
                                                            <div class="col">
                                                                <div class="col-sm product-name text-left"><a
                                                                            class="cart-product"
                                                                            href="http://techon/product/<?php echo $product->getId() . "/" . $product->getShortTitle() ?>"><?= $product->getTitle(); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ml-1">
                                                            <div class="col">
                                                                <div class="col">
                                                                    <div class="col-sm"><strong
                                                                                class="about-price"><?= $product->getPrice() / 100 . "$"; ?></strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-flex">
                                                            </div>
                                                        </div>
                                                        <div class="col ml-3">
                                                            <div class="col"><span class="seller">Seller:</span><br>
                                                                <img width="100px" height="40px"
                                                                     src="../../../public/img/walmart.png" alt=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <!-- Cart items-->
                                        <?php } ?>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                                class="fas fa-arrow-left size-2 pr-2"></i>Continue Shopping
                                    </button>
                                    <a href="http://techon/cart">
                                        <button type="submit" onclick="goToCart()" class="btn btn-primary"><i
                                                    class="fas fa-shopping-cart size-2 pr-2"></i>Go to cart
                                        </button>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about pt-4 about-block">
            <div class="col-sm">
                <div class="row d-inline-block">
                    <div class="col-sm about-item pt-4 pb-4">
                        <h4>About this item</h4>
                    </div>
                    <hr class="my-4">
                    <div class="col-sm pb-4">
                        <p><strong>We aim to show you accurate product information</strong></p>
                        Manufacturers, suppliers and others provide what you see here, and we have not verified it.
                        <a href="#">See our disclaimer</a>
                        <br>
                        <br>
                        <?= $data['product']->getDescription()?>
                    </div>
                    <div class="col-sm mb-4">
                        <p><strong>We aim to show you accurate product information</strong></p>
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="/js/jqzoom.js"></script>
<script>
    $("#bzoom").zoom({
        zoom_area_width: 400,
        small_thumbs: <?=count($data['product']->getImages());?>
    });
</script>
<?php include_once('layouts/footer.php'); ?>
</body>
</html>