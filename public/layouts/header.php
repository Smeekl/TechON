<?php
$model = new \Models\UserModel();
$model->isVerify($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="/js/search.js"></script>
    <link rel="stylesheet" href="/css/header.css">
    <meta charset="UTF-8">
</head>
<header id="header-dm">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <div class="logo justify-   content-start">
            <a href="http://techon" class="navbar-brand mr-sm-1 text-logo">TechON
                <img src="/img/lamp.png" class="rounded float-left" alt="На главную"></a>
        </div>
        <form class="form-inline justify-content-between">
            <div class="search">
                <input class="form-control mr-sm-4 search-inp" id="#searchInput" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="search-res">

                </div>
            </div>
            <button class="btn bat btn-outline-success my-2 my-sm-0" onclick="Search()" type="button">Search</button>
            <div class="location-sign-in">
                <?php if (!$_SESSION['isAuth'] || (!$_SESSION['security_result'])) { ?>
                    <a href="http://techon/authentication" class="ml-4 mr-2"><img
                                src="https://img.icons8.com/windows/32/000000/gender-neutral-user.png"><span
                                class="dashed-sign-in">Sign In</span></a>
                <?php } else { ?>
                    <div class="dropdown ml-4 mr-2">
                        <a class="dropdown-header" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="https://img.icons8.com/windows/32/000000/gender-neutral-user.png"><span
                                    class="dashed-sign-in">Hello, <?= $_SESSION['user_fname'] ?></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="http://techon/profile">Profile</a>
                            <a class="dropdown-item" href="http://techon/cart">Cart</a>
                            <a class="dropdown-item" href="http://techon/orders">Order</a>
                            <a class="dropdown-item" href="http://techon/logout">Sign Out</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="http://techon/cart" class="ml-4 mr-2"><img
                        src="https://img.icons8.com/windows/30/000000/shopping-cart.png"><span class="dashed-location">Cart</span></a>
        </form>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-conten-between">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown9" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Deals
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">TV Deals</a>
                        <a class="dropdown-item" href="#">Computers</a>
                        <a class="dropdown-item" href="#">Cell phones</a>
                        <a class="dropdown-item" href="#">Cameras & Camcorders</a>
                        <a class="dropdown-item" href="#">Portable Audio</a>
                        <a class="dropdown-item" href="#">Smart Home</a>
                        <a class="dropdown-item" href="#">Printers & Ink</a>
                        <a class="dropdown-item" href="#">Wearable Technology</a>
                        <a class="dropdown-item" href="#">Video Games</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown8" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TV Deals
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown7" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Computers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown6" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cell phones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cameras & Camcorders
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Portable Audio
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                        <a class="dropdown-item" href="#">lorem</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Smart Home
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Works with Google</a>
                        <a class="dropdown-item" href="#">Cameras & Security</a>
                        <a class="dropdown-item" href="#">Smart Energy & Lighting</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Printers & Ink
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Printers</a>
                        <a class="dropdown-item" href="#">Printer Ink</a>
                        <a class="dropdown-item" href="#">Printer Toner</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Wearable Technology
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Firtness Tracker</a>
                        <a class="dropdown-item" href="#">Aplle Watch</a>
                        <a class="dropdown-item" href="#">Samsung Gear</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Video Games
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Xbox</a>
                        <a class="dropdown-item" href="#">PS4</a>
                        <a class="dropdown-item" href="#">Nintendo Switch</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
</html>