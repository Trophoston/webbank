<?php require_once("./server/connect.php");

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
     <form action="./action/register.php" method="post" class="midivborder d-flex flex-column align-items-center ">
          <a href="./index.php" class=" position-absolute d-block" style="left:15px; top:15px; text-decoration:none; color:black;"><i class="fa-solid fa-chevron-left"></i> Home</a>
          <p class="fs-2 my-3">Register</p>
          <div class="mb-3 d-flex flex-sm-row flex-column gap-2 align-items-center">
               <div>
                    <label for="f-name" class="form-label">First name</label>
                    <input name="fname" required type="text" placeholder="Jhon" class="form-control " id="f-name" aria-describedby="fname">
               </div>

               <div>
                    <label for="l-name" class="form-label">Last name</label>
                    <input name="lname" required type="text" placeholder="Seana" class="form-control" id="l-name" aria-describedby="lname">
               </div>
          </div>

          <div class="mb-3 d-flex flex-sm-row flex-column gap-2 align-items-center">
               <div class="w-sm-40 ">
                    <label for="tell" class="form-label ">Tell</label>
                    <input name="tell" required type="tell" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" placeholder="091xxxxxxx" class="form-control " id="tell" aria-describedby="Tell">
               </div>

               <div class="w-sm-60">
                    <label for="mail" class="form-label">Email</label>
                    <input name="email" required type="text" placeholder="example@mail.com" class="form-control" id="mail" aria-describedby="emailHelp">
               </div>
          </div>

          <div class="mb-3 d-flex flex-sm-row flex-column gap-2 align-items-center">
               <div class=" ">
                    <label for="pass" class="form-label ">Password</label>
                    <div class="position-relative">
                         <input name="password" required type="password" class="form-control  pass" id="pass" aria-describedby="pass">
                         <i class="position-absolute top-50 translate-middle fa-solid fa-eye-slash sp" style="right:1%"></i>
                    </div>
               </div>

               <div class="">
                    <label for="cpass" class="form-label">Confrim password</label>
                    <div class="position-relative">
                         <input  name="cpassword" required type="password" class="form-control passc" id="cpass" aria-describedby="cpass">
                         <i class="position-absolute top-50 translate-middle fa-solid fa-eye-slash spc" style="right:1%"></i>
                    </div>

               </div>
          </div>

          <!-- check policy -->
          <div class="form-check align-self-start">
               <input required class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
               <label class="form-check-label" for="flexCheckDefault">
                    I agree to the <a href="https://www.lipsum.com/" class="text-decoration-none">policy</a>
               </label>
          </div>

          
          <button type="submit" name="register" id="" class="btn btn-primary w-100 px-5 py-2 my-4">
                    Create account
          </button>

          <div>
               <p class="text-center mb-1 p-0">Already have an account? <a href="./login.php" class="text-decoration-none ">Login</a></p>
          </div>


          


     </form>

</body>
<script src="./plugin/bootstrap.bundle.min.js"></script>
<script>

let passAll = document.querySelectorAll(".pass");
let eye = document.querySelectorAll(".sp");

let passAllc = document.querySelectorAll(".passc");
let eyec = document.querySelectorAll(".spc");

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