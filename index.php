<?php require_once("./server/connect.php");
require_once("./function/historyfunc.php");

$login = false;

if (empty($_SESSION["user_id"])) {
} else {
     $login = true;
     $fname = $_SESSION["user_fname"];
     $lnmae = $_SESSION["user_lname"];
     $usersecid = $_SESSION["user_secid"];

     
$obj = new His_class();
$history = $obj->readuser($_SESSION["user_id"]);
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
     <link rel="stylesheet" href="./dist/public.css">
</head>

<body>

     <?php require_once("./components/nav.php"); ?>

     <?php require_once("./components/alert.php"); ?>

     <?php if ($login) { ?>

          <div class=" container pt-3">

               <p class=" text-center h5 m-5">Welcome <b class="h1"><?php echo $fname . " " . $lnmae; ?></b> may the money be with you.</p>

               <div class=" d-flex justify-content-evenly flex-wrap gap-2">

               

                    <div class=" col-sm-4 col-12 bg-primary rounded-2 p-3 ">
                         <p class="h2 text-light"><?php echo $fname . " " . $lnmae; ?></p>
                         <p class=" position-relative h6 text-light "><?php echo $usersecid; ?><a id="coppysecs" class=" p-2 pointer_cursor" style="right:1%"><i class="fa-regular fa-copy text-light pointer_cursor"></i></a></p>
                         <script>
                              //user security id copy by add event lisenter to the coppysecs id
                              document.getElementById("coppysecs").addEventListener("click", function() {
                                   console.log("copied");
                                   var copyText = document.createElement("input");
                                   copyText.value = "<?php echo $_SESSION["user_secid"]; ?>";
                                   document.body.appendChild(copyText);
                                   copyText.select();
                                   document.execCommand("copy");
                                   document.body.removeChild(copyText);

                                   Swal.fire({
                                        title: "Copied!",
                                        text: "Your id has been copied",
                                        icon: "success",
                                   });
                              });
                         </script>


                    </div>

                    <div class=" col-sm-6 col-12 bg-success rounded-2 p-3">
                         <?php
                         $i = 1;

                         $history = array_reverse($history); // Reverse the array to start from the last entry
                         $max_iterations = min(count($history), 3); // Ensure no more than 3 iterations

                         for ($i = 0; $i < $max_iterations; $i++) {
                              $his = $history[$i];
                              echo "<div class='d-flex justify-content-between'>";
                              if ($his["h_type"] == "Transfer") {
                                   echo "<p class='h6 text-light'>" . $his["h_type"] . "</p><p class='h6 text-light'> -$" . $his["h_num"] . "</p><p class='h6 text-light'>" . $his["h_time"] . "</p>";
                              } else {
                                   echo "<p class='h6 text-light'>" . $his["h_type"] . "</p><p class='h6 text-light'> +$" . $his["h_num"] . "</p><p class='h6 text-light'>" . $his["h_time"] . "</p>";
                              }
                              echo "</div>";
                         }


                         ?>
                    </div>
               </div>

          </div>

     <?php } else { ?>

          <div class=" position-absolute min-vh-100 w-100 d-flex align-items-center justify-content-center flex-column" style="margin-top: -70px;">
               <p class="h1">Welcome to Webbank</p>
               <p class="h6 text-center">to use the service you have to login or register</p>
               <div class=" d-flex gap-3">
                    <a href="./login.php" class="btn btn-primary">Login</a>
                    <a href="./register.php" class="btn btn-success">Register</a>
               </div>
          </div>

     <?php } ?>

</body>
<script src="./plugin/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/027e1ff7fd.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
</script>

</html>