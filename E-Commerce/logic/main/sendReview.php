<?php

require_once("../../init.php");

function insert(){
    $date = date('Y-m-d H:i:s');

    $query = "INSERT INTO reviews (message,sentBy,date,emojiValue)
    VALUES ('" . mysqli_real_escape_string($GLOBALS['db'], $_POST["comment"]) . "','" . mysqli_real_escape_string($GLOBALS['db'], $_POST["commentName"]) . "',
    '" . mysqli_real_escape_string($GLOBALS['db'], $date) . "','" . mysqli_real_escape_string($GLOBALS['db'], $_POST["emojiValue"]) . "')";
    $GLOBALS['db']->query($query);
}

if (isset($_POST["comment"])) {
    $checkRowQuery = "SELECT id FROM reviews";
    $rowCheck = $db->query($checkRowQuery);

    if (mysqli_num_rows($rowCheck)>=9) {
        $lastReview = $rowCheck->fetch_array()[0];
        $delQuery = "DELETE FROM reviews WHERE id='" . mysqli_real_escape_string($db, $lastReview) . "' LIMIT 1";
        $db->query($delQuery);
        insert();
    } else {
        insert();
    }
}
