<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Make or dream come true</title>
    <link rel="stylesheet" href="../../../css/product.css">
    <link rel="stylesheet" href="../../../css/slider.css">
</head>
<body>
<?php include_once('layouts/header.php');?>
<main>
    <h5 class="pt-4 pl-4 category"><a href="http://techon/show">Category/</a><a href="http://techon/show">Category/</a><?=$data[0]['title']?></h5>
    <div class="container pt-4">
        <div class="row">
            <div class="col-sm category">
                    <div class="bzoom_wrap">
                        <ul id="bzoom">
                            <?php
                            foreach($data as $key => $value) {?>
                            <li>
                                <img class="bzoom_thumb_image" src="<?=$data[1][$key]['image']?>">
                                <img class="bzoom_big_image" src="<?=$data[1][$key]['image']?>">
                            </li>
                            <?php }?>
                        </ul>
                    </div>
            </div>
            <div class="col-sm">
                <div class="row d-inline-block product">
                    <div class="col-sm pb-2 label">
                        <h2><?=$data[0]['title'];?><h2></h2>
                    </div>
                    <div class="col-sm pb-4 info">
                        <div class="row">
                            <div class="col-sm"><?=$data[0]['manufacturer_title']?></div>
                            <div class="col-sm reviews">Reviews:<?=$data[0]['reviews'];?></div>
                            <div class="col-sm">TechOn #<?=$data[0]['id'];?></div>
                        </div>
                    </div>
                    <div class="col-sm price pb-4"><?=$data[0]['price']/100;?>$</div>
                    <div class="col-sm shipping pb-4">
                        <span class="free-shiping">
                            Free shipping
                        </span>
                        <br>
                        <div class="arrives">
                            Arrives by <?=date("l,M j", strtotime("+4days")); ?>
                            <a href="" class="options">Options
                            </a>
                        </div>
                    </div>
                    <div class="col-sm pickup pb-4">
                        <span class="free-pickup">
                            Free pickup <?=date("l,M j", strtotime("+4days")); ?>
                        </span>
                        <br>
                        <div class="ships-to">
                            Ships to your shop
                            <a href="" class="options">Options
                            </a>
                        </div>
                    </div>
                    <div class="col-sm buy">
                        <div class="row d-inline-block mr-4">
                            <div class="col-sm quantity">Qty:</div>
                            <div class="col-sm">
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Add to Cart</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel"><i class="fas fa-check size-2 pr-2"></i>You just added 1 item(5 total)</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row cart-product justify-content-between">
                                            <div class="col-sm-2 product-img">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">
                                                            <div class="cart-img">
                                                                <img width="120px" height="120px" src="https://i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 product-about">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm product-name"><a href="#">Samsung Galaxy S7</a></div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="col-sm"><strong class="about-price">199.00$</strong></div>
                                                    </div>
                                                    <div class="col-sm pt-2">
                                                        <div class="col-sm"><span class="seller">Seller:</span><br>
                                                            <img width="100px" height="40px" src="../../../img/walmart.png" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-qty">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Qty: </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="input-group">
                                                            <select class="custom-select" id="inputGroupSelect01">
                                                                <option selected>1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-price">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Price:</div>
                                                    </div>
                                                    <div class="col-sm about-price">
                                                        $199.99
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row cart-product justify-content-between">
                                            <div class="col-sm-2 product-img">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">
                                                            <div class="cart-img">
                                                                <img width="120px" height="120px" src="https://i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 product-about">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm product-name"><a href="#">Samsung Galaxy S7</a></div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="col-sm"><strong class="about-price">199.00$</strong></div>
                                                    </div>
                                                    <div class="col-sm pt-2">
                                                        <div class="col-sm"><span class="seller">Seller:</span><br>
                                                            <img width="100px" height="40px" src="../../../img/walmart.png" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-qty">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Qty: </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="input-group">
                                                            <select class="custom-select" id="inputGroupSelect01">
                                                                <option selected>1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-price">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Price:</div>
                                                    </div>
                                                    <div class="col-sm about-price">
                                                        $199.99
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row cart-product justify-content-between">
                                            <div class="col-sm-2 product-img">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">
                                                            <div class="cart-img">
                                                                <img width="120px" height="120px" src="https://i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 product-about">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm product-name"><a href="#">Samsung Galaxy S7</a></div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="col-sm"><strong class="about-price">199.00$</strong></div>
                                                    </div>
                                                    <div class="col-sm pt-2">
                                                        <div class="col-sm"><span class="seller">Seller:</span><br>
                                                            <img width="100px" height="40px" src="../../../img/walmart.png" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-qty">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Qty: </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="input-group">
                                                            <select class="custom-select" id="inputGroupSelect01">
                                                                <option selected>1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-price">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Price:</div>
                                                    </div>
                                                    <div class="col-sm about-price">
                                                        $199.99
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row cart-product justify-content-between">
                                            <div class="col-sm-2 product-img">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">
                                                            <div class="cart-img">
                                                                <img width="120px" height="120px" src="https://i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 product-about">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm product-name"><a href="#">Samsung Galaxy S7</a></div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="col-sm"><strong class="about-price">199.00$</strong></div>
                                                    </div>
                                                    <div class="col-sm pt-2">
                                                        <div class="col-sm"><span class="seller">Seller:</span><br>
                                                            <img width="100px" height="40px" src="../../../img/walmart.png" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-qty">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Qty: </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="input-group">
                                                            <select class="custom-select" id="inputGroupSelect01">
                                                                <option selected>1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-price">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Price:</div>
                                                    </div>
                                                    <div class="col-sm about-price">
                                                        $199.99
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="row cart-product justify-content-between">
                                            <div class="col-sm-2 product-img">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">
                                                            <div class="cart-img">
                                                                <img width="120px" height="120px" src="https://i5.walmartimages.com/asr/6b9ce4ac-1c4a-4a80-9e90-42eeae1a2f6d_1.801041dc8b091f4cb780ff5c10661003.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 product-about">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm product-name"><a href="#">Samsung Galaxy S7</a></div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="col-sm"><strong class="about-price">199.00$</strong></div>
                                                    </div>
                                                    <div class="col-sm pt-2">
                                                        <div class="col-sm"><span class="seller">Seller:</span><br>
                                                            <img width="100px" height="40px" src="../../../img/walmart.png" alt=""></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-qty">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Qty: </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="input-group">
                                                            <select class="custom-select" id="inputGroupSelect01">
                                                                <option selected>1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2 product-price">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="col-sm">Price:</div>
                                                    </div>
                                                    <div class="col-sm about-price">
                                                        $199.99
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left size-2 pr-2"></i>Continue Shopping</button>
                                        <button type="button" class="btn btn-primary"><i class="fas fa-shopping-cart size-2 pr-2"></i>Check Out</button>
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
                        <?=$data[0]['description']?>
                    </div>
                    <div class="col-sm mb-4">
                        <p><strong>We aim to show you accurate product information</strong></p>
                        <ul><?php if(isset($data[0]['about'])){foreach ($data[0]['about'] as $value) {?>
                            <li><?=$value;?></li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="../../../js/jqzoom.js"></script>
<script>
    $("#bzoom").zoom({
        zoom_area_width: 350,
        small_thumbs: <?=count($data[1]);?>
    });
</script>
<?php include_once('layouts/footer.php');?>
</body>
</html>