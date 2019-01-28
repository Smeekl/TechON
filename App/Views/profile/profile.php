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
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/cart.css">
    <script src="../../../js/cart.js"></script>
</head>
<body>
<?php include_once('layouts/header.php'); ?>
<div class="row">
    <div class="col-2 bg-light text-black">
        <div class='sidebar'>
            <h3 class="mt-4">Menu</h3>
            <hr class="my-4">
            <ul class="nav nav-tabs nav-stacked d-inline-block left-nav">
                <li><img src="https://img.icons8.com/office/30/000000/user.png"><a class="ml-2" href='#'>Profile</a>
                </li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/shopping-cart.png"><a class="ml-2" href='#'>My
                        Cart</a></li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/check.png"><a class="ml-2" href='#'>My orders</a>
                </li>
                <hr class="my-2">
                <li><img src="https://img.icons8.com/office/30/000000/export.png"><a class="ml-2" href='#'>Log Out</a>
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
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">Phone:</div>
                    <div class="col-3">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number"
                                   aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div><!--Phone-->
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">Delivery address:</div>
                    <div class="col-3">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="" aria-label=""
                                   aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div><!--Delivery-->
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">Date of Birthday:</div>
                    <div class="col-6 d-flex">
                        <div class="col-2 pl-2">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="day"
                                       aria-label="day" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="year"
                                       aria-label="year" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Birth-->
            <div class="col mb-4">
                <div class="row d-flex align-items-start">
                    <div class="col-2 pt-2">Gender:</div>
                    <div class="col-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                   value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                </div>
            </div><!--Gender-->
        </div>
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