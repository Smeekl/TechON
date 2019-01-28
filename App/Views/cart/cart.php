<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | </title>
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/cart.css">
    <script src="../../../js/cart.js"></script>
</head>
<body>
<?php include_once('layouts/header.php');?>
    <div class="row">
        <div class="col-2 bg-light text-black">
            <div class='sidebar'>
                <h3 class="mt-4">Menu</h3>
                <hr class="my-4">
                <ul class="nav nav-tabs nav-stacked d-inline-block left-nav">
                    <li><img src="https://img.icons8.com/office/30/000000/user.png"><a class="ml-2" href='#'>Profile</a></li>
                    <hr class="my-2">
                    <li><img src="https://img.icons8.com/office/30/000000/shopping-cart.png"><a class="ml-2" href='#'>My Cart</a></li>
                    <hr class="my-2">
                    <li><img src="https://img.icons8.com/office/30/000000/check.png"><a class="ml-2" href='#'>My orders</a></li>
                    <hr class="my-2">
                    <li><img src="https://img.icons8.com/office/30/000000/export.png"><a class="ml-2" href='#'>Log Out</a></li>
                </ul>
            </div>
        </div>
        <div class="col-10">
            <div class="row d-inline">
                <div class="col cart-elements">
                    <h1 class="display-4 mt-4 total-amount">Products in cart:</h1>
                    <hr class="my-4">
                    <div class="row cart-product justify-content-between">
                        <div class="col-sm-2 product-img">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="col-sm">
                                        <div class="cart-img">
                                            <img width="120px" height="120px" src="<?=$data[2][$key]['image'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 product-about">
                            <div class="row">
                                <div class="col">
                                    <div class="col-sm product-name"><a href="http://techon/product/<?php echo $data[$key]['id'] . "/" . $data[$key]['short_title'] ?>"><?=$data[2][$key]['title'];?></a></div>
                                </div>
                                <div class="col">
                                    <div class="col-sm"><strong class="about-price"><?=$data[2][$key]['price']/100 ."$";?></strong></div>
                                </div>
                                <div class="col pt-2">
                                    <div class="col"><span class="seller">Seller:</span><br>
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
                                <div class="col-sm total-price">
                                    123
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
                                            <img width="120px" height="120px" src="<?=$data[2][$key]['image'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 product-about">
                            <div class="row">
                                <div class="col">
                                    <div class="col-sm product-name"><a href="http://techon/product/<?php echo $data[$key]['id'] . "/" . $data[$key]['short_title'] ?>"><?=$data[2][$key]['title'];?></a></div>
                                </div>
                                <div class="col">
                                    <div class="col-sm"><strong class="about-price"><?=$data[2][$key]['price']/100 ."$";?></strong></div>
                                </div>
                                <div class="col pt-2">
                                    <div class="col"><span class="seller">Seller:</span><br>
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
                                <div class="col-sm total-price">
                                    123
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
                                            <img width="120px" height="120px" src="<?=$data[2][$key]['image'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 product-about">
                            <div class="row">
                                <div class="col">
                                    <div class="col-sm product-name"><a href="http://techon/product/<?php echo $data[$key]['id'] . "/" . $data[$key]['short_title'] ?>"><?=$data[2][$key]['title'];?></a></div>
                                </div>
                                <div class="col">
                                    <div class="col-sm"><strong class="about-price"><?=$data[2][$key]['price']/100 ."$";?></strong></div>
                                </div>
                                <div class="col pt-2">
                                    <div class="col"><span class="seller">Seller:</span><br>
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
                                <div class="col-sm total-price">
                                    123
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
                                            <img width="120px" height="120px" src="<?=$data[2][$key]['image'];?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 product-about">
                            <div class="row">
                                <div class="col">
                                    <div class="col-sm product-name"><a href="http://techon/product/<?php echo $data[$key]['id'] . "/" . $data[$key]['short_title'] ?>"><?=$data[2][$key]['title'];?></a></div>
                                </div>
                                <div class="col">
                                    <div class="col-sm"><strong class="about-price"><?=$data[2][$key]['price']/100 ."$";?></strong></div>
                                </div>
                                <div class="col pt-2">
                                    <div class="col"><span class="seller">Seller:</span><br>
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
                                <div class="col-sm total-price">
                                    123
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col cart-elements">
                    <h1 class="display-4 text-right total-amount">Total amount: 0</h1>
                </div>
                <div class="col d-flex justify-content-end cart-elements    ">
                    <button type="button" class="btn btn-light"><i class="fas fa-shopping-cart size-2 pr-2"></i>Check Out</button>
                </div>
            </div>
        </div>
    </div>
<?php include_once('layouts/footer.php');?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>