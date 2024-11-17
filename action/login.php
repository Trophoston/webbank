<?php

require_once "../server/connect.php";
require_once "../function/userfunc.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $user = new User_class();

    // Assuming login returns an associative array or an object
    $row = $user->login($email, $password);

    if ($row == null) {
        $_SESSION["error"] = "Password or email not correct!";
        header("Location: ../login.php");
        exit();
    }

    // Assuming $row is an associative array, so use [] for accessing array keys
    $_SESSION["user_id"] = $row['u_id'];
    $_SESSION["user_fname"] = $row['u_fname'];
    $_SESSION["user_lname"] = $row['u_lname'];
    $_SESSION["user_tel"] = $row['u_tell'];
    $_SESSION["user_email"] = $row['u_mail'];
    $_SESSION["user_role"] = $row['u_role'];
    $_SESSION["user_bal"] = $row['u_bal'];
    $_SESSION["user_pin"] = $row['u_pin'];
     $_SESSION["user_pass"] = $row['u_pass'];
     $_SESSION["user_secid"] = $row['u_secid'];

    header("Location: ../index.php");
    exit();
}
