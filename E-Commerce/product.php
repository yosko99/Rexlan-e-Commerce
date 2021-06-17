<?php
require_once("resourses/functions.php");

if (isset($_SESSION["product"])) {

        require_once("logic/products/importItem.php");

        require_once("resourses/header.php");

        require_once("resourses/product/main.php");

        require_once("resourses/footer.php");
}
