<?php
require_once "./server/connect.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: ./login.php");
    exit();  // Ensure the script stops after the redirect
}

if($_SESSION["user_pin"] == null){
     $_SESSION["error"] = "Please set your pin first!";
     header("Location: ./pin.php");
     exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>WEBBANK</title>
     <link rel="shortcut icon" href="./src/icon/courthouse.png" type="image/x-icon">
     <link rel="stylesheet" href="./plugin/bootstrap.css">
     <link rel="stylesheet" href="./dist/login.css">
     <script src="https://kit.fontawesome.com/027e1ff7fd.js" crossorigin="anonymous"></script>
</head>

<body>
     
     <?php require_once("./components/alert.php"); ?>
     <form action="./action/transfer_a.php" method="post" class="midivborder d-flex flex-column align-items-center parent">
     <a href="./index.php" class=" position-absolute d-block" style="left:15px; top:15px; text-decoration:none; color:black;"><i class="fa-solid fa-chevron-left"></i> Home</a>
          <p class="fs-2 my-3">Tranfer</p>

          <div class="mb-3 w-100">
               <label for="reciver" class="form-label ">Receiver</label>
               <input name="reciver" required type="text" minlength="7" maxlength="7" placeholder="0XXX00X" class="form-control " id="tell" aria-describedby="Tell">
          </div>

          <div class="mb-3 w-100">
                    <label for="amount" class="form-label ">Amount</label>
                    <div class="input-group">
                         <span class="input-group-text" id="basic-addon1">$</span>
                         <input id="amount" name="amount" type="text" class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
               </div>

          <div class="mb-3 w-100">
               <label for="pass" class="form-label ">Pin</label>
               <div class="position-relative">
                    <input  name="pin" required type="password" class="form-control pass" minlength="6" maxlength="6"  id="pass" aria-describedby="pass">
                    <i class="position-absolute top-50 translate-middle fa-solid fa-eye-slash sp" style="right:1%"></i>
                    <a href="./pin.php" class="position-absolute " style="right:1%;font-size:13px;text-decoration:none;">Forgot pin?</a>
               </div>
          </div>

          <button type="submit" name="transfer" id="" class="btn btn-primary w-100 py-2 my-4">
               Deposit
          </button>

          <div>
               <p class="text-center mb-1 mx-sm-5 p-0">This is in accordance with the  <a href="https://www.lipsum.com/" class="text-decoration-none ">policy.</a></p>
          </div>





     </form>

</body>
<script src="./plugin/bootstrap.bundle.min.js"></script>
<script>
     let passAll = document.querySelectorAll(".pass");
     let eye = document.querySelectorAll(".sp");

     function setupToggle(passElements, eyeElements) {
          eyeElements.forEach(function(eye, index) {
               eye.addEventListener("click", function() {
                    // Check if the corresponding password element exists
                    if (passElements[index]) {
                         togglePassword(passElements[index], eye);
                    }
               });
          });
     }

     function togglePassword(passElement, eyeElement) {
          if (passElement.type === "password") {
               passElement.type = "text";
               eyeElement.classList.remove("fa-eye-slash");
               eyeElement.classList.add("fa-eye");
          } else {
               passElement.type = "password";
               eyeElement.classList.remove("fa-eye");
               eyeElement.classList.add("fa-eye-slash");
          }
     }

     // Initialize toggles for both sets of elements
     setupToggle(passAll, eye);
     setupToggle(passAllc, eyec);
</script>

</html>