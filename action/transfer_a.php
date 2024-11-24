<?php require_once("../server/connect.php");
require_once("../function/userfunc.php");
require_once("../function/historyfunc.php");

if (isset($_POST['transfer'])) {

     $amount = $_POST['amount'];
     $pin = $_POST['pin'];
     $recive = $_POST['reciver'];

     if (strlen($pin) != 6) {
          $_SESSION["error"] = "Pin must be 6 digits!";
          header("Location: ../transfer.php");
          exit();
     }

     // Check if any field is empty
     if (empty($pin) || empty($amount)) {
          $_SESSION["error"] = "Please fill all fields!";
          header("Location: ../transfer.php");
          exit();
     }

     // Check if pin matches the session pin
     if ($pin != $_SESSION["user_pin"]) {
          $_SESSION["error"] = "Your pin is not correct!";
          header("Location: ../transfer.php");
          exit();
     }

     // Check if amount is a valid number
     if (!is_numeric($amount) || $amount <= 0) {
          $_SESSION["error"] = "Amount must be a valid positive number!";
          header("Location: ../transfer.php");
          exit();
     }

     if($amount > $_SESSION["user_bal"]){
          $_SESSION["error"] = "Insufficient balance!";
          header("Location: ../transfer.php");
          exit();
     }    

     if(empty($recive)){
          $_SESSION["error"] = "Please fill all fields!";
          header("Location: ../transfer.php");
          exit();
     }

     if($recive == $_SESSION["user_secid"]){
          $_SESSION["error"] = "You can't transfer to yourself!";
          header("Location: ../transfer.php");
          exit();
     }

     $usercls = new User_class();
     $reciveid = $usercls -> readsecid($recive);

     $reciveuserid = $reciveid['u_id'];
     $reciveusersecid = $reciveid['u_secid'];

     if($reciveid == null){
          $_SESSION["error"] = "User not found!";
          header("Location: ../transfer.php");
          exit();
     }

     $transfer = $usercls -> transfer($_SESSION["user_id"], $reciveusersecid, $amount);

     if ($transfer) {
          $_SESSION["success"] = "Transfer success!";
          $_SESSION["user_bal"] = $_SESSION["user_bal"] - $amount;

          $sethistory = new His_class();
          $sethistory -> create($_SESSION["user_id"], "Transfer", $amount, $_SESSION["user_bal"]);
          $sethistory -> create($reciveuserid, "Receive", $amount, $_SESSION["user_bal"]);

          header("Location: ../history.php");
     } else {
          $_SESSION["error"] = "Failed to transfer. Please try again.";
          header("Location: ../deposit.php");
     }
     
}
