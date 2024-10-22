<?php

if(isset($_SESSION["user_id"])){
     $login = true;
}else{
     $login = false;
}

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="z-index: 100;">
     <div class="container-fluid bg-body-tertiary d-flex align-items-center>
          <a class="navbar-brand d-flex align-items-center" href="#">
               <div class="d-flex align-items-center">
                    <img src="../src/icon/courthouse.png" class="nav-img d-sm-block d-none ">
                    <p class="p-0 ps-1 m-0">WEBBANK <b class=" text-danger">Admin</b></p>
               </div>
          </a>

               <?php if($login){ ?>

               <div class="btn-group">
                    <button type="button" class="border border-0 bg-body-tertiary " data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                         <img src="../src/icon/user.jpg" class="nav-img shadow-lg" alt="User Profile Icon">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end mt-2 p-0"><li>
                         <p class="m-1 px-3 py-1 text-center fs-5"><?php echo $_SESSION["user_fname"]; ?></p></li>
                         <hr class="hr p-0 m-0" />
                         <li class="position-relative"><p class="my-1 px-5 text-center font-monospace">$<?php echo $_SESSION["user_bal"]; ?></p><a href="../deposit.php" class=" position-absolute top-50 translate-middle" style="right:1%"><i class="h-r-90 fa-solid fa-plus"></i></a></li>
                         <hr class="hr p-0 m-0" />
                         <li><a href="./ad_adduser.php" class="dropdown-item py-1 text-center" >Add user</a></li>
                         <li><a href="./ad_viewuser.php" class="dropdown-item py-1 text-center" >View user</a></li>
                         <li><a href="../pin.php" class="dropdown-item py-1 text-center" >Change pin</a></li>
                         <li><a href="../index.php" class="dropdown-item py-1 text-center" >User page</a></li>
                         <li><a href="../action/logout.php" class="dropdown-item py-1 text-center" >Logout</a></li>
                    </ul>
               </div>

               <?php }else{ ?>

                    <div class="btn-group">
                    <a href="../login.php">Login <img src="../src/icon/nonlogin.png" class="nav-img shadow-lg p-1 ms-2 border border-5 h-s-105" alt="User Profile Icon"></a>
               </div>

               <?php } ?>

          </div>
     </div>
</nav>