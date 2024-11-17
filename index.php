<?php require_once("./server/connect.php");

$secid = rand(1,9).chr(rand(80,90)).chr(rand(85,90)).chr(rand(70,90)).rand(1,9).chr(rand(70,90)).chr(rand(70,90));

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

     <?php echo $secid;?>
     
     helloworld
</body>
     <script src="./plugin/bootstrap.bundle.min.js"></script>
     <script src="https://kit.fontawesome.com/027e1ff7fd.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
          import Swal from 'sweetalert2'

// or via CommonJS
          const Swal = require('sweetalert2')
     </script>
</html>