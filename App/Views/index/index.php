<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="http://localhost/"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>TechOn | Make your dream come true</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once('layouts/header.php'); ?>
<div class="wrapper">
    <main>
        <div class="row d-inline justify-content-between">
            <a href="show" class="dashing-deals">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm dashing-deals">
                            <img class="dashing-deals" width="900px"
                                 src="//i5.walmartimages.com/dfw/4ff9c6c9-7a3c/k2-_73cacff5-6ba8-46c6-86fa-35f312017668.v1.jpg?odnWidth=912&odnHeight=500&odnBg=ffffff">
                        </div>
                        <div class="col-sm dashing-deals">
                            <div class="row d-flex last">
                                <div class="col-sm"><img class="gift-guide" src="img/gift_guide.png"/></div>
                                <div class="col-sm"><span class="dashing-deals-label">Shop by interest & find the perfect presents for all</span>
                                </div>
                                <div class="col-sm">
                                    <button type="button" class="btn btn-outline-light">Shop All</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-sm something-for-everyone-label">
                <span class="sme-label">Something for everyone</span>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <div class="row mt-4 something-for-everyone">
                    <?php foreach ($data['categories'] as $category) { ?>
                        <div class="col-sm d-flex mr-4 ml-4">
                            <div class="d-inline align-self-start">
                                <p class="text-center"><?= $category->getTitle() ?></p>
                                <img src="<?= $category->getImage() ?>">
                            </div>
                        </div>
                    <?php } ?>
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
</div>
<?php include_once('layouts/footer.php'); ?>
</body>
</html>