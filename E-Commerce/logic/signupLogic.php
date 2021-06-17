<?php

$loginAlert = ''; // Global alert;

if (isset($_POST["loginEmail"], $_POST["loginPassword"])) { // Login
    $query = "SELECT email FROM users WHERE email='" . mysqli_real_escape_string($db, $_POST['loginEmail']) . "'";
    $res = $db->query($query);

    if (!mysqli_num_rows($res)) $loginAlert = '<div class="alert alert-danger">User with entered email is not registered!</div>'; // Email not registered
    else {
        $query = "SELECT id,password FROM users WHERE email='" . mysqli_real_escape_string($db, $_POST["loginEmail"]) . "'";
        $res = $db->query($query)->fetch_array();
        if ($res["password"] == md5(md5($res['id']) . $_POST["loginPassword"])) {
            $_SESSION['id'] = $res['id']; // Success
            if (@$_POST["stayLogged"]) { // Cheks if stay logged is set and sets cookie
                setcookie("id", $res['id'], strtotime('+30 days'));
                header("Location: ./index.php");
            }
        } else { // Pass not correct
            $loginAlert = '<div class="alert alert-danger">Your password is not correct!</div>';
        }
    }
}


if (isset($_POST['regEmail'], $_POST["regPassword"], $_POST['name'], $_POST['city'])) { // Register
    $query = "SELECT email FROM users WHERE email='" . mysqli_real_escape_string($GLOBALS['db'], $_POST['regEmail']) . "'";
    $res = $GLOBALS['db']->query($query);

    if (mysqli_num_rows($res)) $loginAlert = '<div class="alert alert-danger">User with entered email is registered!</div>'; // Email is already registered
    else {
        $id = $db->query("SELECT MAX(id) FROM users")->fetch_array();
        $query = "INSERT INTO users (email,password,name,city) VALUES ('" . mysqli_real_escape_string($db, $_POST["regEmail"]) . "','" . mysqli_real_escape_string($db, md5(md5($id[0] + 1) . $_POST["regPassword"])) . "','" .
            mysqli_real_escape_string($db, $_POST["name"]) . "','" . mysqli_real_escape_string($db, $_POST["city"]) . "')";
        $db->query($query);
        $loginAlert = '<div class="alert alert-success">You have signed up!</div>';
        $_SESSION['id'] = $id[0] + 1; // Success
    }
}


