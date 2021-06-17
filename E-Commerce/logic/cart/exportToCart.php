<?php


function exportToCart()
{
    $items = "";

    $query = "SELECT productID,quantity from cart WHERE userID='" . mysqli_real_escape_string($GLOBALS["db"], $_SESSION["id"]) . "'";
    $res = $GLOBALS["db"]->query($query);

    if(!mysqli_num_rows($res)){
        echo "<div class='container py-3 d-flex justify-content-center'>
                <button class='btn btn-light fs-6  disabled'>
                    Your cart is empty.
                </button>
            </div>";
    }else{
        $items.="<div style='overflow-x:auto;'>        
        <table class='table container'>
            <thead class='table-light'>
                <tr>
                    <th></th>
                    <th scope='col' class='text-uppercase'>Product</th>
                    <th></th>
                    <th scope='col' class='text-uppercase'>Price</th>
                    <th scope='col' class='text-uppercase'>Quantity</th>
                    <th scope='col' class='text-uppercase'>Total</th>
                </tr>
            </thead>
            <tbody id='cartBody'>";

        while ($row = $res->fetch_array()) {
            $query = "SELECT * FROM products WHERE id='" . mysqli_real_escape_string($GLOBALS["db"], $row["productID"]) . "'";
            $item = $GLOBALS["db"]->query($query)->fetch_array();
    
            $items .= "<tr class='tableRow'>
                            <td scope='row'>
                                <div class='removeItem'>
                                    <img src='./assets/img/logos/x.webp' alt=remove>
                                </div>
                            </td>
                            <td class='fs-6'>" . $item["name"] . "</td>
                            <td><img class='tableThumbnail' src='" . $item["thumbnail"] . "' alt='" . $item["name"] . "'></img></td>
                            <td class='text-success price fs-6'>" . $item["price"] . " $</td>
                      <td>
                      <div class=changeQuantity>
                        <button class='btn btn-light text-dark decrementQuantity'>-</button>
                        <button class='btn btn-outline-light quantity text-dark fs-6' value='" . $row["quantity"] . "'>". $row["quantity"] . "</button>
                        <button class='btn btn-light text-dark incrementQuantity'>+</button>
                      </div>
                      </td>
                      <td class='text-success totalItem fs-6'>" . $item["price"] * $row["quantity"] . " $</td>
                  </tr>";
        }
    
        $items.="</tbody></table></div>";
        return $items;
    }

}


