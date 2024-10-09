<?php require_once("../server/connect.php");

if (($_SESSION["user_role"] != "admin")) { 
     header("Location: ./index.php");
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
     
     <script src="https://kit.fontawesome.com/027e1ff7fd.js" crossorigin="anonymous"></script>
</head>
<body>

     <?php require_once("./ad_components/ad_nav.php"); ?>

     <?php require_once("./ad_components/ad_alert.php"); ?>
     
     helloworld
</body>
     <script src="../plugin/bootstrap.bundle.min.js"></script>
</html>