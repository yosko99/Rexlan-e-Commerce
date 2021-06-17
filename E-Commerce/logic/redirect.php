<?php

header("Cache-Control: max-age=2592000");


if (array_key_exists("logout", $_GET)) { // Signs out and redirects to main page
    unset($_SESSION["id"]);
    setcookie("id", '', time() - 60);
    header("Location: ./index.php");
} else if (array_key_exists("cart", $_GET)) { // Cart button
    header("Location: ./cart.php");
} else if (array_key_exists("like", $_GET)) { // Liked button
    $_SESSION["like"] = $_GET["like"];
    header("Location: ./like.php");
} else if (array_key_exists("product", $_GET)) { // Product page
    $_SESSION["product"] = $_GET["product"];
    header("Location: ./product.php");
}
