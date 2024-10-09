<?php

require_once "../server/connect.php";
require_once "../function/userfunc.php";
require_once "../function/historyfunc.php";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tell = $_POST['tell'];

    
    $user = new User_class();

    if ($user->reademail($email) != null) {
     $_SESSION["error"] = "Email already exists!";
     header("Location: ../register.php");
     exit();
    }

     if ($password != $cpassword){
     $_SESSION["error"] = "Password not match!";
     header("Location: ../register.php");
     exit();
     }

    $user->create($email, $password, $fname, $lname, $tell);
     $_SESSION["success"] = "Account created!";
     
     $his = new His_class();
     $result = $his->create($user->reademail($email)["u_id"], "Account created", 1000, 1000);

    header("Location: ../login.php");
}