<?php

require_once("../../init.php");


if (isset($_POST["itemThumbnail"])) {


    $query = "SELECT userID,productID FROM cart WHERE userID='".mysqli_real_escape_string($db,$_SESSION["id"])."' 
                and productID=(SELECT id FROM products WHERE thumbnail='" . mysqli_real_escape_string($db, $_POST['itemThumbnail']) . "')";
    $res = $db->query($query)->fetch_array();

    if (!$res){
        $query = "INSERT INTO cart (userID,productID,quantity) 
                    VALUES (
                        (SELECT id FROM users WHERE id='".mysqli_real_escape_string($db,$_SESSION['id'])."'),
                        (SELECT id FROM products WHERE thumbnail='".mysqli_real_escape_string($db,$_POST['itemThumbnail'])."')
                        ,1)";

        $db->query($query);
    }
    else {
        $query = "UPDATE cart SET quantity=quantity+1 
                    WHERE userID='".mysqli_real_escape_string($db,$res["userID"])."'
                    AND productID='".mysqli_real_escape_string($db,$res["productID"])."'";

        $db->query($query);
    }


}
