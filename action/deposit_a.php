<?php

require_once "../server/connect.php";
require_once "../function/userfunc.php";
require_once "../function/historyfunc.php";  

if (isset($_POST['deposit'])) {

    $amount = $_POST['amount'];
    $pin = $_POST['pin'];

    // Validate pin length
    if (strlen($pin) != 6) {
        $_SESSION["error"] = "Pin must be 6 digits!";
        header("Location: ../deposit.php");
        exit();
    }

    // Check if any field is empty
    if (empty($pin) || empty($amount)) {
        $_SESSION["error"] = "Please fill all fields!";
        header("Location: ../deposit.php");
        exit();
    }

    // Check if pin matches the session pin
    if ($pin != $_SESSION["user_pin"]) {
        $_SESSION["error"] = "Your pin is not correct!";
        header("Location: ../deposit.php");
        exit();
    }

    // Check if amount is a valid number
    if (!is_numeric($amount) || $amount <= 0) {
        $_SESSION["error"] = "Amount must be a valid positive number!";
        header("Location: ../deposit.php");
        exit();
    }

    // Update balance
    $new_balance = $amount + $_SESSION["user_bal"];

    // Assuming $_SESSION["user_id"] holds the current user's ID
    $user_id = $_SESSION["user_id"];
    
    $user = new User_class();
    $result = $user->updatebal($user_id, $new_balance);

    $his = new His_class();
     $result = $his->create($user_id, "Deposit", $amount, $new_balance);

    if ($result) {
        $_SESSION["user_bal"] = $new_balance;
        $_SESSION["success"] = "Balance has been updated!";
        header("Location: ../index.php");
    } else {
        $_SESSION["error"] = "Failed to update balance. Please try again.";
        header("Location: ../deposit.php");
    }
}
?>
