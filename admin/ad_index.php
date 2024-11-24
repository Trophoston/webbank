<?php require_once("../server/connect.php");

if (($_SESSION["user_role"] != "admin")) { 
     header("Location: ../index.php");
     exit();  // Ensure the script stops after the redirect
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>WEBBANK-Admin</title>
     <link rel="shortcut icon" href="../src/icon/courthouse.png" type="image/x-icon">
     <link rel="stylesheet" href="../plugin/bootstrap.css">
     <link rel="stylesheet" href="../dist/public.css">
     
     
</head>
<body>

     <?php require_once("./ad_components/ad_nav.php"); ?>

     <?php require_once("./ad_components/ad_alert.php"); ?>

     <div class="container mt-3">
          <div class="row">
               <div class="col-12">
                    <h1 class="text-center">Welcome to Admin Page</h1>
               </div>

               <div>
                    
               </div>
          </div>
     
     helloworld
</body>
     <script src="../plugin/bootstrap.bundle.min.js"></script>
     <script src="https://kit.fontawesome.com/027e1ff7fd.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
          import Swal from 'sweetalert2'

// or via CommonJS
          const Swal = require('sweetalert2')
     </script>
</html>