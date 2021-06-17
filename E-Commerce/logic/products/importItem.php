<?php

$tabNav = '';
$tabContent = '';
$info = '';

if (isset($_SESSION["product"])) {
    $query = "SELECT * FROM products WHERE thumbnail='" . mysqli_real_escape_string($db, $_SESSION["product"]) . "'";
    $res = $db->query($query)->fetch_array();
    $tabNav .= '<li class="nav-item py-1" role="presentation">
                    <a class="nav-link active" id="img-tab-1" data-mdb-toggle="tab" href="#tab-content-1" role="tab" aria-controls="img-tab-1" aria-selected="true">
                        <img src="' . $_SESSION["product"] . '" alt="' . $res["name"] . '">
                    </a>
                    </li>';

    $tabContent .= '<div class="tab-pane fade show active" class="tab-content" id="tab-content-1" role="tabpanel" aria-labelledby="tab-content-1">
                        <img class="activeContentImg" src="' . $_SESSION["product"] . '" alt="' . $res["name"] . '">
                    </div>';

    $info .= '<h1 class="display-6 title">' . $res["name"] . '</h1>
                <p class="fs-5 text-muted">Brand
                    <img class="px-1" src="assets/img/logos/' . $res["brand"] . '_logo.webp" height="20px" alt="' . $res["brand"] . '">
                </p>
                <p class="fs-4 text-success">' . $res["price"] . ' $</p>';

    $imgSrc = explode("/", $_SESSION["product"]);
    $imgSrc = explode(".", $imgSrc[4]);

    for ($i = 2; $i < 5; $i++) {
        $tabNav .= '<li class="nav-item py-1" role="presentation">
                        <a class="nav-link" id="img-tab-' . $i . '" data-mdb-toggle="tab" href="#tab-content-' . $i . '" role="tab" aria-controls="img-tab-' . $i . '" aria-selected="true">
                            <img src="./assets/img/products/' . $imgSrc[0] . '_' . ($i - 1) . '.webp" alt="' . $res["name"] . '">
                        </a>
                     </li>';

        $tabContent .= '<div class="tab-pane fade" id="tab-content-' . $i . '" role="tabpanel" aria-labelledby="tab-content-' . $i . '">
                                <img src="./assets/img/products/' . $imgSrc[0] . '_' . ($i - 1) . '.webp" alt="' . $res["name"] . '">
                            </div>';
    };

}
