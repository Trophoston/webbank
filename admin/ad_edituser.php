<?php require_once("../server/connect.php");
require_once("../function/userfunc.php");

if (($_SESSION["user_role"] != "admin")) {
     header("Location: ../index.php");
     exit();  // Ensure the script stops after the redirect
}

$obj = new User_class();
$vuid = $obj->readid($_GET["id"]);

if(isset($_POST["edituser"])){
     //id email password fname lname tell role bal pin ($email, $password, $fname, $lname, $tell, $role, $bal, $pin){
     $update = $obj->updateadmin($_GET["id"], $_POST["email"], $_POST["password"], $_POST["fname"], $_POST["lname"], $_POST["tell"], $_POST["role"], $_POST["bal"], $_POST["pin"]);
     header("Location: ./ad_viewuser.php");
     exit();
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
     <link rel="stylesheet" href="./ad_dist/edituser.css">


     <script src="https://kit.fontawesome.com/027e1ff7fd.js" crossorigin="anonymous"></script>
</head>

<body>

     <?php require_once("./ad_components/ad_nav.php"); ?>

     <?php require_once("./ad_components/ad_alert.php"); ?>

     <form action="" method="post" class="midivborder d-flex flex-column align-items-center ">
          <a href="./ad_viewuser.php" class=" position-absolute d-block" style="left:15px; top:15px; text-decoration:none; color:black;"><i class="fa-solid fa-chevron-left"></i>Back</a>
          <p class="fs-2 my-3">Edituser</p>
          <div class="mb-3 d-flex flex-sm-row flex-column gap-2 align-items-center">
               <div>
                    <label for="f-name" class="form-label">First name</label>
                    <input name="fname" type="text" placeholder="Jhon" class="form-control " id="f-name" aria-describedby="fname" value="<?= $vuid["u_fname"]; ?>">
               </div>

               <div>
                    <label for="l-name" class="form-label">Last name</label>
                    <input name="lname" type="text" placeholder="Seana" class="form-control" id="l-name" aria-describedby="lname" value="<?= $vuid["u_lname"]; ?>">
               </div>
          </div>

          <div class="mb-3 d-flex flex-sm-row flex-column gap-2 align-items-center">
               <div class="w-sm-40 ">
                    <label for="tell" class="form-label ">Tell</label>
                    <input name="tell" type="tell" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" minlength="10" placeholder="091xxxxxxx" class="form-control " id="tell" aria-describedby="Tell" value="<?= $vuid["u_tel"]; ?>">
               </div>

               <div class="w-sm-60">
                    <label for="mail" class="form-label">Email</label>
                    <input name="email" type="text" placeholder="example@mail.com" class="form-control" id="mail" aria-describedby="emailHelp" value="<?= $vuid["u_mail"]; ?>">
               </div>
          </div>

          <div class="mb-3 d-flex flex-sm-row flex-column gap-2 align-items-center">
               <div class="w-sm-50">
                    <label for="pass" class="form-label ">Password</label>
                    <div class="position-relative">
                         <input name="password" type="text" class="form-control  pass" id="pass" aria-describedby="pass" value="<?= $vuid["u_pass"]; ?>">
                    </div>
               </div>

               <div class="w-sm-50">
                    <label for="cpass" class="form-label">Pin</label>
                    <input name="pin" type="tel" class="form-control passc" id="cpass" aria-describedby="cpass" maxlength="6" minlength="6" value="<?= $vuid["u_pin"]; ?>">
               </div>
          </div>

          <div class="mb-3 d-flex flex-sm-row flex-column gap-2 align-items-center w-100">
               <div class="w-sm-50">
                    <label for="pass" class="form-label ">Balance</label>
                    <div class="position-relative">
                         <input name="bal" type="number" class="form-control  pass" id="pass" aria-describedby="pass" value="<?= $vuid["u_bal"]; ?>">
                    </div>
               </div>

               <div class="w-sm-50">
                    <label for="pass" class="form-label ">Role</label>
                    <select class="form-select" id="inputGroupSelect01" name="role">
                         <option selected value="<?= $vuid["u_role"]; ?>"><?= $vuid["u_role"]; ?> (default)</option>
                         <option value="user">user</option>
                         <option value="admin">admin</option>
                         <option value="ban">ban</option>
                    </select>
               </div>
          </div>

          <!-- check policy -->

          <div class="px-0 py-2 my-4 d-flex w-100 gap-1">
               <button type="submit" name="edituser" id="" class="btn btn-warning w-50 ">
                    edit
               </button>

               <a class="btn btn-danger w-50" href="./ad_viewuser.php">cancel</a>
          </div>

     </form>

</body>
<script src="../plugin/bootstrap.bundle.min.js"></script>

</html>