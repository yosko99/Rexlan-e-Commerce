<?php
        require_once("resourses/functions.php");
        if (!isset($_SESSION["id"])) {
                header("Location: ./index.php");
        } else {
        require_once("resourses/header.php");

        require_once("logic/cart/exportToCart.php");

        require_once("resourses/cart/main.php");

        require_once("resourses/footer.php");

        }
