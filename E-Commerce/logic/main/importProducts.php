<?php

function importProducts($query)
{

    $result = $GLOBALS["db"]->query($query);

    $products = "";
    while ($row = $result->fetch_array()) {
        $products .= '<div class="itemContainer"">
            
            <div class="item ' . $row["brand"] . '">
                <form class=productForm method=get>
                <input class=item type=hidden name=product value=' . $row["thumbnail"] . '>
                    <img class=thumbnail src="' . $row["thumbnail"] . '" alt=' . $row["name"] . ' />
                </form>
            </div>
            <br>
            <p class="fs-3">' . $row["name"] . '</p>
            <p class="fs-5">' . $row["price"] . '$</p>
            <div>
                <button class="btn btn-outline-danger float-right like mx-1">
                <img src="./assets/img/logos/like.webp" class=likeImg style="max-height:18px;" alt="like">
                </button> ';

        if (isset($_SESSION['id'])) {
            $products .= '<button type=submit class="btn btn-info addToCart">Add to Cart</button>';
        }

        $products .= '</div></div>';
    }

    return $products;
}
