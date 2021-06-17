<?php

require_once("../../init.php");

if (isset($_POST["deleteItem"])) {
    $query = "DELETE FROM cart WHERE 
                    productID=(SELECT id FROM products WHERE thumbnail='" . mysqli_real_escape_string($db, $_POST["deleteItem"]) . "')
                    LIMIT 1";
    $db->query($query);
} else if (isset($_POST["thumbnail"])) {
    $query = "UPDATE cart SET quantity='" . mysqli_real_escape_string($db, $_POST["quantity"]) . "' 
                    WHERE productID=(SELECT id FROM products WHERE thumbnail='" . mysqli_real_escape_string($db, $_POST["thumbnail"]) . "')";
    $db->query($query);
} else if (isset($_POST["flushCart"])) {
    $query = "DELETE FROM cart WHERE userID='" . mysqli_real_escape_string($db, $_SESSION["id"]) . "'";
    $db->query($query);
}
