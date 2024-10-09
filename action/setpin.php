<?php

require_once "../server/connect.php";
require_once "../function/userfunc.php";

if (isset($_POST['setpin'])) {

     $pin= $_POST['pin'];
     $cpin = $_POST['cpin'];
     $pass = $_POST['pass'];

     if (strlen($pin) != 6) {
          $_SESSION["error"] = "Pin must be 6 digits!";
          header("Location: ../pin.php");
          exit();
     }

     if($pin == null || $cpin == null || $pass == null){
          $_SESSION["error"] = "Please fill all fields!";
          header("Location: ../pin.php");
          exit();
     }

     if (!is_numeric($pin) || !is_numeric($cpin)) {
          $_SESSION["error"] = "Pin must be number!";
          header("Location: ../pin.php");
          exit();
     }

     //check password
     if ($pass != $_SESSION["user_pass"]) {
          $_SESSION["error"] = "Your password not correct!";
          header("Location: ../pin.php");
          exit();
     }
     
     //check pin
     if ($pin != $cpin) {
          $_SESSION["error"] = "Your pin not match!";
          header("Location: ../pin.php");
          exit();
     }

     $user = new User_class();
     $id = $_SESSION["user_id"];
     $result = $user->updatepin($id, $pin);

     $_SESSION["user_pin"] = $pin;

     $_SESSION["success"] = "Pin has been set!";
     header("Location: ../index.php");
}