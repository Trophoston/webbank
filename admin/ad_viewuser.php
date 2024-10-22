<?php require_once("../server/connect.php");
require_once("../function/userfunc.php");

if (($_SESSION["user_role"] != "admin")) { 
     header("Location: ../index.php");
     exit();  // Ensure the script stops after the redirect
}

$obj = new User_class();
$vuser = $obj->readall();

if(isset($_POST["del"])){
     $del = $obj->delete($_POST["id"]);
     if($del){
          header("Location: ./ad_viewuser.php");
          exit();
     }
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

     <p class="fs-2 text-center p-3">View user <a href="./ad_adduser.php" class="btn btn-primary m-3">Add user&nbsp;&nbsp;<i class="h-r-90 fa-solid fa-plus"></i></a></p>

     
     <div class=" container ">
          
     

          <table class="table table-hover table-sm">
               <thead>
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">Fristname</th>
                         <th scope="col">Lastname</th>
                         <th scope="col">Password</th>
                         <th scope="col">Pin</th>
                         <th scope="col">Tel</th>
                         <th scope="col">Email</th>
                         <th scope="col">Balance</th>
                         <th scope="col">Role</th>
                         <th scope="col"></th>
                    </tr>
               </thead>
               <tbody class="table-group-divider ">
                    <?php
                    $i = 1;
                    foreach ($vuser as $vu) {
                    ?>
                         <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $vu["u_fname"]; ?></td>
                              <td><?php echo $vu["u_lname"]; ?></td>
                              <td><?php echo $vu["u_pass"]; ?></td>
                              <td><?php echo $vu["u_pin"]; ?></td>
                              <td><?php echo $vu["u_tel"]; ?></td>
                              <td><?php echo $vu["u_mail"]; ?></td>
                              <td><?php echo $vu["u_bal"]; ?></td>
                              <td><?php echo $vu["u_role"]; ?></td>
                              <td>
                              <form method="post">
                                   <input type="hidden" name="id" value="<?php echo $vu["u_id"]; ?>">
                                   <a href=<?php echo"./ad_edituser.php?id=" . $vu["u_id"]; ?> class="btn btn-warning"><i class="fa-solid fa-pen text "></i></a>
                                   <button type="submit" name="del" href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                              </form>
                              </td>
                              
                         </tr>
                    <?php
                         $i++;
                    }
                    ?>
               </tbody>
          </table>
     </div>
</body>
     <script src="../plugin/bootstrap.bundle.min.js"></script>
</html>