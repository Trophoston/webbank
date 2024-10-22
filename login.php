<?php
require_once "./server/connect.php";

if (isset($_SESSION["user_id"])) {
     header("Location: ./index.php");
     $_SESSION["error"] = "You are already logged in!";
     exit();  // Ensure the script stops after the redirect
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
     <form action="./action/login.php" method="post" class="midivborder d-flex flex-column align-items-center">
     <a href="./index.php" class=" position-absolute d-block" style="left:15px; top:15px; text-decoration:none; color:black;"><i class="fa-solid fa-chevron-left"></i> Home</a>
          <p class="fs-2 my-3">Login</p>
          <div class="mb-3 w-100">
               <label for="cpass" class="form-label">Email</label>
               <div class="position-relative">
                    <input  name="email" required type="text" placeholder="example@mail.com" class="form-control passc" id="cpass" aria-describedby="cpass">
               </div>

          </div>

          <div class="mb-3 w-100">
               <label for="pass" class="form-label ">Password</label>
               <div class="position-relative">
                    <input  name="pass" required type="password" class="form-control  pass" id="pass" aria-describedby="pass">
                    <i class="position-absolute top-50 translate-middle fa-solid fa-eye-slash sp" style="right:1%"></i>
                    <a href="./register.php" class="position-absolute " style="right:1%;font-size:13px;text-decoration:none;">Forgot password?</a>
               </div>
          </div>

          <button type="submit" name="login" id="" class="btn btn-primary w-100 py-2 my-4">
               Login
          </button>

          <div>
               <p class="text-center mb-1 mx-sm-5 p-0">Not have an account? <a href="./register.php" class="text-decoration-none ">Register</a></p>
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