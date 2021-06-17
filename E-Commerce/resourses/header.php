<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/design.css">
    <link rel="stylesheet" href="./assets/css/mdb.min.css">
    <title>Rexlan</title>
</head>

<?php

if (!isset($_SESSION["id"])) {
    $headerBtns = '<button class="btn btn-primary mx-1" type="button" data-mdb-toggle="modal" data-mdb-target="#loginModal" id="login">Login</button>' .
        '<button class="btn btn-success mx-1" type="button" data-mdb-toggle=modal data-mdb-target="#loginModal" id="register">Register</button>';
} else {
    $headerBtns =
        '
        	<button type="submit" name="cart" type="button" class="btn btn-outline-info mx-1">Cart</button>
            <button type="submit" name="logout" type="button" class="btn btn-outline-danger mx-1">Logout</button>
         ';
}

$offerBox = '
    <div class="weOffer container">
        <img src="./assets/img/logos/eye.webp" alt="eye">
        <p class="fs-6">Test before you pay</p>
        <img src="./assets/img/logos/check.webp" alt="checkmark">
        <p lass="fs-6">All products are in stock</p>
        <img src="./assets/img/logos/truck.webp" alt="truck">
        <p lass="fs-6">Free delivery ofer 100$</p>
        <img src="./assets/img/logos/exchange.webp" alt="exchange">
        <p lass="fs-6">30 Days free return</p>
    </div>
';

?>


<!-- Navbar -->
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="../index.php">
            <img class='main-logo' src="./assets/img/logos/rexlan_logo.webp" alt="Rexlan logo">
            <img class='main-logo-mobile' src="./assets/img/logos/main_logo.webp" alt="Rexlan logo">
        </a>

        <form method=get>
            <button class="btn likes likePage btn-outline-danger">
                <img class=likePage height="18px" src="./assets/img/logos/heart.webp" alt='like' />
            </button>
            <input type=hidden id='likedPage' name=like value=''>
            <?php
            echo $headerBtns;
            ?>
        </form>

    </div>
</nav>
<!-- Navbar -->


<!-- Sign up Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginLabel">Sign up</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>


<?php echo @$loginAlert; ?>