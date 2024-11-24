<?php
require_once "./server/connect.php";
require_once "./function/historyfunc.php";

if (!isset($_SESSION["user_id"])) {
     header("Location: ./login.php");
     exit();  // Ensure the script stops after the redirect
}

$obj = new His_class();
$history = $obj->readuser($_SESSION["user_id"]);

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

     <script src="https://kit.fontawesome.com/027e1ff7fd.js" crossorigin="anonymous"></script>
</head>

<body>

     <?php require_once("./components/nav.php"); ?>
     <?php require_once("./components/alert.php"); ?>

     <p class="fs-1 text-center my-3">Transaction history</p>

     <div class=" container ">
          <table class="table table-hover table-sm">
               <thead>
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">Action</th>
                         <th scope="col">Amount</th>
                         <th scope="col">Balance</th>
                         <th scope="col">Time</th>
                    </tr>
               </thead>
               <tbody class="table-group-divider ">
                    <?php
                    $i = 1;
                    foreach ($history as $his) {
                    ?>
                         <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $his["h_type"]; ?></td>
                              <td>$<?php echo $his["h_num"]; ?></td>
                              <td>$<?php echo $his["h_balance"]; ?></td>
                              <td><?php echo $his["h_time"]; ?></td>
                         </tr>
                    <?php
                         $i++;
                    }
                    ?>
               </tbody>
          </table>
     </div>

</body>
<script src="./plugin/bootstrap.bundle.min.js"></script>

</html>